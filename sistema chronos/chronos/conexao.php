<?php
$conexao = mysql_connect('localhost', 'msvco758_marcusv', 'msv0198@') or die (' Não foi possivel se conectar');
$db = mysql_select_db('msvco758_chronos', $conexao) or die (' Não pode ser conectar ao banco de dados');
?>