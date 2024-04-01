<?php
include("conexao.php");
function gerarhash ($senha){//criou uma funçao para usar como parâmetro a variavel senha 
    $hash= password_hash($senha, PASSWORD_DEFAULT);//a variavel hash recebe a variavel senha e transforma ela em 64bits, ou seja, criptografa
    return $hash;
}
?>