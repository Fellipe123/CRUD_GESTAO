<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Gerenciamento de Estoque</title>
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <script type="text/javascript" src="js/funcoes.js"></script><script type="text/javascript" src="js/funcoes.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
</head>
<body>
         <nav class="jumbotron p-3 mb-2 bg-primary text-white">
            <div class="container-fluid">
                <img src="Image/manuntencao.png" width="50" height="50">
                <h1 class="d-inline-block align-top">Gerenciamento de Estoque</h1>
            </div>
         </nav>
        
            <div class='content'>
                @yield('content')
            </div>

            <footer class="bg-primary text-white footer">
                <div class="footer-copyright text-center py-3">
                    © 2019 Desenvolvido Por: Fellipe
                </div>
            </footer>

</body>
</html>
