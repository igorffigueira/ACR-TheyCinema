<h1 align="center"> Projeto desenvolvido para a Unidade Curricular de Aplicações Centradas em Redes </h1>

<h1 align="center">Grupo 3</h1><hr><hr>
<h2 align="center">Aplicação web para visualização e compra de bilhetes para filmes em exibição de uma empresa</h2>
<hr><hr>
<h3 align="center">Alejandro Carvalho nº 2014813 | André Figueira nº 2069113 | David Aguiar nº 2023612</h3><hr>
<h3 align="center">Descrição da aplicação web </h3>

<p>A nossa aplicação web TheyCinema tratasse de uma aplicação que possibilita a visualização dos filmes em exibição, 
a localização dos nossos estabelecimentos, como parcerias, informações sobre a equipa, ou mesmo a compra de bilhetes de cinema.</p>
<hr>
<h3 align="center"><b>Tarefas necessárias realizar para o correto funcionamento da aplicação</b></h3>

<p>Devido a problemas de alocação de alguns ficheiros e pastas do nosso projecto Laravel com a versão 5.3 tivemos de arranjar uma alternativa
para o fornecimento do(s) mesmo(s). Que se encontram no ficheirp zip, com o nome "ACR-P-GRUPO-3.zip"</p>
<p>Em seguida será necessário aceder ao phpmyadmin e criar uma nova base de dados com o nome 'theycinema'
Depois na consola, no diretório do projeto, realizar a migração das tabelas utilziadas na aplicação</p>

<h2 align="center"><b><u>ATENÇÃO</u></b></h2>
<p>É necessário correr o seguinte comando para realizar a migração, para que sejam introduzidos alguns dados nas tabelas que são necessários
para o correto funcionamento da aplicação.</p>
<ul><li>php artisan migrate --seed</li></ul>   
<p>(este seed é que trata de inserir os dados nas tabelas)</p>

<p>Após este comando ser executado de forma bem sucedida basta apenas ligar o servidor local através do seguinte comando:</p>

<ul><li>php artisan serve</li></ul>

<p>Em seguida aceder à nossa aplicação a partir de qualquer browser (Edge, Chrome, Firefox...) através do seguinte URL:</p>
	
<ul><li>http://localhost:8000</li></ul>	

<p>Para que conste, será necessário ter o XAMPP activo para que tudo funcione.</p>

<p>Como poderá ser visto no ficheiro que realiza o preenchimento, ou seja, o seed "AdminSeeder" que realiza a inserção de um utilizador
do tipo administrador este tem as seguintes cridencias: "email: admin@admin.admin e passsword: admin"</p>
<p>Para o bom funcionamento da nossa aplicação será necessário após o site estive "online", 
realizar um login como administrador e introduzi alguns filmes através da opção "Admin Area" no menu superior do website. e atribuir, 
de seguida atribuir (no máximo 4 filmes, porque o cinema  apresenta apenas 4 salas) um filme a uma sala e clicar connect.</p>
<p>Apartir daí poderá ser realizado o login/navegação por qualquer tipo de utilizador, quer seja para visualizção ou compra de um bilhete de cinema.</p>
<p>Após uma compra o cliente deverá dirigir-se ao seu email para obter a confirmação de compra.</p>
<hr>
<h3 align="center"><b>Ficheiros em falta (encontra-se no zip "ACR-P-GRUPO-3.zip", na pasta "ACR-P-GRUPO-3----FICHEIROS-A-INCLUIR"</b></h3>
<ul>
<li>- Pasta/Conteúdo da pasta 'Vendor'</li> 
<li>- Ficheiro de configuração da base de dados ( .env )</li>
</ul>
<h3 align="center"><b>Solução ao problema</b></h3>
<p> Seguir os seguintes passos</p>
<ol>
<li> Extrair o ficheiro zip (ACR-P-GRUPO-3.zip)</li>
<li> Abrir a pasta "ACR-P-GRUPO-3----FICHEIROS-A-INCLUIR"</li>
<li> Incluir a Pasta 'Vendor' e o ficheiro (.env) no diretório do projeto "TheyCinema"</li>
</ol>
<hr>
<h3 align="center"><b>EM CASO DE ERROS NA CONSOLA</b></h3>
<p> Em caso de problemas de preenchimento da base de dados  no decorrer da migração do género</p>
<ul><li>[ReflectionException]<br>Class XXXXXSeeder does not exit</li></ul>
<p>correr o seguinte comando na consola, no diretório do projeto theycinema.</p>
<ul><li>composer dump-autoload</li></ul>
<ol><li>Para realizar a migração com valores já predefinidos nas tabelas utilizar o seguinte comando:</li>
<ul><li> php artisan migrate  --seed </li></ul>
<li>Caso seja feito um refresh das migrações utilizar o seguinte comando:</li>
<ul><li> php artisan migrate:refresh --seed </li></ul>
</ol>


# ACR-TheyCinema
