<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            .logo{
                max-width:160px;
                margin: 10px;
            }
        </style>
    </head>
    <body>    
        <nav class="navbar bg-info">
            <a class="navbar-brand" href="http://www.coesma.com.br">
                <img src="img/logo-coesma.png" class="logo">
            </a>
            <a class="navbar-brand" href="http://aelian.com.br">
                <img src="img/logo-aelian.png"class="logo">
            </a>
        </nav>

        <section class="container bg-light">

            <header class="text-center">
                <h1>Calculadora</h1>
                    <h3>Orientação à Objetos</h3>
            </header>
                <br>

            <div class="container">

                    <form action="index.php" method="POST">

                        <div class="row form-group">
                            <div class="col-md-6">
                                Digite um número:
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="n1" class="form-control-lg" placeholder="2">
                            </div>
                        </div>
                        <br>

                        <div class="row form-group">
                            <div class="col-md-6">
                                Digite outro número:
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="n2" class="form-control-lg" placeholder="3">
                            </div>
                        </div>
                    <br>

                        <div class="row form-group text-center">
                            <div class="col-md-3">
                                <button type="submit" name="somar" class="btn btn-danger">Somar</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" name="subtrair" class="btn btn-info">Subtrair</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" name="multiplicar" class="btn btn-warning">Multiplicar</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" name="dividir" class="btn btn-success">Dividir</button>
                            </div>                            
                        </div>
                    </form>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Resultado:</h2>

                    <?php
                    include 'calculadora.php';

                    $calculadora = new Calculadora();

                    if (isset($_POST['somar']) || isset($_POST['subtrair']) || isset($_POST['multiplicar']) || isset($_POST['dividir'])) {

                        $calculadora->setNumero1($_POST['n1']);
                        $calculadora->setNumero2($_POST['n2']);

                        if (isset($_POST['somar'])) {
                            $calculadora->Somar();
                        } elseif (isset($_POST['subtrair'])) {
                            $calculadora->Subtrair();
                        } elseif (isset($_POST['multiplicar'])) {
                            $calculadora->Multiplicar();
                        } elseif (isset($_POST['dividir'])) {
                            $calculadora->Dividir();
                        }
                    }
                    
                    ?>

                    </div>
                </div>

            </div>
        </section>
  
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>