<?php 
session_start();
//inclui conexão com o banco de dados
include('../connection/conn.php');
//Inclui variável de ambiente
include('../php/config_global.php');

//captura o ID que veio na requisição do modal
$id_user = filter_input(INPUT_GET, "id_usuario", FILTER_SANITIZE_NUMBER_INT);

//QUERY para deletar usuários com força bruta tei tei
$query_usuarios = "DELETE FROM tbusuarios WHERE id_usuario = :id";
$del_usuarios = $conn->prepare($query_usuarios);
$del_usuarios->bindParam(':id', $id_user);

if($del_usuarios->execute()){
    header("location: msg_alert_usuario.php");
    //Cria variável global para salvar a menssagem de sucesso
    $_SESSION['msg'] = "<p style='color:green;'>Tudo Certo!!<br>Usuário excluido com sucesso!</P> ";
}else{
//Cria variável global para salvar a menssagem de erro
$_SESSION['msg'] = "<p style='color:#f00;'> Erro: Ops!! Erro, não foi possível exluir usuário!</p>";

header("location: msg_alert_usuario.php");
}

?>