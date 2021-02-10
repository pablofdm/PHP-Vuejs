@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de Artigos">
        <div></div>
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        <!-- <button type="button" class="btn btn-primary" >Large modal</button> -->
        <modal-link tipo="button" nome="#meuModalTeste" data-toggle="modal" data-target="#meuModalTeste" titulo="Criar" css=""></modal-link>
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição']" 
            v-bind:itens="[['1','PHP OO', 'Curso de PHP 00'],['2','Vue js','Curso de Vue.js']]" 
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="753395423" ordem="desc" ordemcol="1"
            >
        </tabela-lista>
    </painel>
</pagina>
<modal nome="meuModalTeste">
<painel titulo="Adicionar">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label> 
        </div>
    </form>
    <form>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</modal>
@endsection
