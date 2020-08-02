# API JSON REST

Backend: Laravel
Banco de dados: MySql

# Instalação da aplicação

Clone o repositório do github.

Acesse a pasta:
```
cd teste_crud
``` 

Instale as dependências:
``` 
npm install
``` 

# Banco de Dados - MySql

As configurações do banco de dados encontram-se em:
.env
/config/database.php

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teste_gazin
DB_USERNAME=root
DB_PASSWORD=

Tabela e migration desenvolvedores:
/database/migrations/desenvolvedores_table.php
/app/Models/Desenvolvedor.php

Para rodar o banco de dados:
```
php artisan migrate
```

Para popular a tabela desenvolvedores:
```
php artisan db:seed
``` 

# Rodar a aplicação

Para rodar aplicação:
```
php artisan serve
``` 

# Rotas

Rotas testadas no postman

Busca todos desenvolvedores:
```
GET
localhost/developers
```

Busca desenvolvedor pelo id:
```
GET
localhost/developers/{id}
```

Cadastrar desenvolvedor:
```
POST
localhost/developers
```

Alterar desenvolvedor:
```
PUT
localhost/developers/{id}
```

Excluir desenvolvedor:
```
DELETE
localhost/developers/{id}
```