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

    {!! Form::model($instituition, ['route' => ['instituition.update', $instituition->id], 'method' => 'put', 'class' => 'form-padrao'])!!}
    @include('templates.formulario.input',['label' => 'Nome','input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.submit',['input' => 'Atualizar'])
    {!! Form::close() !!}

@endsection