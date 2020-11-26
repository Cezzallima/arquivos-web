<?php
/* FRANQUIA DO SITE*/
define('TITULO', 'Painel Administrativo');
/*CONEXÃO COM O BANCO DE DADOS*/
define('USUARIO', 'root');
define('SENHA', '');
define('BANCO_DE_DADOS', 'sec_saude');
define('LOCAL', 'localhost');

/*AUTOLOAD DE CLASSE*/
function __autoload($Classe){
    require __DIR__. './crud/'.$Classe.'.class.php';
}


