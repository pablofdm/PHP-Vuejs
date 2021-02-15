@extends('layouts.app')

@section('content')
<pagina tamanho="12">

    @if($errors->all())
        <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            @foreach($errors->all() as $key => $value)
            <li><strong>{{$value}}</strong> </li>
            @endforeach
        </div>
    @endif

    <painel titulo="Lista de Artigos">
        <div></div>
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição', 'Data']" 
            v-bind:itens="{{json_encode($listaArtigos)}}" 
            criar="#criar" detalhe="/admin/artigos/" editar="/admin/artigos/" deletar="/admin/artigos/" token="{{ csrf_token() }}" ordem="desc" ordemcol="1" modal="sim"
            >
        </tabela-lista>
        <div class="d-flex row justify-content-center">
            {{$listaArtigos->links()}}
        </div>
    </painel>
</pagina>

<modal nome="adicionar" titulo="Adicionar">
    <formulario id="formAdicionar" css="" action="{{route('artigos.store')}}" method="post" enctype="" token="{{ csrf_token() }}">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título" aria-describedby="passwordHelpInline" value="{{old('titulo')}}">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" class="form-control" name="descricao" placeholder="descricao" aria-describedby="passwordHelpInline" value="{{old('descricao')}}">
    </div>
    <div class="form-group">
        <label for="conteudo">Conteudo</label>
        <textarea name="conteudo" class="form-control">{{old('conteudo')}}</textarea>
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="datetime-local" id="data" class="form-control" name="data" aria-describedby="passwordHelpInline" value="{{old('data')}}">
    </div>
    
    </formulario>
        <button form="formAdicionar" class="btn btn-info">Adicionar</button>
        <span slot="botoes"></span>
</modal>

<modal nome="editar" titulo="Editar">
    <formulario id="formEditar" css="" v-bind:action="'/admin/artigos/ + $store.state.item.id'" method="put" enctype="multipart/form-data" token="12345">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição">
        </div>
        <div class="form-group">
        <label for="conteudo">Conteudo</label>
        <textarea name="conteudo" class="form-control" v-model="$store.state.item.conteudo"></textarea>
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="datetime-local" id="data" class="form-control" name="data" aria-describedby="passwordHelpInline" v-model="$store.state.item.data">
    </div>
    </formulario>
    <span slot="botoes">
        <button form="formEditar" class="btn btn-info">Atualizar</button>
    </span>
  </modal>
<modal nome="detalhe" v-bind:titulo="$store.state.item.titulo">
    <p>@{{$store.state.item.descricao}}</p>
    <p>@{{$store.state.item.conteudo}}</p>
</modal>
@endsection
