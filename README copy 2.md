

# API CEP em PHP com SwaggerUi
Este é um projeto que explora como integrar o Swagger a APIs em PHP, simplificando o desenvolvimento e documentação de suas APIs RESTful. 
<details>
<summary>API / PHP / Swagger</summary>


    API -(Interface de Programação de Aplicativos): Um conjunto de regras que permite que diferentes softwares se comuniquem, frequentemente usando o formato JSON para transmitir informações.

    PHP (Hypertext Preprocessor): Uma linguagem de programação de código aberto usada para o desenvolvimento web, ideal para criar páginas da web dinâmicas e interagir com APIs.

    Swagger: Uma estrutura de código aberto que simplifica o desenvolvimento, documentação e teste de APIs, fornecendo uma interface amigável (Swagger UI) e gerando automaticamente documentação detalhada.
</details>

## Requisitos
<details>
<summary>Programas</summary>

- [Visual Studio C++](https://learn.microsoft.com/pt-br/cpp/windows/latest-supported-vc-redist?view=msvc-170)
- [Visual Studio Code](https://code.visualstudio.com/download)
- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [Swagger UI](https://swagger.io/tools/swagger-ui/download/)

</details>

<details>
<summary>Extensões</summary>

- [PHP Create Class](https://marketplace.visualstudio.com/items?itemName=jaguadoromero.vscode-php-create-class)
- [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
- [PHP IntelliSense](https://marketplace.visualstudio.com/items?itemName=zobo.php-intellisense)
- [PHP Namespace Resolver](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver)
- [PHP Server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver)
- [PHP Snippets](https://marketplace.visualstudio.com/items?itemName=tal7aouy.php)

![Schemas com exemplos e descrição](images/extensoes.png)


</details>


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


## Estrutura da API

<details>
<summary>api_cep\</summary>

  <details>
  <summary>documentation\</summary>

- api.php
- index.php

</details>

<details>
<summary>+images\</summary>

</details>

<details>
<summary>src\</summary>

<details>
<summary>cep\</summary>

- Cep.php
- index.php

</details>

<details>
<summary>helpers\</summary>

- headers.php
- index.php

</details>

<details>
<summary>stock\</summary>

- stock.php
- index.php

</details>

<details>
<summary>weather\</summary>

- Weathers.php
- index.php

</details>

</details>

<details>
<summary>+swagger-ui\</summary>

</details>

<details>
<summary>+vendor\</summary>

</details>

<details>
<summary>web\</summary>

<details>
<summary>css\</summary>

- style.css

</details>

<details>
<summary>js\</summary>

- script.js

</details>

</details>

- composer.json
- composer.lock
- estrutura.txt
- index.html
- licence
- readme.md

</details>


## Estrutura da API
```typescript
 api_cep\
    │
    ├── \documentation\
    │     ├── api.php
    │     └── index.php
    │
    ├── +\images\
    │
    ├── \src\
    │     ├── \cep\
    │     │      └── Cep.php
    │     │      └── index.php
    │     │
    │     ├── \helpers\
    │     │       └── headers.php
    │     │       └── index.php
    │     │
    │     ├── \stock\
    │     │      └── stock.php
    │     │      └── index.php
    │     │
    │     ├── \weather\
    │             └── Weathers.php
    │             └── index.php
    │
    ├── +\swagger-ui\
    │
    │
    │
    ├── +\vendor\
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

## Recursos

```typescript


******************
CEP - Interno
******************************************************************************************
POST: http://localhost:3000/api/cep/search
CONTENT: {
    "cep": "08220620"
}
HEADERS:content-type: application/json

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
        <td style="text-align:center"><code>http://localhost:3000/src/cep/</code></td>
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
