<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
}

$logado = $_SESSION['login'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
</head>

<body>
<table width="800" height="748" border="1">
  <tr>
    <td height="90" colspan="2" bgcolor="#CCCCCC">SITE MULTIMIDIA</br></td>
    <?php
  echo" Bem vindo $logado";
  ?>
    </td>
  </tr>
  <tr>
    <td width="103" height="410" bgcolor="#CCCCCC">FUTURO MENU</td>
    <td width="546">
      <p>Se prepare para o tanto de fofura que está por vir</p></br>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/eR-b3AYhqoA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p>  Agora que você já se divertiu, vem com esse audio de estudo </p></br>
      <!-- metadata carrega só as informação como data, duração... -->
      <!-- <audio preload = "metadata"> -->
        <iframe width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/258878862&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/yxsmay" title="yxsmay" target="_blank" style="color: #cccccc; text-decoration: none;">yxsmay</a> · <a href="https://soundcloud.com/yxsmay/skyjaxx-think-about-it" title="THNK IT THRU" target="_blank" style="color: #cccccc; text-decoration: none;">THNK IT THRU</a></div>
      <!-- </audio>  -->
      <p>  Fofura de novo </p></br>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/4R6woWfjC3I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p>  E esse foi o conteúdo de hoje, amanhã tem mais </p></br>
    </td>
  </tr>
  <a href ="logout.php">DESLOGAR</a>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>
</body>
</html>