# api com php e mysql
[php_myql_template_api](https://github.com/logicinfocursos/php_myql_template_api.git)
[github](https://github.com/logicinfocursos?tab=repositories)

Esse projeto visa ajudá-lo passo-a-passo a criar uma api robusta usando as melhores práticas do mercado. O objetivo é empregar recursos importantes de orientação a objetos como abstract class, interface e herança para minimizar a repetição e garantir uma padronização e coesão do código final.

Usaremos o padrão de projetos mvc e implementaremos as operações CRUD (create, read, update e delete).

Espero que esse código possa ser usado para você como uma espécie de template ou skeleton "coringa" como um ponto de partida para os seus próximos projetos.

### criar o projeto php

<pre>
c:\> mkdir api
c:\> cd api
</pre>


### estrutura de pastas do projeto
Agora que as principais configurações do nosso projeto já foram definidas, é o momento de definir a estrutura de pastas. Iremos manter o nosso código na pasta "src" e dentro dela as seguintes sub-pastas:

- controllers
- repositories
- routes

Essa é a estrutura de pastas que iremos adotar:

<pre>
<pre>
/my-api
|-- /assets
|-- /src
|   |-- /controllers
|   |   |-- base.controller.php
|   |   |-- product.controller.php
|   |   |-- category.controller.php
|   |-- /routes
|   |   |-- base.route.php
|   |   |-- product.route.php
|   |   |-- category.route.php
|   |-- /models
|   |   |-- /entities
|   |   |   |-- category.entity.php
|   |   |   |-- product.entity.php
|   |   |-- /repositories
|   |   |   |-- base.repository.php
|   |   |   |-- category.repository.php
|   |   |   |-- product.repository.php
|   |   |-- /utils
|   |   |   |-- database.php
|   |   |   |-- dotEnv.php
|   |-- index.php
|-- .env
|-- .env-template
</pre>
</pre>


# .env
o arquivo ".env" pode ser utilizado para outros fins, além do uso através do prisma. Para ilustrar iremos configurar uma variável de ambiente para conter a porta usada em nosso projeto. 

<pre>
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shop
DB_USERNAME=root
DB_PASSWORD=root
PORT=3000
</pre>

para ler o arquivo .env, criei uma função usando a própria biblioteca interna de php
# baixar o projeto no github
agora que todas as configurações do projeto foram realizadas, recomendo que baixo o código completo da nossa api no 
[github](https://github.com/logicinfocursos/php_myql_template_api.git).

você pode optar por clonar o projeto ou baixar o arquivo .zip.

obs:
a) após obter os fontes do projeto é necessário criar a base de dados mysql (nesse exemplo de projeto não estamos utilizando nenhuma ferramenta de orm, então não temos recursos como o "migration" para realizar essa atividade)
b) na pasta assets você encontra o arquivo "tables_structure.sql" com os comandos create das tabelas do prjeto.
c) como uma boa prática de projeto, no código baixado você não encontrará o arquivo ".env" e sim o arquivo ".env-template", basta renomea-lo para ".env".

para executar o projeto:
<pre>
c:\api> php -S localhost:3000
</pre>

### dicas importantes
vale a pena também configurar ou criar o arquivo .gitgnore (caso ainda não exista na raíz do projeto) e mencionar o arquivo ".env" (é uma boa prática não tornar público as informações de acesso ao banco de dados) caso seja do seu interesse manter o seu projeto em um serviço de controle e armazenamento de código como o github, ou o gitlab (entre outros).

# referências
- (php)[https://www.php.net/manual/pt_BR/index.php]
- (vscode)[https://code.visualstudio.com/download]
- (postman)[https://www.postman.com/downloads/]
- (insomnia)[https://insomnia.rest/download]
- (conventional commits)[https://www.conventionalcommits.org/en/v1.0.0/]

### plugins vscode
- (PHP Debug)[https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug]
- (PHP Intelephense)[https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client]
- (PHP Extension Pack)[https://marketplace.visualstudio.com/items?itemName=xdebug.php-pack]
- (PHP IntelliSense)[https://marketplace.visualstudio.com/items?itemName=zobo.php-intellisense]
- (PHP)[https://marketplace.visualstudio.com/items?itemName=DEVSENSE.phptools-vscode]
- (live server)[https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer]
- (prettier - code formatter)[https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode]
- (eslint)[https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint]
- (thunder client)[https://marketplace.visualstudio.com/items?itemName=rangav.vscode-thunder-client]
- (mysql)[https://marketplace.visualstudio.com/items?itemName=cweijan.vscode-mysql-client2]
# sobre a logicinfo

somos uma consultoria em T.I. e atuamos com desenvolvimento de aplicações para todos os segumentos e mantemos também uma estrutura de treinamento com as melhores soluções para o aprendizado em programação.

alguns de nossos serviços:

- desenvolvimento de aplicações mobile, web e desktop
- a.i. generative - tenha uma i.a. focada em seu negócio, atendendo os seus clientes e fornecedores por whatsapp, chat e u.r.a.

visite o nosso site:
[logicinfo.com.br](https://logicinfo.com.br)

fale consoco:
whatsapp: [11 9 8627 4173](11-9-8627-4173)
e-mail: [contato@logicinfo.com.br](contato@logicinfo.com.br)
