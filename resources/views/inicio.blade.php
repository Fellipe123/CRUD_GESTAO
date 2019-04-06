@extends('layouts.app')

    @section("content")
      
    <br><br><br><br>  
    
       <div class="" id="content-view">

            
                 <div class="col-md-6 offset-md-3">
                 <button onclick="window.location.href='/cadastrar'" class="btn btn-primary btn-lg btn-block">Cadastrar Novo Produto</button>
                 </div>
                 
                 <br /><br />
                 
                 <div class="col-md-6 offset-md-3">
                     <button onclick="window.location.href='/consulta'" class="btn btn-primary btn-lg btn-block">Consultar Produto</button>
                 </div> 

      </div>
       
       

   @endsection