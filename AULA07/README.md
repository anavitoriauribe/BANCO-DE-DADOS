# 📚 Atividades de Desenvolvimento de Sistemas

Este repositório reúne atividades práticas desenvolvidas durante os estudos de Desenvolvimento de Sistemas, com foco em APIs, requisições HTTP, PHP, Python, JSON e integração com serviços externos.

## 🛠️ Tecnologias utilizadas
- PHP
- Python
- PDO
- MySQL
- JSON
- APIs
- Thunder Client
- Visual Studio Code
- Localhost

--- 

## 1. API de Cadastro e Consulta de Produtos

Nesta atividade foi desenvolvida uma API utilizando PHP, conectada a um banco de dados através do PDO.

A API trabalha com dois métodos principais:

### 📥 POST — Cadastro de produtos

Foi criada uma requisição POST para cadastrar novos produtos no banco de dados.

Os dados são enviados no formato JSON, contendo:

- Nome do produto
- Preço do produto

Após o cadastro, a API retorna uma mensagem informando que o produto foi cadastrado com sucesso.

### 📤 GET — Consulta de produtos

Também foi implementado o método GET, responsável por buscar os produtos cadastrados no banco de dados.

Os registros são consultados através de uma instrução SQL e retornados em formato JSON.

### 🔌 Conexão com o banco de dados

A conexão com o banco foi realizada através do arquivo conexao.php, utilizando PDO para executar os comandos SQL com segurança.

--- 

## 2. Consulta de CEP utilizando API

Nesta atividade foi desenvolvido um programa em Python para consultar informações de endereço através da API ViaCEP.

### O programa:

- Solicita ao usuário um CEP;
- Monta a URL da API utilizando o CEP informado;
- Realiza uma requisição HTTP utilizando a biblioteca requests;
- Recebe os dados retornados pela API;
- Converte a resposta JSON para dados que podem ser utilizados no Python;
- Exibe o logradouro, bairro, cidade e estado correspondentes ao CEP.

Essa atividade permitiu praticar o consumo de APIs externas, requisições HTTP e manipulação de dados em formato JSON.

--- 

## 🧪 Testes com Localhost e Thunder Client

Além do desenvolvimento dos códigos, foram realizados testes práticos utilizando um servidor local (localhost) e o Thunder Client, dentro do Visual Studio Code.

Durante os testes, foram realizadas requisições `GET` e `POST` para verificar o funcionamento das APIs.

### 🔄 Testes entre colegas

A atividade também envolveu a comunicação entre as páginas desenvolvidas pelos alunos.

Foram realizados testes:

- GET na minha própria página;
- POST na minha própria página;
- GET na página de colegas;
- POST na página de colegas;
- Colegas realizando GET e POST na minha página;
- Verificação das respostas retornadas pelas requisições.

Essa etapa ajudou a compreender, na prática, como diferentes aplicações podem se comunicar através de requisições HTTP e APIs.

--- 

## 🎯 Objetivos das atividades

As atividades tiveram como objetivo desenvolver conhecimentos práticos sobre:

- Criação e funcionamento de APIs;
- Métodos HTTP GET e POST;
- Comunicação entre aplicações;
- Manipulação de dados em JSON;
- Conexão entre PHP e banco de dados;
- Utilização do PDO;
- Consumo de APIs externas;
- Requisições HTTP utilizando Python;
- Testes de APIs utilizando o Thunder Client;
- Funcionamento de aplicações em ambiente local com localhost.

---

## 📌 Conclusão

As atividades permitiram colocar em prática conceitos de desenvolvimento Back-End e integração entre sistemas, mostrando como uma aplicação pode receber, enviar, consultar e manipular informações por meio de APIs e requisições HTTP.

Os testes realizados no localhost e no Thunder Client também possibilitaram verificar o funcionamento das aplicações e a comunicação entre os projetos dos alunos.