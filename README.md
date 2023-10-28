

# API CEP em PHP com SwaggerUi
Este é um projeto que explora como integrar o Swagger a APIs em PHP.
<details>
<summary>API / PHP / Swagger</summary>

    API -(Interface de Programação de Aplicativos): É um conjunto de regras modelo REST utiliza os métodos HTTP (GET, POST, PUT, DELETE, etc.) que permite que diferentes softwares se comuniquem, frequentemente usando o formato JSON para transmitir informações.

    PHP (Hypertext Preprocessor): Uma linguagem de programação de código aberto usada para o desenvolvimento web, ideal para criar páginas da web dinâmicas e interagir com APIs.

    Swagger: Uma estrutura de código aberto que simplifica o desenvolvimento, documentação e teste de APIs, fornecendo uma interface amigável (Swagger UI) e gerando automaticamente documentação detalhada.

</details>

## Requisitos

```typescript
PHP Server:    http://localhost:3000/index.html
Port: 3000
```

<details>



<summary>Programas</summary>

1. [Visual Studio C++](https://learn.microsoft.com/pt-br/cpp/windows/latest-supported-vc-redist?view=msvc-170)
2. [Visual Studio Code](https://code.visualstudio.com/download)
3. [PHP](https://www.php.net/downloads)
4. [Composer](https://getcomposer.org/download/)
5. [Swagger UI](https://swagger.io/tools/swagger-ui/download/)

</details>

<details>
<summary>Extensões</summary>

- [PHP Create Class](https://marketplace.visualstudio.com/items?itemName=jaguadoromero.vscode-php-create-class)
- [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
- [PHP IntelliSense](https://marketplace.visualstudio.com/items?itemName=zobo.php-intellisense)
- [PHP Namespace Resolver](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver)
- [PHP Server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver)
- [PHP Snippets](https://marketplace.visualstudio.com/items?itemName=tal7aouy.php)

![Schemas com exemplos e descrição](/images/extensoes.png)

</details>

## Estrutura da API

<details>
<summary>api</summary>

```typescript
   api\
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

</details>

## Requisito de Compilação
Execute o comando abaixo toda vez que atualizar programação, serve para recompilar o arquivo de carregamento automático do Composer e permite ao PHP carregar as classes necessárias conforme elas são solicitadas.

```bash
> composer dump-autoload -o
```


## Recursos das API`s



#### API`s com Retorno Padrao

<details>
<summary>API CEP</summary>

```typescript

POST:       http://localhost:3000/src/cep/
HEADERS:    content-type: application/json
CONTENT:    {"cep": "01156050"}
_________________________________________________________________

CODE:200 - SUCESS

CONTENT:
{
    "Cep": "01156050",
    "Tipo": "Avenida",
    "Nome": "Doutor Adolpho Pinto",
    "Endereco": "Avenida Doutor Adolpho Pinto",
    "Estado": "SP",
    "Distrito": "Barra Funda",
    "Latitude": "-23.52982",
    "Longitude": "-46.66597",
    "Cidade": "S\u00e3o Paulo",
    "DDD": "11"
}
_________________________________________________________________
CODE:400 - INVALID

CONTENT:
{

}
_________________________________________________________________
CODE:404 - NOT FOUND

CONTENT:
{

}
_________________________________________________________________

```
</details>

<details>
<summary>API WEATHER</summary>

```typescript

POST:       http://localhost:3000/src/weather/
HEADERS:    content-type: application/json
CONTENT:    {
              "lat": -23.52982,
              "lon": -46.66597	
            }
_________________________________________________________________

CODE:200 - SUCESS

CONTENT:
{
    "cod": "200",
    "message": 0,
    "cnt": 40,
    "list": [{
        "dt": 1698354000,
        "main": {
            "temp": 19.9,
            "feels_like": 20.24,
            "temp_min": 18.19,
            "temp_max": 19.9,
            "pressure": 1010,
            "sea_level": 1010,
            "grnd_level": 926,
            "humidity": 88,
            "temp_kf": 1.71
        },
        "weather": [{
            "id": 500,
            "main": "Rain",
            "description": "chuva leve",
            "icon": "10d"
        }],
        "clouds": {
            "all": 83
        },
        "wind": {
            "speed": 3.62,
            "deg": 132,
            "gust": 5.23
        },
        "visibility": 196,
        "pop": 0.72,
        "rain": {
            "3h": 0.45
        },
        "sys": {
            "pod": "d"
        },
        "dt_txt": "2023-10-26 21:00:00"
    }, ....
_________________________________________________________________
CODE:400 - INVALID

CONTENT:
{

}
_________________________________________________________________
CODE:404 - NOT FOUND

CONTENT:
{

}
_________________________________________________________________

```
</details>


<details>
<summary>API STOCK</summary>

```typescript

POST:       http://localhost:3000/src/stock/
HEADERS:    content-type: application/json
CONTENT:    {
	            "stock": "VALE3" 
            }
_________________________________________________________________

CODE:200 - SUCESS

CONTENT:
{
    "Meta Data": {
        "1. Information": "Daily Prices (open, high, low, close) and Volumes",
        "2. Symbol": "VALE3.SA",
        "3. Last Refreshed": "2023-10-25",
        "4. Output Size": "Compact",
        "5. Time Zone": "US\/Eastern"
    },
    "Time Series (Daily)": {
        "2023-10-25": {
            "1. open": "64.7000",
            "2. high": "65.1800",
            "3. low": "63.7500",
            "4. close": "63.9300",
            "5. volume": "26007900"
        },
        "2023-10-24": {
            "1. open": "64.0000",
            "2. high": "64.2700",
            "3. low": "63.5700",
            "4. close": "63.9900",
            "5. volume": "21716800"
        }, ...

}
_________________________________________________________________
CODE:400 - INVALID

CONTENT:
{

}
_________________________________________________________________
CODE:404 - NOT FOUND

CONTENT:
{

}
_________________________________________________________________

```
</details>


#### API`s Formatadas Para o MODELO index.thml 

<details>
<summary>API CEP MODEL</summary>

```typescript

POST:       http://localhost:3000/src/cep/model/
HEADERS:    content-type: application/json
CONTENT:    {"cep": "01156050"}
_________________________________________________________________

CODE:200 - SUCESS

CONTENT:
{
    "Cep": "01156050",
    "Tipo": "Avenida",
    "Nome": "Doutor Adolpho Pinto",
    "Endereco": "Avenida Doutor Adolpho Pinto",
    "Estado": "SP",
    "Distrito": "Barra Funda",
    "Latitude": "-23.52982",
    "Longitude": "-46.66597",
    "Cidade": "S\u00e3o Paulo",
    "DDD": "11"
}
_________________________________________________________________
CODE:400 - INVALID

CONTENT:
{

}
_________________________________________________________________
CODE:404 - NOT FOUND

CONTENT:
{

}
_________________________________________________________________

```
</details>

<details>
<summary>API WEATHER MODEL</summary>

```typescript

POST:       http://localhost:3000/src/weather/
HEADERS:    content-type: application/json
CONTENT:    {
              "lat": -23.52982,
              "lon": -46.66597	
            }
_________________________________________________________________

CODE:200 - SUCESS

CONTENT:
{
    "cod": "200",
    "message": 0,
    "cnt": 40,
    "list": [{
        "dt": 1698354000,
        "main": {
            "temp": 19.9,
            "feels_like": 20.24,
            "temp_min": 18.19,
            "temp_max": 19.9,
            "pressure": 1010,
            "sea_level": 1010,
            "grnd_level": 926,
            "humidity": 88,
            "temp_kf": 1.71
        },
        "weather": [{
            "id": 500,
            "main": "Rain",
            "description": "chuva leve",
            "icon": "10d"
        }],
        "clouds": {
            "all": 83
        },
        "wind": {
            "speed": 3.62,
            "deg": 132,
            "gust": 5.23
        },
        "visibility": 196,
        "pop": 0.72,
        "rain": {
            "3h": 0.45
        },
        "sys": {
            "pod": "d"
        },
        "dt_txt": "2023-10-26 21:00:00"
    }, ....
_________________________________________________________________
CODE:400 - INVALID

CONTENT:
{

}
_________________________________________________________________
CODE:404 - NOT FOUND

CONTENT:
{

}
_________________________________________________________________

```
</details>


<details>
<summary>API STOCK MODEL</summary>

```typescript

POST:       http://localhost:3000/src/stock/
HEADERS:    content-type: application/json
CONTENT:    {
	            "stock": "VALE3" 
            }
_________________________________________________________________

CODE:200 - SUCESS

CONTENT:
{
    "Meta Data": {
        "1. Information": "Daily Prices (open, high, low, close) and Volumes",
        "2. Symbol": "VALE3.SA",
        "3. Last Refreshed": "2023-10-25",
        "4. Output Size": "Compact",
        "5. Time Zone": "US\/Eastern"
    },
    "Time Series (Daily)": {
        "2023-10-25": {
            "1. open": "64.7000",
            "2. high": "65.1800",
            "3. low": "63.7500",
            "4. close": "63.9300",
            "5. volume": "26007900"
        },
        "2023-10-24": {
            "1. open": "64.0000",
            "2. high": "64.2700",
            "3. low": "63.5700",
            "4. close": "63.9900",
            "5. volume": "21716800"
        }, ...

}
_________________________________________________________________
CODE:400 - INVALID

CONTENT:
{

}
_________________________________________________________________
CODE:404 - NOT FOUND

CONTENT:
{

}
_________________________________________________________________

```
</details>




## Documentação com Swagger

```typescript
Server:    http://localhost:3000/documentation/index.php
```
<details>
<summary>Swagger WebServer - Exemplo</summary>


![Swagger WebServer ](images/SwaggerUi.png)
</details>
