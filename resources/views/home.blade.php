@extends('_layout.template')

@section('titulo', 'Página Inicial')

@section('conteudo')

    <div class="parallax-container" id="parallax1">
        <div class="parallax"><img  src="{{asset('images/parallax1.jpg')}}"></div>
    </div>

            <h3 class="center">Para você</h3>

            <div class="row" id="cards">

                <div class="col s11 m3 offset-m1 ">
                    <div class="card">
                        <a href="#solicite">
                        <div class="card-image">
                            <img height="200" src="{{asset('images/solicite.jpg')}}">
                            <span class="card-title black">Solicite o seu site</span>
                        </div>
                        </a>

                    </div>
                </div>
               <!-- <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('images/parceiros.jpg')}}">
                            <span class="card-title black">Parceiros</span>
                        </div>
                        <div class="card-content">
                            <p>Veja os nossos principais parceiros para quem criamos sites.</p>
                            <br>
                        </div>
                        <div class="card-action">
                            <a href="#parceiros">Parceiros</a>
                        </div>
                    </div>
                </div> -->
                <div class="col s11 m3">
                    <a href="#sobre">
                    <div class="card">
                        <div class="card-image">
                            <img height="200" src="{{asset('images/sobre.jpg')}}">
                            <span class="card-title  black">Sobre nós</span>
                        </div>

                    </div>
                    </a>
                </div>


            </div>  <br>

   <!-- <div id="parceiros">
        <h3 class="center">Nossos parceiros</h3>
        <div class="row center ">
            <div class="col m8 offset-m2 ">
                <img width="150" src="{{asset('images/logo_senac_default.png')}}" alt=""> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <img width="150" src="{{asset('images/logo-ufenesp.png')}}" alt=""> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <img class="grey" width="150" src="{{asset('images/swfast-logo.png')}}" alt="">

            </div>
        </div>
    </div> -->


    <div id="solicite">
        <h3 class="center">Solicite seu site</h3>
        <div class="row">
            <div class="center col m4 offset-m4 offset-s1">
                <p>Solicite orçamento através do email e retornaremos com as melhores propostas</p>
                <p><i class="fas fa-envelope"></i> contato@vortexsites.com.br</p>
            </div>
        </div>
    </div>
    <br>


    <div id="sobre">
        <h3 class="center">Sobre nós</h3>
        <div class="row">
            <div class="center col m4 offset-m4">
                <p>Nosso foco é ajudar as pequenas empresas e empresários a criar seu site institucional, atraindo mais clientes e realizando uma melhor divulgação da sua marca.</p>
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
        </div>
    </div>

    </div>


    <div id="parallax1" class="parallax-container">
        <div class="parallax"><img src="{{asset('images/parallax1.jpg')}}"></div>
    </div>

@endsection
