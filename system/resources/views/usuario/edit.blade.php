Form to edition of a user

<form action="{{url('/usuario/'.$usuarios->id)}}" method="post" enctype="multipart/form-data">

    @csrf
    {{method_field('PATCH')}}

    @include('usuario.form');

</form>







