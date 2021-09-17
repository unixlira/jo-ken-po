<p align="center"><a href="https://unixlira.github.io" target="_blank"><img src="https://a.fsdn.com/con/app/proj/jokenpo-by-xpostsmedia/screenshots/Jo%20Ken%20Po%20Splash.png/max/max/1" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Jo Ken Po

`Jo Ken Po`  ou Pedra, papel e tesoura, também chamado em algumas regiões do Brasil de jokenpô[1][2] (do japonês じゃんけんぽん, jankenpon) é um jogo de mãos recreativo e simples para duas ou mais pessoas, que não requer equipamentos nem habilidade.

Referência [Wikipédia](https://pt.wikipedia.org/wiki/Pedra,_papel_e_tesoura)

Aqui temos um Game desenvolvido em linguagem PHP, o objetivo é fazer um juiz de Jokenpo que dada a jogada dos dois jogadores informa o
resultado da partida.

As regras são as seguintes:

- Pedra empata com Pedra e ganha de Tesoura
- Tesoura empata com Tesoura e ganha de Papel
- Papel empata com Papel e ganha de Pedra

## Começando

### Clonando repositório do projeto

Requisitos necessários do sistema:

- PHP 7.4 ou >
- MySQL
- Composer
- Acesso a internet "CDN Bootstrap"

Instalando no Linux

```
$ git clone https://github.com/unixlira/jo-ken-po.git
```

Depois de clonado, vamos acessar o projeto.

```
cd jo-ken-po
```

Instalando Dependências

```
$ composer install
```

### Banco de dados MySQL

Para rodar a aplicação em ambiente local necessitamos de já ter instalado o MySQL, com isto podemos criar uma base de dados chamada `db_game` para manipular nossos dados do game.

Acesse o SGDB de sua preferência e crie seu banco

```
CREATE SCHEMA `db_game` ;
```

# Configurações

### .env

Agora com o projeto clonado e suas dependencias instaladas e seu banco de dados também criado, vamos configurar o arquivo .env que irá guardar as credenciais do acesso ao banco.
NOTA: O arquivo .env possui muitas informações importantes sobre o sistema, indico a se aprofundar mais sobre o potencial desse arquivo.

Vamos lá, pegue seu .env.exemple e renomeie para .env

Depois insira suas credenciais de acesso ao banco de dados nesse campos.
NOTA: No campo DB_DATABASE será inserido o Banco criado no SGBD.

Por exemplo:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_game
DB_USERNAME=seu usuario
DB_PASSWORD=sua senha
```

Agora precisamos gerar uma chave da aplicação que fica no campo APP_KEY.
Verifique se está dentro do diretório raiz do projeto e rode o comando para gerar a key:

```
php artisan key:generate
```

### Migração de tabelas do banco de dados

Após esses passo vamos agora criar nossas tabelas do nosso banco de dados para acessar os dados das jogadas que iremos guardar nele.

```
php artisan migrate
```

## Iniciando projeto

Vamos iniciar nosso projeto acessando o terminal, dentro da raiz do projeto vamos rodar o comando que disponibilizará o sistema em nosso navegador.

```
php artisan serve
```

Agora para acessar nossa aplicação vamos abrir o navegador e digitar o endereço

```
http://127.0.0.1:8000/jokenpo
```

Bom Jogo!
