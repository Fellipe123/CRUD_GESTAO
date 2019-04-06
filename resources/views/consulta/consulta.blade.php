@extends('layouts.app')

@section('content')



<form method="POST" action="{{ route('produto.index') }}"> 
    {{ method_field('GET') }}
    
    @csrf

    @if(session('msg'))
        <div class="alert alert-success" role="alert">
            {{ session('msg') }}
        </div>  
    @endif  

    <div class="row">     
               
                 {{-- Espaco --}}
                 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 
                 <div class="form-group">
                      <!-- Campo Nome -->
                      <label for="nome">Nome do Produto:</label><br />
                      <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
                 </div>
                 
                 {{-- Espaco --}}
                 &nbsp; &nbsp;&nbsp;
                <div class="form-group">
                    <!-- Campo Marca -->
                    <label for="marca">Marca:</label> <br />
                    <input type="text" name="marca" id="marca" value="{{ old('marca') }}"> 
                </div>
                
                {{-- Espaco --}}
                &nbsp; &nbsp;&nbsp;
                <div class="form-group">
                    <!-- Campo Situacao -->
                    <label for="situacao">Situação:</label><br >
                    <select name="situacao" id="situacao" style="width:180px; height:30px">
                        <option value="disponivel">Disponivel</option>
                        <option value="indisponivel">Indisponivel</option>
                    </select>

                </div>
                
                {{-- Espaco --}}
                &nbsp; &nbsp;&nbsp;
                <div class="form-group">
                    <!-- Botao de Filtrar -->
                    <br />
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                    &nbsp; 
                    <a class="btn btn-primary" href="{{ route('inicio') }}">Voltar</a>
                </div> 

    </div>    

    <br /><br />   
            
            <!-- ##################################     Resultado do filtro       ################################################# -->
            
    
            <table class="table table-striped">

                <thead>
                    
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">#</th>
                        <th scope="col">Nome do Produto</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Situação</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Descrição</th>
                    </tr>
                    
                </thead>
                <tbody>

                <!-- ################################ Filtro de Resultado #################################-->                      
                   
                    @if(isset($filtro))
                        <?php $i= 0; ?>
                        @foreach ($filtro as $chave)
                      
                                <tr>
                                    {{-- Imagem --}}
                                    <td style="width:170px">
                                        <a href="{{ route('produto.edit' , $chave->id ) }}" class="btn btn-warning">Editar</a>
                                        <a href="{{ route('excluir' , $chave->id ) }}" class="btn btn-danger">Excluir</a>
                                    </td>
                                    {{-- <td style="width:70px" >  
                                        /*
                                        * Este código foi comentado, pois o metodo DELETE ao carregar a pagina, com os 
                                        * registro, sobrescreve o metodo de envio do formulario de GET para DELETE
                                        * e sendo assim gera um erro, porque o protocolo http por padrão aceita somente 
                                        * requisições do tipo GET e POST.     
                                        */
                                        <form action="{{ route('produto.destroy' , $chave->id ) }}" method="DELETE">
                                                {{-- @method('DELETE') --}}
                                                {{-- @csrf
                                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form> 
                                    </td>   --}}
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $chave->nome }}</td>
                                    <td>{{ $chave->marca }}</td>
                                    <td>{{ $chave->quantidade }}</td>
                                    <td>{{ $chave->situacao }}</td>
                                    <td>{{ $chave->preco }}</td>
                                    <td>{{ $chave->descricao }}</td> 

                                </tr>  

                            @endforeach

                    @endif
                      
                </tbody>

            </table>



            
   

</form>


























@endsection

