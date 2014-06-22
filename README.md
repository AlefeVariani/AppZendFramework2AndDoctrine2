AppZendFramework2AndDoctrine2
=======================

Introdução
------------

A ideia é mostrar como funciona o Zend Framework 2(e melhorar meu conhecimento sobre a ferramenta), um dos framework mais usados e reconhecidos atualmente, junto com o Doctrine 2 (para facilitar ainda mais ) que nada mais é "o cara que fica responsavel pela camada de abstração com o Banco de Dados"

O que será feito:
- Simples CRUD
- Filtros
- Paginação
- Rotas
- Partials
- Novo Modulo
- Autenticação
- Email
- Pdf, Json, Plugins . . .
(não necessariamente nesta ordem) 

Instalação
-----------

### Usando o Composer 

O Composer é um gerenciador de dependencias.
Para rodar a Aplicação basta fazer um Clone da App do GitHub, depois atualizar seu "composer.phar"

    git clone https://github.com/AlefeVariani/AppZendFramework2AndDoctrine2.git
    cd AppZendFramework2AndDoctrine2
    php composer.phar self-update
    php composer.phar install

Rodando a Aplicação
--------------------

### Servidor do PHP 

Como muitos já sabem o PHP possue seu próprio Servidor \o/, apartir da versão 5.4 do PHP
E para utilizar é muito fácil

    
    cd AppZendFramework2AndDoctrine2/public
    php -S localhost:8080 

Existem outras formas, como configurando um Hosts para sua Aplicação, que também é Facil, no Site Oficial do Zf2 ele mostra como configurar.
http://framework.zend.com/manual/2.3/en/user-guide/skeleton-application.html

Usando o Doctrine 2
--------------------

Criação das nossas Tabelas(Classes) no Banco é umas das coisas, que podemos utilizar do Doctrine, Depois de Configurar com o seu Banco(no meu caso estou usando Postgresql)

Comando para mostrar todas as ações do doctrine-module:

    cd AppZendFramework2AndDoctrine2
    ./vendor/bin/doctrine-module

Para criação da Tabelas(Classes) no Banco:

    ./vendor/bin/doctrine-module orm:schema-tool:create 

Para excluir suas Tabelas(Classes) do Banco:

    ./vendor/bin/doctrine-module orm:schema-tool:drop

Para criação do sql de suas Tabelas(Classes) do Banco:

    ./vendor/bin/doctrine-module orm:schema-tool:create --dump-sql


