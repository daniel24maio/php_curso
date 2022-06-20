<?php

$mysql = new mysqli('localhost', 'root','dan1985@','blog');
$mysql->set_charset('utf8');

if ($mysql == FALSE){
    echo "Erro na conexão do banco de dados!";
}