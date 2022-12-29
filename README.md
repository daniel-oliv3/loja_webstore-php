##
### Loja WebStore
##


### LOJA WEB COM PHP PURO

- WebStore simples (frontend, loja, carrinho clientes, backoffice, ...)

**Tecnologias**:

- PHP, MySQL, HTML, CSS, Javascript, Bootstrap, Axios, PHPMailer, mPDF...

- Objetivos:
    - Treinar competências de PHP e criação de projetos web
    - Treinar estratégias e formas de resolução de problemas
    - Criar uma plataforma base para a construção de uma webstore
- Fluxo de trabalho:
    - Preparar o ambiente de desenvolvimento
    - Criar a strutura base da aplicação
    - Construção do Core da aplicação
    - Criação da loja e dos processos de construção do carrinho de compras
    - Gestão de clientes da loja (registro de clientes, login, logout, perfil, etc...)
    - Simulação de processo de checkout
    - BackOffcice para gestão de clientes e encomendas
- Requisitos para acompanhar o projeto:
    - Conhecimentos sólidos de HTML, CSS e Javascript
    - Bons conhecimentos de Bootstrap/CSS
    - Utilização do XAMPP, WAMPP, HeidiSQL, Visual Studio Code, Google Chrome
- Prioridades:
    - Funcionalidade
    - Segurança
    - Aspecto visual

### PREPARAÇÃO E CONFIGURAÇÃO DO AMBIENTE

**Xampp**
- Site: https://www.apachefriends.org/pt_br/index.html

**Wampp**
- Site: https://www.wampserver.com/en/

**Visual Studio Code** 
- Site: https://code.visualstudio.com/
- Extensão: 
    - `Material Icon Theme`
    - `PHP Intelephense`

**HeidiSQL**
- Site: https://www.heidisql.com/download.php

**Composer**
- Site: https://getcomposer.org/

```
composer init
```

```
composer update
```

### 5 - FINALIZAÇÃO DA CONSTRUÇÃO DO SISTEMA DE GESTÃO DE BASES DE DADOS
- Ex: web_005

- http://localhost/loja_webstore-php/web_005/public/


### 6 - CRIAÇÃO DO SISTEMA DE ROTAS
- Ex: web_006

- http://localhost/loja_webstore-php/web_006/public/
- http://localhost/loja_webstore-php/web_006/public/index.php?a=inicio
- http://localhost/loja_webstore-php/web_006/public/index.php?a=loja
- http://localhost/loja_webstore-php/web_006/public/index.php?a=carrinho


### 7 - SISTEMA DE APRESENTAÇÃO DE VIEWS E DADOS
- Ex: web_007

- http://localhost/loja_webstore-php/web_007/public/

```txt
- MVC (Model, View, Controller)
    - Model:  Dados/base de dados
    - View:  Layout, HTML, CSS, JavaScript
    - Controller:  Regras de negócio
- VC
```

```txt
- 1. Carregar e tratar dados (cálculos, base de dados)
- 2. Apresentar o layout (views)
```

```php
/*
html_header.php
nav_bar.php
pagina_inicio.php
html_footer.php
*/
```

#### 8 - BOOTSTRAP 5 E FONTAWESOME 5
- Ex: web_008

- http://localhost/loja_webstore-php/web_008/public/

**Bootstrap**
- Site: https://getbootstrap.com/
    - Downloads: https://getbootstrap.com/docs/5.2/getting-started/download/

**Font-Awesome**
- Site: https://fontawesome.com/
    - Downloads: https://fontawesome.com/download
    - Icons: https://fontawesome.com/icons

**Axios**
- Site: https://axios-http.com/ptbr/docs/intro


### 9 - ALGUNS AJUSTAMENTOS E INÍCIO DO LAYOUT
- Ex: web_009

- http://localhost/loja_webstore-php/web_009/public/

```
composer update
```

- Limpar o Cache (Local Storage)
    - Google Chrome:
        - `F+12` `Application`/`Clear storage`/`Clear site data`


### 10 - ARRANJO VISUAL E ROTAS DE NAVEGAÇÃO
- Ex: web_010

- http://localhost/loja_webstore-php/web_010/public/


### 11 - CRIAÇÃO DA TABELA DE CLIENTES E CONSIDERAÇÕES IMPORTANTES
- Ex: web_011

- http://localhost/loja_webstore-php/web_011/public/


```
- Separar os links
- Base de dados - tabela clientes
- Criar utilizador com validação de email
```

- Atualização da tabela `clientes`

```sql
CREATE TABLE `clientes` (
	`id_cliente` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`senha` VARCHAR(250) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`nome_completo` VARCHAR(250) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`endereco` VARCHAR(250) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`telefone` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`cidade` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`estado` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`purl` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`activo` TINYINT(4) NULL DEFAULT '0',
	`created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`deleted_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id_cliente`) USING BTREE
)
COLLATE='utf8_unicode_ci'
ENGINE=MyISAM
AUTO_INCREMENT=4
;
```

### 12 - LAYOUT E ROTAS PARA CRIAÇÃO DE CLIENTE
- Ex: web_012

- http://localhost/loja_webstore-php/web_012/public/


### 13 - VALIDAÇÕES, CORREÇÕES E TESTES
- Ex: web_013

- http://localhost/loja_webstore-php/web_013/public/


```txt
1* - Verificar se as senhas coincidem (senha_1 == senha_2)
2* - Base de dados - Já existe outra conta com o mesmo email? (Verificação)

3* - Registro
    - Criar um purl
    - Guardar os dados na tabela clientes
    - Enviar um email com o purl para o cliente
    - Apresentar uma mensagem indicando que deve validar o seu amail
```

### 14 - CRIAÇÃO DO PURL E REGISTO DO CLIENTE NA BASE DE DADOS
- Ex: web_014

- http://localhost/loja_webstore-php/web_014/public/

- Criar o link purl para enviar por email
    - http://localhost/loja_webstore-php/web_014/public/?a=confirmar_email&purl=$purl


### 15 - INTRODUÇÃO DE MODEL PARA SEPARAÇÃO DE LÓGICAS DE CÓDIGO
- Ex: web_015

- http://localhost/loja_webstore-php/web_015/public/


### 16 - ADICIONAR PHPMAILER AO NOSSO PROJETO
- Ex: web_016

- http://localhost/loja_webstore-php/web_016/public/



```txt
- Adicionar o PHPMailer ao projeto
    - Permite enviar emails a partir do PHP
- Para enviar o email > conta de email real
    - Criar uma conta no gmail + configurar a conta para enviar os emails
```
- https://support.google.com/mail/answer/7104828?authuser=2&hl=en&authuser=2&visit_id=638071622027830497-4109194600&rd=1

**Packagist**
- Site: https://packagist.org/

**PHPMailer**
- PHPMailer é uma classe completa de criação e transferência de e-mail para PHP
    - Site: https://packagist.org/packages/phpmailer/phpmailer

- Composer
```
composer require phpmailer/phpmailer
```

**PHPMailer Github**
- Site: https://github.com/PHPMailer/PHPMailer

- A Simple Example
```php
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

```

### 17 - ENVIO DE EMAIL PARA CONFIRMAÇÃO DE NOVA CONTA DE CLIENTE
- Ex: web_017

- http://localhost/loja_webstore-php/web_017/public/


```txt
PHPMailer em relação ás contas de Gmail, foi bloqueado a partir de 22 de outubro de 2022, a opção de desbloqueio de APPs consideradas menos seguras.
```

### 18 - CONFIRMAÇÃO DO EMAIL E TESTES
- Ex: web_018

- http://localhost/loja_webstore-php/web_018/public/

```txt
1* Conectar a banco de dados
2* Pesquisar a existencia de um cliente com o mesmo purl indicado
    - Não existe? Erro
    - Existe?
        - A. Remover o purl do cliente
        - B. Alterar o ativo = 1
        - C. Apresentar uma mensagem de registro concluido com sucesso 
```

- http://localhost/loja_webstore-php/web_018/public/?a=confirmar_email&purl=WAec6mr0nJnF

**PHPMailer character encoding issues**
- https://stackoverflow.com/questions/2491475/phpmailer-character-encoding-issues


### 19 - MELHORAMENTO DO FLUXO DE CONFIRMAÇÃO DE CONTA
- Ex: web_019

- http://localhost/loja_webstore-php/web_019/public/


```sql
TRUNCATE clientes
```

- Validação de nova conta(PHPMailer não funciona)
- Inserir o codigo Purl `8xh9ewBLoH0P`
```
http://localhost/loja_webstore-php/web_019/public/?a=confirmar_email&purl=8xh9ewBLoH0P
```












