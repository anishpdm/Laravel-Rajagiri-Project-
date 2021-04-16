@extends("theme")

@section("content")

<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6">

  <table class="table">
  
     <tr>
         <th> NAME </th>
         <th> DESIGNATION </th>
         <th> MOBILE </th>
         <th> COLLEGE </th>
     </tr>


@foreach($faculties as $faculty)
     <tr>
         <td> {{  $faculty->fname }} </td>
         <td>  {{  $faculty->fdesignation }} </td>
         <td> {{  $faculty->fmob }}</td>
         <td>  {{  $faculty->fcollege }}</td>

<td> <a class="btn btn-warning" href="/faculty/{{$faculty->id}}/edit">  Edit  </a> </td>

<td>  <a class="btn btn-danger" href="/faculty/{{$faculty->id}}/delete"  > Delete  </a>  </td>

     </tr>

  @endforeach   


   
  
  </table>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
</div>
</div>
    
@endsection