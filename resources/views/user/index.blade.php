@extends('templates.master')

@section('css-view')
    
@endsection

@section('js-view')
    
@endsection

@section('conteudo-view')

    @if(session('success'))
        <h3>{{session('success')['messages']}}</h3>
        
    @else
        <h3>erro</h3>
    @endif

{!! Form::open(['route' => 'user.store', 'method' => 'post', 'class'  => 'form-padrao']) !!}
    @include('templates.formulario.input',['label' => 'cpf','input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
    @include('templates.formulario.input',['input' => 'name', 'attributes' => ['placeholder' => 'NOME']])
    @include('templates.formulario.input',['input' => 'phone', 'attributes' => ['placeholder' => 'TELEFONE']])
    @include('templates.formulario.input',['input' => 'email', 'attributes' => ['placeholder' => 'E-MAIL']])
    @include('templates.formulario.password',['input' => 'password', 'attributes' => ['placeholder' => 'SENHA']])
    @include('templates.formulario.submit',['input' => 'Cadastrar'])
{!! Form::close() !!}
 
    @include('user.list', ['user_list' => $users])

@endsection
