@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h4>Bienvenido Usuario: {{$usuario->name}}</h4>

                    <p>Ud tiene {{$postCount}} Posts</p>

                    <div class="accordion" id="accordionPanelsStayOpen">

                        @foreach($comentarios as $key => $post)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-heading{{$post["post"]["id"]}}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$post["post"]["id"]}}" aria-expanded="true" aria-controls="panelsStayOpen-collapse{{$post["post"]["id"]}}">
                                    Post {{$key}}: {{$post["post"]["titulo_post"]}}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapse{{$post["post"]["id"]}}" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-heading{{$post["post"]["id"]}}" style="padding: 10px">
                                <p>{{$post["post"]["texto_post"]}}</p>

                                @foreach($post["comentario"] as $comentario)
                                    <div class="card">
                                        <div class="card-header">
                                            {{$comentario["user"]}}
                                        </div>
                                        <div class="card-body">
                                            {{$comentario["comentario"]}}
                                        </div>
                                    </div>
                                    <br>
                                @endforeach

                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
