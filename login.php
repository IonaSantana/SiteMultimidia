<?php
// session_start inicia a sessão
session_start();

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha_ = md5($_POST['senha']);


// as próximas linhas são responsáveis em se conectar com o bando de dados.
$servidor = 'localhost:8889';
$banco = 'usuarios';
$usuario = 'root';
$senhaa = 'root';
$link = mysqli_connect($servidor, $usuario, $senhaa);
$db = mysqli_select_db($link,$banco);

    if(!$link)
    {
        echo "<p>erro ao conectar ao banco de dados!</p>";
        exit();
    }

    if(!$login || !senha)
    {
        echo ("<p>Login ou senha sem valores</p>");
        header("location:login.html");
        exit();
    }else{
        $queryy = "SELECT * FROM usuarios WHERE login =
        '$login' AND senha = '$senha_'";
        $verifica = mysqli_query($link,$queryy) or die("erro ao selecionar");
        
        if (mysqli_num_rows($verifica) != 1){          
            echo ("<p>Login ou senha invalidas</p>");
            // unset ($_SESSION['login']
            //     $_SESSION['senha']);
            header("location:login.html");
            exit();
            
        }else{
            // setcookie("login",$login);
            
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha_;
            header("location:site.php");
            exit();
      }
    }
   
?>