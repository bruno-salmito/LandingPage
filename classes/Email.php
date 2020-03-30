<?php
	
	class Email
	{
		public $erro = "Não foi possível enviar e-mail";
		private $mailer;

		public function __construct($nome,$email,$telefone,$mensagem){
			
			
			
			$mailer = new PHPMailer;

			$mailer->isSMTP();                                      	// Set mailer to use SMTP
			$mailer->Host = 'COLOCAR SEU HOST AQUI';  				  	// Specify main and backup SMTP servers
			$mailer->SMTPAuth = true;                               	// Enable SMTP authentication
			$mailer->Username = 'COLOCAR SEU USER NAME DO EMAIL';       // SMTP username
			$mailer->Password = 'SENHA DO EMAIL';                       // SMTP password
			$mailer->SMTPSecure = 'ssl';                            	// Enable TLS encryption, `ssl` also accepted
			$mailer->Port = 465;                                    	// TCP port to connect to

			$mailer->setFrom('COLOCAR O EMAIL DO USERNAME','NOME');
			$mailer->addAddress('ENDEREÇO DE DESTINO','NOME');
			
			$mailer->isHTML(true);                                  	// Set email format to HTML
			
			$mailer->CharSet = 'UTF-8';
			$mailer->Subject = 'Você recebeu um cadastro';
			$mailer->Body    = "O cliente: $nome <br>E-mail: $email<br>Telefone: $telefone<br>Mensagem:<br>$mensagem";
			$mailer->AltBody = 'Este é um e-mail sem html';
		
			if($mailer->send()){
				return true;
			}else{
				echo "<script>alert($erro);</script>";
			}
		}
	}

?>