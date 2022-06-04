Form to creation of a users

<form action="{{url('/usuario')}}" method="post" enctype="multipart/form-data">
@csrf
@include('usuario.form');


</form>