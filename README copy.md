https://docs.github.com/pt/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax



![GitHub Org's stars](https://img.shields.io/github/stars/camilafernanda?style=social)

[![Build Status](https://app.travis-ci.com/kyriosdata/exemplo.svg)](https://app.travis-ci.com/github/kyriosdata/exemplo)
[![SonarCloud Status](https://sonarcloud.io/api/project_badges/measure?project=com.github.kyriosdata%3Aexemplo&metric=alert_status)](https://sonarcloud.io/dashboard?id=com.github.kyriosdata%3Aexemplo)
[![Known Vulnerabilities](https://snyk.io/test/github/kyriosdata/exemplo/badge.svg?targetFile=pom.xml)](https://snyk.io/test/github/kyriosdata/exemplo)
[![Maven Central](https://maven-badges.herokuapp.com/maven-central/com.github.kyriosdata/exemplo/badge.svg)](https://maven-badges.herokuapp.com/maven-central/com.github.kyriosdata/exemplo)

# 📁 Acesso ao projeto

**Indique como é possível baixar ou acessar o código fonte do projeto, seja projeto inicial ou final**

# 🛠️ Abrir e rodar o projeto

**Apresente as instruções necessárias para abrir e executar o projeto**

# Índice 

# Autores

| [<img loading="lazy" src="https://avatars.githubusercontent.com/u/37356058?v=4" width=115><br><sub>Camila Fernanda Alves</sub>](https://github.com/camilafernanda) |  [<img loading="lazy" src="https://avatars.githubusercontent.com/u/30351153?v=4" width=115><br><sub>Guilherme Lima</sub>](https://github.com/guilhermeonrails) |  [<img loading="lazy" src="https://avatars.githubusercontent.com/u/8989346?v=4" width=115><br><sub>Alex Felipe</sub>](https://github.com/alexfelipe) |
| :---: | :---: | :---: |



* [Título e Imagem de capa](#Título-e-Imagem-de-capa)
* [Badges](#badges)
* [Índice](#índice)
* [Descrição do Projeto](#descrição-do-projeto)
* [Status do Projeto](#status-do-Projeto)
* [Funcionalidades e Demonstração da Aplicação](#funcionalidades-e-demonstração-da-aplicação)
* [Acesso ao Projeto](#acesso-ao-projeto)
* [Tecnologias utilizadas](#tecnologias-utilizadas)
* [Pessoas Contribuidoras](#pessoas-contribuidoras)
* [Pessoas Desenvolvedoras do Projeto](#pessoas-desenvolvedoras)
* [Licença](#licença)
* [Conclusão](#conclusão)



# API's em PHP com SwaggerUi

    API (Interface de Programação de Aplicativos): Um conjunto de regras que permite que diferentes softwares se comuniquem, frequentemente usando o formato JSON para transmitir informações.

    PHP (Hypertext Preprocessor): Uma linguagem de programação de código aberto usada para o desenvolvimento web, ideal para criar páginas da web dinâmicas e interagir com APIs.

    Swagger: Uma estrutura de código aberto que simplifica o desenvolvimento, documentação e teste de APIs, fornecendo uma interface amigável (Swagger UI) e gerando automaticamente documentação detalhada. O Swagger melhora a eficiência e acessibilidade no desenvolvimento de software.

    Este é um projeto que explora como integrar o Swagger a APIs em PHP, simplificando o desenvolvimento e documentação de suas APIs RESTful. Saiba mais sobre APIs, PHP e Swagger para melhorar seu processo de desenvolvimento.

## Instalação

- `@nestjs/swagger`
- `swagger-ui-express`

```bash
npm install --save @nestjs/swagger swagger-ui-express
```

> Também é possível usar o Swagger no Nest com o Fastify, basta usar a lib do swagger `fastify-swagger`

<h2 id="composer">Composer</h2>
    <p>
        Changes should be updated via <code>composer dump-autoload -o</code> on your local machine.
    </p>


<h1 id="documentation">Documentation</h1>
    <p>
        This API provides functionality for creating and maintaining     users   to control a simple To-Do-List application. The
        following shows the API structure for <strong>users</strong> and <strong>tasks</strong> resources.
    </p>


### Estrutura da API
```typescript
 api_cep\
    │
    ├── \src\
    │     └── \cep\
    │           └── Cep.php
    │           └── index.php
    │
    ├── \swagger-ui
    │
    ├── \documentation\
    │     ├── api.php
    │     └── index.php
    │
    ├── \vendor\
    │
    ├── \web\
    │     ├── \css
    │     │     └── style.css
    │     └── \js
    │           └── script.js
    │
    ├── composer.json
    ├── composer.lock
    ├── estrutura.txt
    ├── index.html
    ├── licence
    └── readme.md
```

<h2 id="token">Token</h2>
    <p>
        To use this API, a user must first be created with resource below.
    </p>
    <p>
        A TOKEN will be returned that should be used in all subsequent requests for both user and task data manipulation.
    </p>

<h2 id="uri">URI</h2>
    <p>
        The <code>URI</code> variable must be filled with the address where the API will be made available.
    </p>

<h1 id="_resources_"><em>Resources</em></h1>
<h2 id="user">User</h2>

<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>NEW</strong></td>
        <td style="text-align:center"><code>http://URI/api/user/new/</code></td>
        <td style="text-align:center"><strong>POST</strong></td>
    </tr>
    </tbody>
</table>

<hr>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"name"</span>: <span class="hljs-string">"name"</span>,
  <span class="hljs-attr">"email"</span>: <span class="hljs-string">"email"</span>,
  <span class="hljs-attr">"username"</span>: <span class="hljs-string">"username"</span>,
  <span class="hljs-attr">"password"</span>: <span class="hljs-string">"password"</span>
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"User Successfully Added"</span>,
  <span class="hljs-attr">"id"</span>: <span class="hljs-string">"user_id"</span>,
  <span class="hljs-attr">"token"</span>: <span class="hljs-string">"TOKEN value"</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected Four)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Could Not Add User"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"User Already Exists"</span>
}
</code></pre>
<hr>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>LOGIN</strong></td>
        <td style="text-align:center"><code>http://URI/api/user/login/</code></td>
        <td style="text-align:center"><strong>POST</strong></td>
    </tr>
    </tbody>
</table>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"username"</span>: <span class="hljs-string">"username"</span>,
  <span class="hljs-attr">"password"</span>: <span class="hljs-string">"password"</span>
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
  <span class="hljs-attr">"name"</span>: <span class="hljs-string">"John Doe"</span>,
  <span class="hljs-attr">"email"</span>: <span class="hljs-string">"john.doe@domain.com"</span>,
  <span class="hljs-attr">"token"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>,
  <span class="hljs-attr">"picture"</span>: <span class="hljs-string">"BASE64_STRING"</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected Two)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Incorrect username and/or password"</span>
}
</code></pre>
<hr>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>UPDATE</strong></td>
        <td style="text-align:center"><code>http://URI/api/user/update/</code></td>
        <td style="text-align:center"><strong>PUT</strong></td>
    </tr>
    </tbody>
</table>
<p>Attention: <code>username</code> and <code>password</code> can not be changed in this version.</p>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"name"</span>: <span class="hljs-string">"name"</span>,
  <span class="hljs-attr">"email"</span>: <span class="hljs-string">"email"</span>,
  <span class="hljs-attr">"username"</span>: <span class="hljs-string">"username"</span>,
  <span class="hljs-attr">"password"</span>: <span class="hljs-string">"password"</span>,
  <span class="hljs-attr">"picture"</span>: <span class="hljs-string">"picture"</span>
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>,
  <span class="hljs-attr">"Authorization"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"User Successfully Updated"</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected Five)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Incorrect username and/or password"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Could Not Update User"</span>
}
</code></pre>
<hr>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>DELETE</strong></td>
        <td style="text-align:center"><code>http://URI/api/user/delete/</code></td>
        <td style="text-align:center"><strong>DELETE</strong></td>
    </tr>
    </tbody>
</table>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"username"</span>: <span class="hljs-string">"username"</span>,
  <span class="hljs-attr">"password"</span>: <span class="hljs-string">"password"</span>,
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>,
  <span class="hljs-attr">"Authorization"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"User Successfully Deleted"</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected Two)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Incorrect username and/or password"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Could Not Delete User"</span>
}
</code></pre>
<hr>
<h1 id="task">Task</h1>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>NEW</strong></td>
        <td style="text-align:center"><code>http://URI/api/task/new/</code></td>
        <td style="text-align:center"><strong>POST</strong></td>
    </tr>
    </tbody>
</table>
<hr>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Task name"</span>
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>,
  <span class="hljs-attr">"Authorization"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Task Successfully Added"</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected Two)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Could Not Add Task"</span>
}
</code></pre>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>SEARCH</strong></td>
        <td style="text-align:center"><code>http://URI//api/task/search/</code></td>
        <td style="text-align:center"><strong>POST</strong></td>
    </tr>
    </tbody>
</table>
<hr>
<p>Payload is not necessary, as the control is performed by <code>token</code>.</p>
<p><strong>Realized</strong> field accept values: <code>0</code> (open) or <code>1</code> (realized)</p>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>,
  <span class="hljs-attr">"Authorization"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">[
  {
    <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"userId"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"name"</span>: <span class="hljs-string">"task name"</span>,
    <span class="hljs-attr">"date"</span>: <span class="hljs-string">"2021-08-16"</span>,
    <span class="hljs-attr">"realized"</span>: <span class="hljs-number">0</span>
  }
]
</code></pre>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>UPDATE</strong></td>
        <td style="text-align:center"><code>http://URI/api/task/update/</code></td>
        <td style="text-align:center"><strong>PUT</strong></td>
    </tr>
    </tbody>
</table>
<hr>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"id"</span>: <span class="hljs-string">"value"</span>,
  <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Task name"</span>,
  <span class="hljs-attr">"realized"</span>: <span class="hljs-string">"value"</span>
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>,
  <span class="hljs-attr">"Authorization"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Task Successfully Updated"</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Task(s) not found"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Method Not Allowed"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected Three)"</span>
}
</code></pre>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>EDIT</strong></td>
        <td style="text-align:center"><code>http://URI/api/task/edit/</code></td>
        <td style="text-align:center"><strong>POST</strong></td>
    </tr>
    </tbody>
</table>
<hr>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"id"</span>: <span class="hljs-string">"value"</span>
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>,
  <span class="hljs-attr">"Authorization"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
<span class="hljs-attr">"id"</span>: <span class="hljs-number">2</span>,
<span class="hljs-attr">"userId"</span>: <span class="hljs-number">1</span>,
<span class="hljs-attr">"name"</span>: <span class="hljs-string">"Task name"</span>,
<span class="hljs-attr">"date"</span>: <span class="hljs-string">"2021-08-16"</span>,
<span class="hljs-attr">"realized"</span>: <span class="hljs-number">0</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Payload Precondition Failed"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid or Missing Token"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected One)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Bad Request (Invalid Syntax)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Token Refused"</span>
}
</code></pre>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>DELETE</strong></td>
        <td style="text-align:center"><code>http://URI/api/task/delete/</code></td>
        <td style="text-align:center"><strong>DELETE</strong></td>
    </tr>
    </tbody>
</table>
<hr>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"id"</span>: <span class="hljs-string">"id_task"</span>
}
</code></pre>
<p><em><strong>header</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"content-type"</span>: <span class="hljs-string">"application/json"</span>,
  <span class="hljs-attr">"Authorization"</span>: <span class="hljs-string">"YOUR_TOKEN"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Task deleted Successfully"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Task not exist"</span>
}
</code></pre>
<hr>
<p><em><strong>Other Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Bad Request (Invalid Syntax)"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Token Refused"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Invalid or Missing Token"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Payload Precondition Failed"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Method Not Allowed"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"&lt;SQL Code&gt;"</span>
}
</code></pre>
<pre><code class="lang-json">{
  <span class="hljs-attr">"message"</span>: <span class="hljs-string">"&lt;Unknown&gt;"</span>
}
</code></pre>
