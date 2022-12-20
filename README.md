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
	`update_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
