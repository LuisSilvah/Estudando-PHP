<?php
    include_once("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>LOCADORA</title>
</head>

<style>

    :root {
        background-color: #040D12;
        color: #fff;
    }

    body {
        margin: 0;
        padding: auto;
        box-sizing: border-box;
        /* background-color: #040D12; */
    }

    header {
        background-color: #252B48;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }
    
    h1 {
        margin: 0;
        /* color: #fff; */
        font-size: 18px;
    }

   a {
        color: #fff;
        text-decoration: none;
    }

    .home_view {
        margin-top: 60px;
        text-align: center;
    }

    .btn-action {
        margin: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-action a {
        padding: 10px 15px;
        border: 1px #fff;
        border-radius: 10px;
        border-style: solid;
        font-weight: 800;

        background-color: #252B48;
    }

    .btn-function {
        background-color: #252B48;
        padding: 2px 10px;
    }

    table {
        margin: 20px auto;
        border-color: #fff;
    }


</style>

<body>
    <header>
    <h1><a href="index.php">LOCADORA</a></h1>
    <ul>
        <li><a href="index.php?menu=home">Home</a></li>
        <li><a href="index.php?menu=videos">Videos</a></li>
        <li><a href="index.php?menu=categorias">Categorias</a></li>
        <li><a href="index.php?menu=clientes">Clientes</a></li>

    </ul>
    </header>
    <main>
        <?php
        if (isset($_GET['menu'])){
            $menu = $_GET['menu'];
        } else {
            $menu = "";
        }
        switch ($menu) {
            case "home":
                include("home.php");
                break;
            case "videos";
                include("lista-videos.php");
                break;
            case "cad-videos";
                include("cad-videos.php");
                break;
            case "inserir-videos";
                include("inserir-videos.php");
                break;
            case "editar-videos";
                include("editar-videos.php");
                break;
            case "excluir-videos";
                include("excluir-videos.php");
                break;
            case "atualizar-videos";
                include("atualizar-videos.php");
                break;
            case "categorias";
                include("lista-categorias.php");
                break;
            case "cad-categorias";
                include("lista-categorias.php");
                break;
            case "inserir-categorias";
                include("inserir-categorias.php");
                break;
            case "editar-categorias";
                include("editar-categorias.php");
                break;
            case "atualizar-categorias";
                include("atualizar-categorias.php");
                break;
            case "excluir-categorias";
                include("excluir-categorias.php");
                break;
            case "clientes";
                include("lista-clientes.php");
                break;
            case "cad-clientes";
                include("cad-clientes.php");
                break;
            case "inserir-clientes";
                include("inserir-clientes.php");
                break;
            case "editar-clientes";
                include("editar-clientes.php");
                break;
            case "atualizar-clientes";
                include("atualizar-clientes.php");
                break;
            case "excluir-clientes";
                include("excluir-clientes.php");
                break;
            case "locacao";
                include("locacao.php");
                break;
            default:
             include("home.php");
        }
        ?>
    </main>
</body>
</html>