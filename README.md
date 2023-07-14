# Formulário de captura de dados<br><br>

Nível de dificuldade na leitura e execução do projeto: <br>
▰▰▰▱▱▱▱▱▱▱ (Iniciante)<br/>

Nível de dificuldade na instalação do projeto: <br>
▰▰▱▱▱▱▱▱▱▱ (Fácil)<br/><br/><br>
# Índice
- [Sobre o projeto](#sobre)
- [O que você precisa ter em mãos?](#oquevoceprecisa)
- [Funcionalidades](#funcionalidades)
- [Layout do projeto](#layout-do-projeto)
- [Como rodar o projeto?](#como-rodar-o-projeto)
- [Tecnologias utilizadas](#tecnologiasusadas)
- [Como contribuir com o projeto?](#comocontribuir)
- [Quem desenvolveu esse projeto?](#desenvolvedor)


## Sobre
<p>O projeto é um formulário que captura os dados do usuário e adiciona a um banco de dados MySql. Esse processo é feito utilizando de vários recursos de segurança para evitar ataques como "SQL Injection". </p></br>
<p>Este formulário pode ser usado de base para qualquer outro projeto, basta alterar o arquivo style.css e conecta-lo as outras páginas do seu site/sistema.</p>

## <a id="oquevoceprecisa"></a>O que você precisa ter em mãos?
- Hospedagem ou servidor próprio
- Banco de dados criado na sua hospedagem ou servidor
- Usuário criado e adicionado com todos os privilégios ao banco a cima 👆
- Senha de acesso deste usuário ao banco de dados

## Funcionalidades
- Captura os dados do usuário;
- Adiciona os dados as variáveis do PHP;
- Sanitiza os dados e verifica a duplicidade;
- Prepara os dados usando "prepared statements" para evitar que os dados sejam interpretados como comandos SQL;
- Adiciona os dados a um banco de dados;
- Emite um alerta de sucesso/erro ao salvar os dados.

## Layout do projeto</br></br>
![Layout do projeto](layout.png)

## Como rodar o projeto?
### *O passo a passo a seguir serve para instalar o projeto em uma hospedagem
- Baixe a pasta root do projeto.
- Dentro da pasta root existe um arquivo chamado "creattable.txt", você deve abrir esse arquivo, copiar o conteúdo do comando SQL que há nele e colar ele no seu console SQL, após isso basta executar o comando, como no print a baixo:</br>

![Crud](cruddb.jpg)

- Após executar o comando no seu console SQL, será criada a tabela necessária para a grupar os dados recebidos e o seu banco de dados deve estar se parecendo com isso:

![resultado crud](resultadocrud.jpg)</br>

- Agora você precisa abrir o arquivo "conexaodb.php" com algum editor de texto e alterar os dados de conexão com o banco de dados.
