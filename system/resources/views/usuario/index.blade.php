Show the list to users
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->Foto}}</td>
            <td>{{$usuario->Nombre}}</td>
            <td>{{$usuario->ApellidoPaterno}}</td>
            <td>{{$usuario->ApellidoMaterno}}</td>
            <td>{{$usuario->Correo}}</td>
            <td>
            <a href="{{url('/usuario/'.$usuario->id.'/edit')}}">
                Editar
            </a>
            <form action="{{url('/usuario/'.$usuario->id)}}" method='post'>
            @csrf
            {{method_field('DELETE')}}  
            <input type="submit" onclick=" return confirm('¿Desea Borrar?')"
            value="Borrar">
            </form>     
            Borrar</td>
        </tr>
        @endforeach
    </tbody>

</table>
