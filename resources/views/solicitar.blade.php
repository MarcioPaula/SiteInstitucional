@extends('_layout.template')

@section('titulo', 'Solicitar site')

@section('conteudo')


    <div class="parallax-container" id="parallax2">
        <div class="parallax"><img src="{{asset('images/parallax1.jpg')}}"></div>
    </div>

    <div class="row" >

        <h3 class="center">Solicite um orçamento</h3>

        <div class="col m8 offset-m2">

            <form action="{{route('email')}}">

                <div class="input-field">
                    <input placeholder="Nome" required id="nome" name="nome" type="text" class="validate">
                    <label for="first_name">Nome completo</label>
                </div>
                <br>
                <div class="input-field">
                    <input placeholder="Email" required id="email" name="email" type="email" class="validate">
                    <label for="first_name">Email</label>
                </div>
                <br>
                <div class="input-field">
                    <input placeholder="Telefone" required id="telefone" name="telefone" type="number" class="validate">
                    <label for="first_name">Telefone</label>
                </div>
                <br>

                <button class="btn btn green right">Enviar</button>

            </form>

        </div>
    </div>

    <div class="parallax-container" id="parallax2">
        <div class="parallax"><img src="{{asset('images/parallax1.jpg')}}"></div>
    </div>


@endsection
