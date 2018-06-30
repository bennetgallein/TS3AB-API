# TS3AB-API
OOP API Wrapper for the TS3AudioBot WebAPI

This Wrapper is meant to make work with the TS3AudioBot WebAPI over PHP easier. It provides (in the future) all functions that the bot supports.

## Intention
This is more of a sideproject than a dedicated one, since I needed an easier way to communicate between a PHP-Backend with the Bot's API.

## Installation
Install view composer:
```
composer require bennetgallein/ts3ab-api
```

## Get started

1. Make a connection:
```php
$bot = new \TS3AB\Ts3AudioBot("192.168.1.104", "3306");
```
2. Authenticate
```php
$bot->basicAuth("j+W41OpXcHv8In9vt/Q2x+UmUPs=:ts3ab:X38WCfV3srBQBYUYZVkMnpxyBPWlMxZs");
```
Read more about Authentication in the official Wiki.

3. Select the correct bot. Since TS3AB allows multi-instances to run at the same time, you need to choose the context you want to work with.
```php
var_dump($bot->getCommandExecutor()->list()); // lists all active bots
$bot->getCommandExecutor()->use(0); // tells the API to use bot "0"
```
4. Execute commands.
```php
var_dump($bot->getCommandExecutor()->play("https://www.youtube.com/watch?v=xxxx"));
```

Atm the return value of all funtions is the pure anwser from the TS3AB API, which may change in the future.


