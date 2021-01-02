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

    {!! Form::open(['route' => ['instituition.product.store', $instituition->id], 'method' => 'post', 'class' => 'form-padrao'])!!}
        @include('templates.formulario.input',['label' => 'Nome do Produto','input' => 'name'])
        @include('templates.formulario.input',['label' => 'Descrição','input' => 'description'])
        @include('templates.formulario.input',['label' => 'Indexador','input' => 'index'])
        @include('templates.formulario.input',['label' => 'Taxa de Juros','input' => 'interest_rate'])
        @include('templates.formulario.submit',['input' => 'Cadastrar'])
    {!! Form::close() !!} 

@endsection