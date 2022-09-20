<?php 
//Inlcui conexão com o banco de dados
include('../connection/conn.php');
//Variável que recebe o conteúdo da requisição  do app decodificando-a em (json)
$postJason = json_decode(file_get_contents('php://input', true), true);

if($postJason['requisicao'] == 'cadastrar'){
    $query_cliente = $conn->prepare("INSERT INTO tbcliente set nome_cliente = :nome_cliente, cpf_cliente = :cpf_cliente, telefone_cliente = :telefone_cliente,
    cnpj_cliente = :cnpj_cliente, razao_social_cliente = :razao_social_cliente, id_tipo_cliente = :id_tipo_cliente,
    email_cliente = :email_cliente, senha_cliente = :senha_cliente");

//Verifica se é pessoa jurídica ou pessoa física
    if($postJason['cnpj'] == "" ){
        $id_tipo_cliente = 1;
    }else{
        $id_tipo_cliente = 2;
    }
//Atribui ao link os valores armazenados na variável $postJson
    $query_cliente->bindValue(":nome_cliente", $postJason['nome']);
    $query_cliente->bindValue(":cpf_cliente", $postJason['cpf']);
    $query_cliente->bindValue(":telefone_cliente", $postJason['telefone']);
    $query_cliente->bindValue(":cnpj_cliente", $postJason['cnpj']);
    $query_cliente->bindValue(":razao_social_cliente", $postJason['rsocial']);
    $query_cliente->bindValue(":id_tipo_cliente", $id_tipo_cliente);
    $query_cliente->bindValue(":email_cliente", $postJason['email']);
    $query_cliente->bindValue(":senha_cliente", $postJason['senha']);

    //executa a query
    $query_cliente->execute();
}





?>