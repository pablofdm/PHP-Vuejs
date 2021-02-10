@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de Artigos">
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição']" 
            v-bind:itens="[['1','PHP OO', 'Curso de PHP 00'],['2','Vue js','Curso de Vue.js']]" 
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="753395423" ordem="desc" ordemcol="1"
            >
        </tabela-lista>
    </painel>
</pagina>
@endsection
