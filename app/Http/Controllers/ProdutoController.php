<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Produto;
use Validator;

class ProdutoController extends Controller
{
   
  // funcao CREATE do crud.  
  function store(ProdutoRequest $request ){
        // inserir dados do formulario na base de dados 
        Produto::create($request->all());
        // Enviar para tela de sucesso, apos o envio do formulario para o BD 
        return redirect('cadastrar')->with('msg','Produto Cadastrado com Sucesso!');
  }

  // Filtrando os registro do BD, READ do crud 
  function index(Request $request){
     
     $nome     =  $request->input('nome');
     $marca    =  $request->input('marca');
     $situacao =  $request->input('situacao');
    
     // filtro de busca dos campos nome, marca e situacao
       $filtro = Produto::where(function($query) use ($nome , $marca , $situacao){
            if(isset($nome)){
                $query->where('nome', $nome);
            }
            if(isset($marca)){
                $query->where('marca', $marca);
            } 
            if(isset($situacao)){
                $query->where('situacao', $situacao);
            }  
        
    })->get();
    
      //  return Redirect('/consulta')->with('filtro', [ 'filtro' => $filtro ]);
      return view('consulta.consulta' , [ 'filtro' =>  $filtro ] );
    
  }

  // funcao para editar ou atualizar o registo do BD, geralmente esse tipo
  // de funcao chama uma visao
  function edit($id){
     // Pegando o dado do Produto pelo id
     $dados = Produto::find($id);
     // retornando a pagina com os dados do produto 
     return view('editar.edit', ['dados' => $dados ]);
  }

  // funcao para atualizar o BD, o CRUD e update
  function update(ProdutoRequest $request ,$id){
    
     // Pegando o dado do Produto pelo id para ser atualizado
      $dados = Produto::find($id);
      // pegando valor a ser atualizado
      $dados->nome       = $request->nome;
      $dados->marca      = $request->marca;
      $dados->quantidade = $request->quantidade;
      $dados->situacao   = $request->situacao;
      $dados->preco      = $request->preco;
      $dados->descricao  = $request->descricao;
      // salvando definitivamente no BD
      $dados->save();
      return redirect()->route('produto.edit', $dados->id)->with('msg','Produto Atualizado com sucesso!');

  }


  // funcao para excluir registro do BD, o CRUD e delete
  function excluir($id){
     // Pegando o dado do Produto pelo id para ser deletado
     $dados = Produto::find($id);
     $dados->delete();
     return redirect('/consulta')->with('msg','Produto Excluido com sucesso!');
  } 















}
