<?php
/**
 * Arquivo de configuração do site principal
 * Autor: Bruno Salmito
 * Versão: 0.1
 */

 /* Carrega as classes automáticamente */
 $autoload = function($classe){
     if($classe == 'Email'){
         include_once('classes/phpmailer/PHPMailerAutoload.php');
     }
     include('classes/'.$classe.'.php');
 }; //Final da variavel autoload
 spl_autoload_register($autoload);


?>