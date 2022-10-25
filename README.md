# DOCUMENTATION

## START PROJECT

- Download this project and save to your local
- Run `composer install` to install all dependencies needed
- Open your computer server to run your server, then create new database on your database
- Configure your .env file, go to database section, and configure the database according to the database you are using, the user, and the password you are using as below
  ```
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=8889
      DB_DATABASE=db_lembur
      DB_USERNAME=root
      DB_PASSWORD=root
  ```
- After that, you can run command `php artisan migrate` to generate all table migrations which is exist in this project
- Then, you can run command `php artisan db:seed --class=MaterialSeeder` to seed your database with Material to materials table
- Then, you can run command `php artisan serve` to start your laravel server and try the endpoint has been build

## API ENDPOINT

### Get Materials

Request :

- Method : GET
- Endpoint : `/api/materials`
- Header :
  - Accept: application/json

Response :

```json
{
  "status": "boolean",
  "code": "integer",
  "message": "string",
  "materials": [
    {
      "material_id": "integer, unique",
      "name": "string",
    },
  ]
}
```

### Get Wastes

Request :

- Method : GET
- Endpoint : `/api/types`
- Header :
  - Accept: application/json

Response :

```json
{
  "status": "boolean",
  "code": "integer",
  "message": "string",
  "types": [
    {
      "id": "string",
       "material": {
            "material_id": "string",
            "name": "string",
       },
      "name": "string"
    },
  ]
}
```

### Post Waste

Request :

- Method : POST
- Endpoint : `/api/types`
- Header :
  - Content-Type: application/json
  - Accept: application/json
- Body :

```json
{
  "material_id": "string",
  "name": "string"
}
```

Response :

```json
{
  "success": "boolean",
  "code": "integer",
  "message": "string",
  "types": {
    "id": "string",
    "material": {
        "material_id": "string",
        "name": "string",
    },
    "name": "string"
  }
}
```

## Delete Waste

Request :

- Method : DELETE
- Endpoint : `/api/types/{$type_id}`
- Header :
  - Content-Type: application/json
  - Accept: application/json

Response :

```json
{
  "success": "boolean",
  "code": "integer",
  "message": "string",
  "types": []
}
```