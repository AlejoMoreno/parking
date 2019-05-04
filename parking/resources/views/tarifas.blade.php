@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Tarifas</h4>
                <p class="card-category">Formulario para actualizar tarifas</p>
            </div>
            <div class="card-body">
                <form class="row">
                    <label class="col-md-2 ">ID</label><div class="col-md-2"><input type="text" id="id" name="id" placeholder="id" class="col-md-10 form-control"></div>
                    <label class="col-md-2 ">idParqueadero</label><div class="col-md-6"><select id="idParqueadero" name="idParqueadero" class="col-md-10 form-control"><option value="0">Seleccione Parqueadero</option></select></div>
                    <label class="col-md-2 ">idTipoUsuario</label><div class="col-md-2"><select id="idTipoUsuario" name="idTipoUsuario" class="col-md-10 form-control"><option value="0">Seleccione Tipo Usuario</option></select></div>
                    <label class="col-md-2 ">usuario</label><div class="col-md-6"><input type="text" id="usuario" name="usuario" placeholder="usuario" class="col-md-10 form-control"></div>
                    <label class="col-md-2 ">nombres</label><div class="col-md-2"><input type="text" id="nombres" name="nombres" placeholder="nombres" class="col-md-10 form-control"></div>
                    <label class="col-md-2 ">apellidos</label><div class="col-md-6"><input type="text" id="apellidos" name="apellidos" placeholder="apellidos" class="col-md-10 form-control"></div>
                    <label class="col-md-2 ">direccion</label><div class="col-md-2"><input type="text" id="direccion" name="direccion" placeholder="direccion" class="col-md-10 form-control"></div>
                    <label class="col-md-2 ">telefono</label><div class="col-md-6"><input type="text" id="telefono" name="telefono" placeholder="telefono" class="col-md-10 form-control"></div>
                    <label class="col-md-2 ">contraseña</label><div class="col-md-2"><input type="password" id="contrasena" name="contrasena" placeholder="contrasena" class="col-md-10 form-control"></div>
                    <label class="col-md-2 ">email</label><div class="col-md-6"><input type="email" id="email" name="email" placeholder="email" class="col-md-10 form-control"></div>
                    <div class="col-md-12"><input type="submit" class="btn btn-success" value="Guardar"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Tarifas</h4>
                <p class="card-category">Esta tabla muestra las tarifas creados en el sistema</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>xxx</th>
                        <th>xxx</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MOTO</td>
                            <td>10</td>
                            <td>2</td>
                            <td>4</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>CARRO</td>
                            <td>10</td>
                            <td>2</td>
                            <td>4</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>CICLA</td>
                            <td>10</td>
                            <td>2</td>
                            <td>4</td>
                            <td>6</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>

@endsection()