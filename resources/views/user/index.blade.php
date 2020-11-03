@extends('templates.master')

@section('css-view')
    
@endsection

@section('js-view')
    
@endsection

@section('conteudo-view')

    @if(session('success'))
        <h3>{{session('success')['messages']}}</h3>
    {{-- @else
    <h3>não houve retorno</h3> --}}
    @endif

{!! Form::open(['route' => 'user.store', 'method' => 'post', 'class'  => 'form-padrao']) !!}
    @include('templates.formulario.input',['label' => 'CPF','input' => 'cpf', 'attributes' => ['placeholder']])
    @include('templates.formulario.input',['input' => 'nome', 'attributes' => ['placeholder']])
    @include('templates.formulario.input',['input' => 'phone', 'attributes' => ['placeholder']])
    @include('templates.formulario.input',['input' => 'email', 'attributes' => ['placeholder']])
    @include('templates.formulario.password',['input' => 'password', 'attributes' => ['placeholder']])
    @include('templates.formulario.submit',['input' => 'Cadastrar'])
{!! Form::close() !!}

        <table class="default-table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>CPF</td>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Nacimento</td>
                    <td>E-mail</td>
                    <td>Status</td>
                    <td>Permissão</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->birth }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->permission }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection
