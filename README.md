jetimob/studio360-sdk-php-laravel
===================================

jetimob/studio360-sdk-php-laravel foi criado e é mantido pela equipe [Jetimob](https://github.com/jetimob). É um SDK utilizado para
interagir com a API da [Studio 360](https://studio360.app/) de forma simples e direta. A complexidade de autenticação
[Bearer Token](https://jwt.io/introduction) é abstraída pelo pacote [http-php-laravel](https://github.com/jetimob/http-php-laravel/),
também desenvolvido dentro da Jetimob.

<a href="https://www.conventionalcommits.org/en/v1.0.0-beta.4"><img src="https://img.shields.io/badge/conventional%20commits-1.0.0beta.4-brightgreen.svg?style=flat-square&logo=git" alt="Regras de commit"></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen?style=flat-square" alt="Licença"></a>

[comment]: <> (<a href="https://packagist.org/packages/jetimob/studio360-sdk-php-laravel"><img src="https://img.shields.io/packagist/dt/jetimob/studio360-sdk-php-laravel?logo=packagist&logoColor=white&style=flat-square" alt="Downloads no Packagist"></a>)
[comment]: <> (<a href="https://github.com/jetimob/studio360-sdk-php-laravel/releases"><img src="https://img.shields.io/github/release/jetimob/studio360-sdk-php-laravel?style=flat-square&color=brightgreen" alt="Última versão do pacote"></a>)

> Os comandos abaixo devem ser executados dentro da pasta raíz do projeto onde o pacote deve ser instalado.

## Instalação

Utilizando o composer:

```shell
composer require jetimob/studio360-sdk-php-laravel
```

## Configuração

Para começar, as configurações do pacote devem ser publicadas através do comando:

````shell
php artisan studio360:install
````

Este comando irá criar o arquivo de configuração `config/studio360.php` para que você possa modificar conforme a necessidade
do seu projeto.

Algumas configurações são obrigatórias e únicas:

- authorization_header_bearer_token

## Testes

Este SDK esta com cobertura de testes unitário e integração.

Para executar os testes

```
./vendor/bin/phpunit
```

## Licença

studio360-sdk-php-laravel está licenciado sob [The MIT License (MIT)](LICENSE).

--- 
Mais informações sobre a API da Studio 360 podem ser encontradas [aqui](https://studio360.app/documentacao/api/jetimob/).
