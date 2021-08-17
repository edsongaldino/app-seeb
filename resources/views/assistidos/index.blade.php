@extends('layout')
@section('conteudo')
<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#">Tables</a>
      <span class="breadcrumb-item active">Basic Table</span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Assistidos</h4>
    <p class="mg-b-0">Lista de assistidos cadastrados na casa espírita</p>

    <a href="{{ route('assistidos.adicionar') }}"><button class="btn btn-info add-pessoa"><i class="fa fa-plus"></i> Adicionar</button></a>
  </div>

  <div class="br-pagebody">
    <div class="br-section-wrapper">

    <div class="bd bd-gray-300 rounded table-responsive">
    <table class="table table-hover mg-b-0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($assistidos as $assistido)
            <tr>
                <th scope="row">{{ $assistido->id }}</th>
                <td>{{ $assistido->nome }}</td>
                <td>{{ $assistido->telefone }}</td>
                <td></td>
            </tr>  
        @endforeach
    
        </tbody>
    </table>
    </div><!-- bd -->
    </div>
  </div>
@endsection