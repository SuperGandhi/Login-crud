

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{$usuarios->Nombre}}" id="Nombre">
<br>

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" value="{{$usuarios->ApellidoPaterno}}" id="ApellidoPaterno">
<br>

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{$usuarios->ApellidoMaterno}}" id="ApellidoMaterno">
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{$usuarios->Correo}}" id="Correo">
<br>

<label for="Foto">Foto</label>
{{$usuarios->Foto}}
<input type="file" name="Foto" value="" id="Foto">
<br>

<input type="submit" value="Guardar datos">
<br>
