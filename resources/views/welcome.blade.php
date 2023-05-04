@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card border-gray-200 bg-gray-100">
                        <div class="card-header">
                            <h1>Prueba Pompeyo Carrasco</h1>
                        </div>
                        <div class="card-body">
                            Para revisar los post, logearse con cualquier usuario de los listados aqui abajo:
                            <?php
                                $usuarios = \App\Models\User::all();
                            ?>
                            <br>
                            <br>

                            <ul>
                                @foreach($usuarios as $usuario)
                                    <li>{{$usuario->email}}</li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="card-footer">
                            La clave de todos los usuarios es :  123456
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
