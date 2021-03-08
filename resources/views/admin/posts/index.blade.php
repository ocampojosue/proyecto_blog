@extends('adminlte::page')
@section('title', 'Shaarawy')

@section('content_header')
    <a class="btn btn-success float-right" href="{{route('admin.posts.create')}}">crear Nuevo Post</a>
    <h1>Listado de Posts</h1>
@stop

@section('content')
@livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop