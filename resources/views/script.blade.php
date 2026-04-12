
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>

    $(document).ready(function(){
        
        $('#search').on('keyup',function(e){
            e.preventDefault();
            let search = $(this).val();
            // console.log(search);

            $.ajax({
                url:"{{route('search')}}",
                method:'get',
                data:{search:search},
                success: function(response) {
                    if (response.status == 'success') {
                        $('tbody').html(response.tasks);
                    } else {
                        $('tbody').html('<tr><td colspan="4">No tasks found.</td></tr>');
                    }
                }
            });
        });

    });

</script>
