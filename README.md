<h1> TESTE MARVEL </h1>

## Como Executar

- Na pasta raiz rode composer update
- Crie um arquivo .env com as conexão que ira utilizar
- Execute o script que esta no caminho /script/database.sql
- Inicie o servidor com php artisan serve
## Objetivo do teste

O teste consistia em fazer com que algumas rotas seja chama em uma aplicação e que retorne alguns dados, usando uma API da marvel.

As rotas em questão.

- /v1/public/characters
- /v1/public/characters/{characterId}
- /v1/public/characters/{characterId}/comics
- /v1/public/characters/{characterId}/events
- /v1/public/characters/{characterId}/series
- /v1/public/characters/{characterId}/stories

## Considerações
Ao longo do desenvolvimento tive dificuldade com a questão da estrutura do laravel, achei meio complicado usar outras bibliotecas juntamente com o laravel, fiz alguns teste para usar o Doctrine e o slim, porem não obtive sucesso e acabei fazendo as requisições com o proprio laravel usando o Eloquent, Foi minha primeira vez trabalhando diretamente com laravel criando um projeto do zero usando o artisan, foi muito proveitoso esse projeto, em pouco tempo consegui apreder o basico para criar um controller, um model e uma view, e juntamente com o Eloquent consegui fazer essa aplicação, outro ponto que ajudou é que a documentação do laravel é bem completa e existe bastante conteudo na internet.
Acredito que compri com o objetivo proposto fazendo acesso as rotas necessarias