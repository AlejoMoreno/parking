@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Censo de vehiculos</h4>
            <p class="card-category">Esta tabla muestra los vehiculos que se encuentran en el parqueadero numero #{1}</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th>Tipo Vehiculo</th>
                    <th>Total</th>
                    <th>Mensual</th>
                    <th>Quincena</th>
                    <th>Común</th>
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
    <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title ">Censo de vehiculos</h4>
                <p class="card-category">Esta tabla muestra los vehiculos que se encuentran en el parqueadero numero #{1}</p>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>Tipo Vehiculo</th>
                            <th>Total</th>
                            <th>Mensual</th>
                            <th>Quincena</th>
                            <th>Común</th>
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
    </div>

@endsection()