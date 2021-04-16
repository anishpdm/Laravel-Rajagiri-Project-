@extends("theme")

@section("content")

<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/facultyeditprocess/{{ $faculties->id }}" method="post">

{{ csrf_field() }}

<table class="table">

 <tr>
     <td> Name </td>
     <td>
      <input value="{{   $faculties->fname }}" name="fname" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Designation</td>
     <td>       <input value="{{   $faculties->fdesignation }}" name="fdes" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Contact number</td>
     <td>      <input value="{{   $faculties->fmob }}" name="fcontact" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>College </td>
     <td>      <input value="{{   $faculties->fcollege }}" name="fcollege" type="text" class="form-control">
</td>
 </tr>


 <tr>
     <td></td>
     <td> <button class="btn btn-success"> SUBMIT </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>



@endsection