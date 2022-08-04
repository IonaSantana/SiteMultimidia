<?php

$login = $_POST['login'];
$senha_ = md5($_POST['senha']); 

// as próximas linhas são responsáveis em se conectar com o bando de dados.
$servidor = 'localhost:8889';
$banco = 'usuarios';
$usuario = 'root';
$senha = 'root';
$link = mysqli_connect($servidor, $usuario, $senha);
$db = mysqli_select_db($link,$banco);

    if(!$link)
    {
        echo "erro ao conectar ao banco de dados!";
        exit();
    }

    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='
        cadastro.html';</script>";

    }else{
        $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
        $select = mysqli_query($link,$query_select);
        while($array = mysqli_fetch_array($select)){
            $log = $aux['login'];
            if($log == $login){
                echo"<script language='javascript' type='text/javascript'>
                alert('Esse login já existe');window.location.href='
                login.html';</script>";
                die();        
                exit();
            }
        }
        
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha_')";
        $insert = mysqli_query($link,$query);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.
            href='login.html'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location
            .href='cadastro.html'</script>";
        }
            
    }
?>