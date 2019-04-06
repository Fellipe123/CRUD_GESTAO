@extends('layouts.appAlterar')

@section('content')

  
    @if(isset($dados))

        <form method="POST" action="{{ route('produto.update' , $dados->id) }}"> 
                {{ method_field('PUT') }}
                @csrf

                <table>
                <tr>
                    @foreach($errors->all() as $error)
                        <td>
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>  
                        </td>
                    @endforeach  
                </tr>
            </table>

            @if(session('msg'))
                <div class="alert alert-success" role="alert">
                    {{ session('msg') }}
                </div>  
            @endif 

            <div class="row">     
                    
                    &nbsp;&nbsp; 
                    <div class="col-md-2 col offset 4">
                        <div class="form-group">
                            <label for="nome">Nome do Produto:</label>
                            <input type="text" name="nome" id="nome" value="{{ $dados->nome }}">
                        </div>    
                    </div> 
                    
                    
                    <div class="col-md-2 col offset 4">
                        <div class="form-group">
                            <label for="marca">Marca:</label> 
                            <input type="text" name="marca" id="marca" value="{{ $dados->marca }}">
                        </div> 
                    </div>

                    <div class="col-md-2 col offset 4">
                        <div class="form-group">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" name="quantidade" id="quantidade" min="0" value="{{ $dados->quantidade }}">
                        </div>
                    </div>       

                    
                    <div class="col-md-2 col offset 4">
                        <div class="form-group">
                            <label for="situacao">Situação:</label>
                                <select name="situacao" id="situacao" style="width:180px; height:30px">
                                        @if($dados->situacao == "disponivel")
                                            <option selected value="{{ $dados->situacao }}">{{ $dados->situacao }}</option>
                                            <option value="indisponivel">Indisponivel</option>
                                        @else
                                            <option value="disponivel">Disponivel</option>
                                            <option selected value="{{ $dados->situacao }}">{{ $dados->situacao }}</option>
                                        @endif 
                                </select>
                            </div>
                    </div>

                    <div class="col-md-2 col offset 4">                    
                        <div class="form-group">
                                <label for="preco">Preço:</label>
                                <input type="text" name="preco" id="preco" value="{{ $dados->preco }}">
                        </div>
                    </div>

            </div>
            <div class="row">
                    &nbsp;&nbsp;
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="descricao">Descrição:</label>
                            <textarea name="descricao" id="descricao" style="overflow-y: scroll;" value="" cols="30" rows="4">{{ $dados->descricao }}</textarea>    
                            <small class="form-text text-muted">Favor apertar ENTER, para ir para proxima linha!</small>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <br /><br /><br /><br />
                        <button class="btn btn-primary" type="submit">Atualizar</button>   
                    <a class="btn btn-primary" href="{{ route('consulta') }}">Voltar</a>
                    </div>   

            </div>
            </form>

    @else
  
            <h1>Produto não Encontrado, favor clique no botão de voltar!</h1>
            <a class="btn btn-primary" href="{{ route('consulta') }}">Voltar</a>
            
    @endif


   <script>
           jQuery(document).ready(function(){
                 $('#preco').mask('#.##0.00', {reverse: true});
                
           });

   </script> 

















@endsection