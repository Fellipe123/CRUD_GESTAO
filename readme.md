# SISTEMA DE GERENCIAMENTO DE ESTOQUE 

## Sobre o Projeto

Este Projeto consiste em fazer o cadastro, atualizar, escluir e consultar todos os produtos no
sistema de estoque.

# Layout da Pagina Inicial


![img](https://github.com/Fellipe123/CRUD_GESTAO/blob/master/Screenshot/telaInicial.PNG)

# Layout da Pagina Cadastro

![img](https://github.com/Fellipe123/CRUD_GESTAO/blob/master/Screenshot/telaCadastro.PNG)


# Layout da Pagina de Consulta

![img](https://github.com/Fellipe123/CRUD_GESTAO/blob/master/Screenshot/telaFiltro.PNG)

## Framework Ultilizado

  - Laravel

## Banco de Dados 

  - Mysql

## Como Executar o Projeto

   * Primeiramente, faça um Clone do repositorio do github sendo https://github.com/Fellipe123/CRUD_GESTAO.git
    
   * Execute o Terminal/Cmd
   
   * Navegue até a pasta 'CRUD_GESTAO' do projeto
   
   * Execute o comando $ composer install

   * Execute o comando $ composer update

   * Inicialize um novo arquivo '.env' e insere as informações de acesso ao banco de dados como database, user e password

   * Crie o Database no banco de dados Mysql igual do arquivo .env
   
   * Execute o comando $ php artisan migrate

   * Execute o comando $ php artisan serve
