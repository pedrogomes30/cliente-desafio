<h1> Desafio Cliente</h1>

<h3> sobre o desafio</h3>

O desafio consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro.
 
Você precisará construir uma base de dados com os seguintes campos:
 
•	ID;
•	Nome;
•	Telefone;
•	CPF;
•	Placa do Carro.
 
Para o gerenciamento dessa base, você construirá uma API REST contendo os seguintes endpoints:

 
| Método |Endpoint |Descrição |
|--|--|--|
| PUT	    | /cliente/{id}	                |Edição de um cliente já existente. |
| DELETE    |/cliente/{id}	                |Remoção de um cliente existente. |
| GET	    |/cliente/{id}	                |Consulta de dados de um cliente. |
| GET	    |/consulta/final-placa/{numero}	|Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado. |

Regras

•	Você deve construir o seu ambiente utilizando o docker e docker-compose (você pode utilizar uma receita de ambiente pronta, encontrada na internet);
•	Você deve utilizar um framework PHP de sua escolha;
•	Você será avaliado pela lógica e leitura do seu código, seguindo os princípios SOLID e PSR.

<h3> Instalação</h3>

para executar este projeto, basta realizar o clone deste repositório:
```
https://github.com/pedrogomes30/cliente-desafio.git
```
abrir a pasta raiz da aplicação e então executar:
```
./vendor/bin/sail up -d
```
após da preparação do ambiente do docker, e a instalação dos sistemas, a aplicação estará no ar.

também é possivel popular o banco de clientes utilizando o comando:
```
php artisan db:seed
```
irá gerar 10 novos clientes.

nesta aplicação há a collection para ser utilizada no ```Postman``` para realizar as testes desta api, basta acessar a pasta raiz, e instalar o arquivo ```DESAFIO CLIENTE.postman_collection``` e o postman ja está pronto para os testes.
