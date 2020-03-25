# Projeto - 01
> Landing Page desenvolvida no curso da Danki Code (Fullstack).
> Projeto inicial desenvolvido segundo as informações do curso
> Versão: 0.1

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

* config.ph -> 'classes/config.php', arquivo responsável pela conecxão com o banco de dados

```
<?php
    define('HOST','localhost'); #servidor do banco de dados (alterar onde esta localhost)
    define('DB','landing');     #nome do banco de dados
    define('USER','root');      #usuário do banco de dados
    define('PASS','');          #senha para acesso ao banco de dados
    #define('OPTIONS', 'array(PDO::MYSQL_ATTR_INIT_COMMAND => '."SET NAMES utf8".')'); 
    #array(PDO::MYSQL_ATTR_INIT_COMMAND => SET NAMES utf8)
?>
```
* JS -> *js/script.js*, arquivo contendo os principais scripts JavaScript do site (Falta implantar)

```
script.js

```

## Próximas implatações

* Salvar dados do formulário no banco de dados (Executado).
* Implantar PHP Mailer.
* Implatar máscara no formulário.
* Painel administrativo com dashboard.
* Gal. de imagens.
* Real chat.


## Configuração para Desenvolvimento

Basta clonar ou fazer o download do repositório e mexer a vontade.


## Histórico de lançamentos

* 0.0.2
    * MUDANÇA: Adicionado conexão com o banco de dados (consultar arquivo config.php/db.php)
* 0.0.2
    * MUDANÇA: Atualização do css (código do módulo permanece inalterado)
* 0.0.1
    * Trabalho em andamento

## Meta

Bruno Salmito – [@bruno.salmito.5](https://web.facebook.com/bruno.salmito.5) – brunosalmito@gmail.com

Distribuído sob a licença MIT. Veja `LICENSE` para mais informações.

[https://github.com/bruno-salmito/github-link](https://github.com/bruno-salmito/)

## Contributing

1. Faça o _fork_ do projeto (<https://github.com/bruno-salmito/projeto-01/fork>)
2. Crie uma _branch_ para sua modificação (`git checkout -b feature/fooBar`)
3. Faça o _commit_ (`git commit -am 'Add some fooBar'`)
4. _Push_ (`git push origin feature/fooBar`)
5. Crie um novo _Pull Request_

[npm-image]: https://img.shields.io/npm/v/datadog-metrics.svg?style=flat-square
[npm-url]: https://npmjs.org/package/datadog-metrics
[npm-downloads]: https://img.shields.io/npm/dm/datadog-metrics.svg?style=flat-square
[travis-image]: https://img.shields.io/travis/dbader/node-datadog-metrics/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/dbader/node-datadog-metrics
[wiki]: https://github.com/seunome/seuprojeto/wiki
