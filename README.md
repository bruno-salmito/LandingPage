# Projeto - 01
> Landing Page - Use a vontade.
> Versão: 0.2

[![NPM Version][npm-image]][npm-url]
[![Build Status][travis-image]][travis-url]
[![Downloads Stats][npm-downloads]][npm-url]

Landing Page para conversão de leads de um determinado produto, esta landing page é um mero exemplo e pode ser modificada.

![Screenshot](land1.bmp)
![Screenshot](land2.bmp)
![Screenshot](land3.bmp)

## Arquivos

* CSS -> *css/style.css*, arquivo contendo a estilização do site.

```
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

html,
body {
    height: 100%;
}

a {
    text-decoration: none;

}

.center {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2%;
}

.clear {
    clear: both;
}

/* -------------------------------------------
   Estilização do header
*/
header {
    width: 100%;
    padding: 5px;
    background-color: #D6D6D6;
    padding: 10px 2%;


}
```

* config.php -> *config.php*, arquivo que contém todas as configurações do site.
** Foi implantado neste arquivo a função para carregar todas as classes de forma automática.

```
 $autoload = function($classe){
     if($classe == 'Email'){
         include_once('classes/phpmailer/PHPMailerAutoload.php');
     }
     include('classes/'.$classe.'.php');
 }; //Final da variavel autoload
 spl_autoload_register($autoload);
```

* Email.php -> *classes/Email.php*, classe que envia o e-mail.
**Obs: Alterar os campos necessarios indicados no arquivo

```

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
```

* JS -> *js/script.js*, arquivo contendo os principais scripts JavaScript do site (Falta implantar)

```
script.js

```

## Próximas implatações

* Salvar dados do formulário no banco de dados.
* Implantar PHP Mailer (Funcionando).
* Implatar máscara no formulário.
* Painel administrativo com dashboard.
* Gal. de imagens.
* Real chat.


## Configuração para Desenvolvimento

Basta clonar ou fazer o download do repositório e mexer a vontade.


## Histórico de lançamentos

* 0.0.2
    * MUDANÇA: Adicionado PHPMailer para envio do formulário para e-mail.
    * Fazer as alterações de host, usuário, porta e e-mail de destino na `classe/Email.php`;
* 0.0.2
    * MUDANÇA: Atualização do css (código do módulo permanece inalterado)
* 0.0.1
    * Trabalho em andamento

## Meta

Bruno Salmito – [@bruno.salmito.5](https://web.facebook.com/bruno.salmito.5) – brunosalmito@gmail.com

Distribuído sob a licença MIT. Veja `LICENSE` para mais informações.

[https://github.com/bruno-salmito/github-link](https://github.com/bruno-salmito/)

## Contributing

1. Faça o _fork_ do projeto (<https://github.com/bruno-salmito/LandingPage/fork>)
2. Crie uma _branch_ para sua modificação (`git checkout -b feature/fooBar`)
3. Faça o _commit_ (`git commit -am 'Add some fooBar'`)
4. _Push_ (`git push origin feature/fooBar`)
5. Crie um novo _Pull Request_

[npm-image]: https://img.shields.io/npm/v/datadog-metrics.svg?style=flat-square
[npm-url]: https://npmjs.org/package/datadog-metrics
[npm-downloads]: https://img.shields.io/npm/dm/datadog-metrics.svg?style=flat-square
[travis-image]: https://img.shields.io/travis/dbader/node-datadog-metrics/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/dbader/node-datadog-metrics
[wiki]: https://github.com/bruno-salmito/LandingPage/wiki
