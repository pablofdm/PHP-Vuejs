@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de Artigos">
        <div></div>
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição']" 
            v-bind:itens="{{$listaArtigos}}" 
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="753395423" ordem="desc" ordemcol="1" modal="sim"
            >
        </tabela-lista>
    </painel>
</pagina>

<modal nome="adicionar">
    <painel titulo="Adicionar">
        <formulario css=""action="#" method="post" enctype="multipart/form-data" token="12345">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título" aria-describedby="passwordHelpInline">
            </div>
            <div class="form-group">
                <label for="titulo">Descrição</label>
                <input type="text" id="descricao" class="form-control" name="titulo" placeholder="Título" aria-describedby="passwordHelpInline">
            </div>
                <button class="btn btn-info">Adicionar</button>
        </formulario>
    </painel>
</modal>

<modal nome="editar">
    <painel titulo="Editar">
      <formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição">
        </div>
        <button class="btn btn-info">Atualizar</button>
      </formulario>
    </painel>
  </modal>
<modal nome="detalhe">
    <painel v-bind:titulo="$store.state.item.titulo">
        <p>@{{$store.state.item.descricao}}</p>
    </painel>
</modal>
@endsection
