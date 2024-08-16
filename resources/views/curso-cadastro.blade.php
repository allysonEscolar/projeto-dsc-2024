@extends('adminlte::page')

@section('title', 'Cadastro de Curso')

@section('content_header')
    <h1>Cadastro de Curso</h1>
@stop

@section('content')
    <form action="{{route('curso.salvar')}}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required autofocus>
        <button>Salvar</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop