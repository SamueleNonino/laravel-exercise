# Esercizio in Laravel

Questo progetto Laravel contiene un'API che riceve un parametro in GET e restituisce lo stesso parametro come risposta, un command che aggiorna il valore di un contatore ogni minuto e una pagina web che mostra il valore del contatore.

## Prerequisiti

- PHP >= 7.3
- Composer
- MySQL o altro database supportato da Laravel

## Installazione

1. Clona il repository
    ```bash
    git clone https://github.com/SamueleNonino/laravel-exercise
    cd nome-del-repo
    ```

2. Installa le dipendenze
    ```bash
    composer install
    ```

3. Crea un file `.env` copiando il file di esempio e configura il database
    ```bash
    cp .env.example .env
    ```

4. Genera la chiave dell'applicazione
    ```bash
    php artisan key:generate
    ```

5. Configura il database nel file `.env`
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_del_database
    DB_USERNAME=tuo_username
    DB_PASSWORD=tuo_password
    ```

6. Esegui le migrazioni per creare le tabelle nel database
    ```bash
    php artisan migrate
    ```

## Utilizzo

### API

L'API è disponibile all'endpoint `/api/test`. Puoi testarla con un client HTTP come Postman o tramite il browser:

### Command

Il command andrà a aggiornare il contatore di un record sul database

Per avviare lo scheduler eseguire

```bash  
php artisan schedule:work
```

Alla pagina localhost:8000 si potra consultare il valore del contatore 
