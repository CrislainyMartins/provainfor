<?php //pagina onde vai inserir os dados no banco
include("conexao.php");//incluen a comunicacao com o banco, pois é ela que faz a conexao com o banco, ja esse arquivo vai armazenar as informacoes na tabela
$nome=$_POST["nome"];//post:envia o que foi digitado em name no index.php
$email=$_POST["email"];
$senha= password_hash($_POST["senha"],PASSWORD_DEFAULT);


$consulta="INSERT INTO usuario(nome,email,senha) 
VALUES('$nome','$email','$senha')";
//insert into=INSIRA NA TABELA, usuario=nome da tabela, ()colunas da tabela
//values é para enviar os valores para as variaveis
if($conexao=mysqli_query($conexao,$consulta)){//query é uma consulta, ele vai verificar a o que foi feito em conexao e consulta 
    echo"cadastro realizado com sucesso";
}
else{
    echo"erro ao se cadastrar";
}

?>





































."></div>(nome,email,senha)=colunas, values= valores das variaveis
if($conexao=mysqli_query($conexao,$consulta)){
    echo"cadatro realizado com sucesso";
}else{
    echo"erro ao se cadastrar com o banco";
}
?>