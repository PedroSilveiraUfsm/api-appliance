
## API-APPLIANCES

PROJETO DESENVOLVIDO COM PHP 8.1.6 

FRAMEWORK LARAVEL 10

FRAMEWORK VUEJS 3

## RECURSOS NECESSÁRIOS

[Database MySQL - Xampp 3.3.0 ](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.17/xampp-windows-x64-8.1.17-0-VS16-installer.exe)

- Foi usado o Xampp 3.3.0 para o projeto, mas qualquer banco relacional pode ser utilizado

[Composer](https://getcomposer.org/Composer-Setup.exe)

- Necessário para instalar as dependências do backend
- 1º Instalador para windows, adicionar ao PATH para usar os comandos no terminal
- 2º Após instalado aplicar o comando: composer install 

[Artisan]()

- Necessário para rodar as aplicações e gerenciar o servidor backend
- Com o composer instalado, aplicar o comando: composer require artisan

[npm](https://nodejs.org/dist/v18.17.0/node-v18.17.0-x64.msi)

- Gerenciador de pacotes para o frontend. 

## CRIAR DATABASE
**Dentro do servidor MySQL criar base de dados com o comando**
- CREATE DATABASE db_appliance

-**O arquivo .env está contendo os parâmetros para rodar localmente com as portas padrão**

## PRIMEIROS COMANDOS - BACKEND
**Para rodar a aplicação backend é necessário aplicar alguns comandos dentro da pasta 'backend'**
- cd .\backend\ 

**Instalar dependências**
- composer install

**Criar tabela para a DB**
- php artisan migrate

**Rodar a aplicação localmente**
- php artisan serve
* O servidor rodará em [localhost](http://127.0.0.1:8000)

## TESTES DE ROTA

**Disponibilizado arquivo para importar para cliente de API (Insomnia, Postman)**
- [ROTAS](./public/Insomnia_2023-08-03.json)

**CREATE**
curl --request GET \
  --url 'http://localhost:8000/appliances/create?name=&detail=&voltage=&label='

**GET**
-
curl --request GET \
  --url http://localhost:8000/appliances

**GET ID**
-
curl --request GET \
  --url http://localhost:8000/appliances/1

**UPDATE**
-
curl --request GET \
  --url 'http://localhost:8000/appliances/7/edit?name=&detail=&voltage=&label=

**DELETE**
-
curl --request GET \
  --url http://localhost:8000/appliances/1/delete


## PRIMEIROS COMANDOS - FRONTEND
**Para rodar a aplicação frontend é necessário aplicar alguns comandos dentro da pasta 'frontend'**
- cd .\frontend\ 

**Com o gerenciador NPM instalado rodar o comando**
- npm install

**Para rodar a aplicação frontend localmente**
- npm run dev
* O servidor rodará em [localhost](http://localhost:5173)

**OBS - Agora é possível utilizar os recursos em nível de usuário final: CADASTRAR, LER, ALTERTAR E DELETAR (CRUD)**
**MUITO OBRIGADO E APROVEITE - Pedro Silveira®2023**
