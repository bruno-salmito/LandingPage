<?php
/**
 * Arquivo que vai ser responsável pelo controle de envio
 * dos e-mails
 */
    require_once('../config.php');
    $data = [];


    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        //o email é válido
        $assunto = 'Novo cadastro no site';
        $corpo = '';
        foreach($_POST as $key => $value){
            $corpo .=ucfirst($key).' : '.$value;
            $corpo .='<br>';
        }
        $info = array('assunto'=>$assunto,'corpo'=>$corpo);
        $mail = new Email('HOST DA SUA HOSPEDAGEM',
        'USERNAME DA SUA HOSPEDAGEM',
        'SENHA DA SUA HOSPEDAGEM',
        'SEU NOME');
        $mail->setEmail('SEU E-MAIL DE DESTINO AQUI','Landing Page System');
        $mail->formatEmail($info);

        if($mail->sendEmail()){
            $data['sucesso'] = true;
        }else{
            $data['sucesso'] = false;
        }
        
    }else{
        //o email não é válido
        $data['sucesso'] = false;
    }

    die(json_encode($data));


?>