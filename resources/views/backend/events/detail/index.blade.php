@extends('backend.layouts.app')

@section('title')
Dynamic Event Form
@endsection

@section('body')

<style>
.form-box{
    display:none;
    margin-top:20px;
    padding:20px;
    border:1px solid #ddd;
    border-radius:10px;
}

.form-box.active{
    display:block;
}
</style>

<div class="container mt-3">

<h3>Event Form Selector</h3>

<!-- ================= DROPDOWN ================= -->
<select id="formSelector" class="form-control w-50">
    <option value="">-- Select Form Structure --</option>
    <option value="form1">Form 1 (Text Editor)</option>
    <option value="form2">Form 2 (Text + Image)</option>
    <option value="form3">Form 3 (Image + Text)</option>
    <option value="form4">Form 4 (Banner)</option>
</select>

<form action="" method="POST" enctype="multipart/form-data">
@csrf

<!-- ================= FORM 1 ================= -->
<div class="form-box" id="form1">
    <h4>Form 1 - Text Editor</h4>
    <textarea name="form1_text" class="form-control"></textarea>
</div>

<!-- ================= FORM 2 ================= -->
<div class="form-box" id="form2">
    <h4>Form 2 - Left Text / Right Image</h4>

    <div class="row">
        <div class="col-md-6">
            <textarea name="form2_text" class="form-control"></textarea>
        </div>

        <div class="col-md-6">
            <input type="file" name="form2_image" class="form-control">
        </div>
    </div>
</div>

<!-- ================= FORM 3 ================= -->
<div class="form-box" id="form3">
    <h4>Form 3 - Image + Text</h4>

    <div class="row">
        <div class="col-md-6">
            <input type="file" name="form3_image" class="form-control">
        </div>

        <div class="col-md-6">
            <textarea name="form3_text" class="form-control"></textarea>
        </div>
    </div>
</div>

<!-- ================= FORM 4 ================= -->
<div class="form-box" id="form4">
    <h4>Form 4 - Banner + Overlay</h4>

    <input type="file" name="banner_image" class="form-control mb-2">
    <input type="text" name="overlay_text" class="form-control">
</div>

<!-- SUBMIT -->
<button type="submit" class="btn btn-success mt-3">
    Submit
</button>

</form>

</div>

<!-- ================= JS ================= -->
<script>
document.getElementById('formSelector').addEventListener('change', function () {

    let selected = this.value;

    // hide all forms
    document.querySelectorAll('.form-box').forEach(box => {
        box.classList.remove('active');
    });

    // show selected form
    if(selected){
        document.getElementById(selected).classList.add('active');
    }

});
</script>

@endsection