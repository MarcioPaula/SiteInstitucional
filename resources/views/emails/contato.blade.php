@extends('beautymail::templates.minty')

@section('content')

    @include('beautymail::templates.minty.contentStart')
    <tr>
        <td class="title">
           Nova solicitação de orçamento
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            <b>Solicitante:</b>{{$dados['nome']}}<br><br>
            <b>Email:</b>{{$dados['email']}}<br><br>
            <b>Telefone:</b>{{$dados['telefone']}}
        </td>
    </tr>
    <tr>
        <td width="100%" height="25"></td>
    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td>
            @include('beautymail::templates.minty.button', ['text' => 'Sign in', 'link' => '#'])
        </td>
    </tr>
    <tr>
        <td width="100%" height="25"></td>
    </tr>
    @include('beautymail::templates.minty.contentEnd')

@stop
