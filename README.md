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

**Projeto**
- http://localhost/loja_webstore-php/


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

### 20 - INICIO DA CONSTRUÇÃO DO LOGIN
- Ex: web_020

- http://localhost/loja_webstore-php/web_020/public/

- login_frm.php
- http://localhost/loja_webstore-php/web_020/public/?a=login


### 21 - DESENVOLVIMENTO DO LOGIN COM ERRO NO FINAL DO PROCESSO
- Ex: web_021

- http://localhost/loja_webstore-php/web_021/public/



### 22 - CONCLUSÃO DO LOGIN E LOGOUT DE CLIENTE
- Ex: web_022

- http://localhost/loja_webstore-php/web_022/public/



### 23 - CRIAÇÃO DA BASE DE DADOS DOS PRODUTOS
- Ex: web_023

- http://localhost/loja_webstore-php/web_023/public/

- Criação da tabela `produtos`
```sql
/* ======= TABELA PRODUTOS ======= */
CREATE TABLE `produtos` (
	`id_produto` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`categoria` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`nome_produto` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`descricao` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`imagem` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`preco` DECIMAL(6,2) NULL DEFAULT NULL,
	`estoque` INT(11) NULL DEFAULT NULL,
	`visivel` TINYINT(4) NULL DEFAULT NULL,
	`created_at` DATETIME NULL DEFAULT NULL,
	`updated_at` DATETIME NULL DEFAULT NULL,
	`deleted_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id_produto`) USING BTREE
)
COLLATE='utf8_unicode_ci'
ENGINE=MyISAM
;

```


### 24 - CONSTRUÇÃO DO LAYOUT DA PÁGINA DE PRODUTOS
- Ex: web_024

- http://localhost/loja_webstore-php/web_024/public/


### 25 - SIMPLIFICAR O LAYOUT E A QUESTÃO DAS CATEGORIAS
- Ex: web_025

- http://localhost/loja_webstore-php/web_025/public/

- CATEGORIAS
- Todos - http://localhost/loja_webstore-php/web_025/public/?a=loja&c=todos
- Homem - http://localhost/loja_webstore-php/web_025/public/?a=loja&c=homem
- Mulher - http://localhost/loja_webstore-php/web_025/public/?a=loja&c=mulher

- Consulta SQL
```sql
SELECT DISTINCT categoria FROM produtos;
```

### 26 - TRABALHAR COM CATEGORIAS DINAMICAMENTE
- Ex: web_026

- http://localhost/loja_webstore-php/web_026/public/

**Expressões regulares**
- Substituir o underscore `_` por um espaço em branco ` `
```php
<?= ucfirst(preg_replace("/\_/", " ", $code)) ?>
```

### 27 - AXIOS PARA ADICIONAR PRODUTOS AO CARRINHO
- Ex: web_027

- http://localhost/loja_webstore-php/web_027/public/

**Axios**
- Promise based HTTP client for the browser and node.js - GitHub
    - Site: https://github.com/axios/axios

```
https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js
```
- Colar o link no navegador, salvar o conteúdo do arquivo no projeto `public/assets/js`


**Expressões regulares**
- Substituir o ponto `.` por uma virgula `,`
```php
<?= preg_replace("/\./", ",", $code) ?>
```

### 28 - GESTÃO DO CARRINHO E ERRO POR RESOLVER NO FINAL
- Ex: web_028

- http://localhost/loja_webstore-php/web_028/public/

```txt
1* - Puxar o array do carrinho da sessão para o PHP
2* - Adicionar(gerir) o array do carrinho
3* - Recolocar o array na sessão
```

### 29 - CARRINHO A FUNCIONAR COM TOTAL DE PRODUTOS
- Ex: web_029

- http://localhost/loja_webstore-php/web_029/public/

- Axios - Response Schema
- Site: https://github.com/axios/axios#response-schema


### 30 - MECANISMOS DE SEGURANÇA NO NOSSO CARRINHO E MAIS UM ERRO PARA RESOLVER
- Ex: web_030

- http://localhost/loja_webstore-php/web_030/public/


### 31 - CONCLUSÃO DOS MECANISMOS DE SEGURANÇA DO CARRINHO
- Ex: web_031

- http://localhost/loja_webstore-php/web_031/public/

### 32- BUSCAR INFORMAÇÃO DA BASE DE DADOS A PARTIR DO CARRINHO
- Ex: web_032

- http://localhost/loja_webstore-php/web_032/public/


- Não existe carrinho?
    - "Carrinho vazio" Link para voltar a loja
- Existe carrinho
    - Imagem | Descrição | Quantidade | Preço (x)
    - Imagem | Descrição | Quantidade | Preço (x)
    - Imagem | Descrição | Quantidade | Preço (x)
                          | Total      | Sum()

- ID buscar na bd os dados dos produtos que existem no carrinho
- Criar um ciclo que constroi a estrutura dos dados para o carrinho


### 33 - PREPARAR CÁLCULOS E DADOS PARA APRESENTAR O CARRINHO
- Ex: web_033

- http://localhost/loja_webstore-php/web_033/public/

- Fazer um ciclo por cada produto no carrinho
- Identificar o id e usar os dados da bd para criar uma coleção de dados para a página do carrinho
- Imagem | titulo | Quantidade | Preço  | (x)


### 34 - APRESENTAÇÃO DA TABELA DO CARRINHO COM TOTAL E BOOTSTRAP
- Ex: web_034

- http://localhost/loja_webstore-php/web_034/public/

### 35 - MELHORAMENTO ESTÉTICO SUBSTANCIAL DO NOSSO CARRINHO
- Ex: web_035

- http://localhost/loja_webstore-php/web_035/public/

```php
<td class="text-end"><?= 'R$ ' . preg_replace("/\./", ",", $produto['preco'])  ?></td>
```

### 36 - REMOVER PRODUTOS DO CARRINHO
- Ex: web_036

- http://localhost/loja_webstore-php/web_036/public/


### 37 - FORMATAÇÃO DOS VALORES NO CARRINHO, FUNÇÕES DO PHP E LIMPAR CARRINHO
- Ex: web_037

- http://localhost/loja_webstore-php/web_037/public/

```php
<td class="text-end align-middle"><h4><?= 'R$ ' . number_format($produto['preco'],2, ',', '.') ?></h4></td>
```

***PHP Number-Format**
- Site: https://www.php.net/manual/en/function.number-format.php


### 38 - DICAS IMPORTANTES E INÍCIO DA FINALIZAÇÃO DE ENCOMENDA
- Ex: web_038

- http://localhost/loja_webstore-php/web_038/public/

- Extensão VsCode
    - `Fold/unfold all icone`

- Online PHP Function(s)
    - PHP Sandbox: https://onlinephp.io/

**Como recuperar a senha** 
- Ir no site https://onlinephp.io/
- Digitar trecho de código

```php
<?php
echo password_hash('123456', PASSWORD_DEFAULT);
```

- Executar, pegar a nova senha encriptada 
```
$2y$10$xyRFTM9rnK8RVPO9eC7NvelmTwwV7wcJ9LTcgT113xHHwkygxA9iS
```

- E alterar a senha na base de dados com a nova senha gerada

**Finalizar Carrinho**
- Verifica se tem cliente logado
    - Não existe
        - Colocar um "referrer" na sessão
        - Abrir o quadro login
        - Apos login com secesso, regressar a loja
        - Remover o "referrer" da sessão
    - Existe
        - Passo 2 (Confirmar)



### 39 - RESUMO DA ENCOMENDA E CARREGAMENTO DE DADOS DO CLIENTE
- Ex: web_039

- http://localhost/loja_webstore-php/web_039/public/


### 40 - APRESENTAÇÃO DOS DADOS DO CLIENTE E MECANISMO DE MORADA ALTERNATIVA
- Ex: web_040

- http://localhost/loja_webstore-php/web_040/public/
