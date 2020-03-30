<?php
/**
 * Classe que controla o envio de e-mails 
 * Autor: Bruno Salmito
 * Versão 1.0
 */

	class Email
	{

		private $mailer;

		public function __construct($host,$username,$password,$name){
						
			$this->mailer = new PHPMailer;

			$this->mailer->isSMTP();                                      	// Set mailer to use SMTP
			$this->mailer->Host = $host;  				  					// Specify main and backup SMTP servers
			$this->mailer->SMTPAuth = true;                               	// Enable SMTP authentication
			$this->mailer->Username = $username;       						// SMTP username
			$this->mailer->Password = $password;                       		// SMTP password
			$this->mailer->SMTPSecure = 'ssl';                            	// Enable TLS encryption, `ssl` also accepted
			$this->mailer->Port = 465;                                    	// TCP port to connect to

			$this->mailer->setFrom($username,$name);
			
			$this->mailer->isHTML(true);                                  	// Set email format to HTML
			
			$this->mailer->CharSet = 'UTF-8';

		}//fim do método construct



		public function setEmail($email,$name){
			/* Função para adicionar o endereço de e-mail */
			$this->mailer->addAddress($email,$name);
		}


		public function formatEmail($info){
			/* Função que vai formatar o e-mail a ser enviado */
			$this->mailer->Subject = $info['assunto'];
			$this->mailer->Body    = $info['corpo'];
			$this->mailer->AltBody = strip_tags($info['corpo']);
		}


		public function sendEmail(){
			/* Função que irá enviar o e-mail aos destinatários */
			if($this->mailer->send()){
				//Enviado com sucesso
				return true;
			}else{
				//Falha ao enviar
				return false;
			}
		}


	}//fim da classe

?>