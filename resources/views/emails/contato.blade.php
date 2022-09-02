@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h4 class="secondary"><strong>Hello World</strong></h4>
    <p>Nova solicitação do email: {{$dados['email']}}</p>

    @include('beautymail::templates.widgets.articleEnd')


    @include('beautymail::templates.widgets.newfeatureStart')

    <h4 class="secondary"><strong>Hello World again</strong></h4>
    <p>This is another test</p>

    @include('beautymail::templates.widgets.newfeatureEnd')

@stop
