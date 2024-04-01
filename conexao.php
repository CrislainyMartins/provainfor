<?php //padrao
$host="localhost";
$user="root";
$senha="";
$banco="provainfor";

if($conexao = mysqli_connect($host,$user,$senha,$banco)){//faz a conexao coom o banco de dados
    echo"conexao realizada com sucesso";
}
else{
    echo"erro";
}
?>