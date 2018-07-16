# TS3AB-API
OOP API Wrapper for the TS3AudioBot WebAPI

This Wrapper is meant to make work with the TS3AudioBot WebAPI over PHP easier. It provides (in the future) all functions that the bot supports.

**Warning:** This is based on the development branch! Do not use funtions that are only available there or you'll encounter some bad errors! 

## Intention
This is more of a sideproject than a dedicated one, since I needed an easier way to communicate between a PHP-Backend with the Bot's API.

## Installation

PHP Version Required: 7.1

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

### History
```php
$history = $bot->getCommandExecutor()->history();
```

Adds the song with <id> to the queue
```php
$history->add(0);
```
Cleans up the history file for better startup performance.
```php
$history->clean();
```
Cleans up the history file for better startup performance. Also checks for all links in the history which cannot be opened anymore.
```php
$history->cleanRemovedefective();
```
Removes the entry with <id> from the history.
```php
$history->delete(0);
```
Gets the last <count> songs from the user with the given <user-dbid>".
```php
$history->historyFrom(10, <userid>);
```
Displays all saved informations about the song with <id> (also can be last|next)
```php
$history->historyID(0);
```
Gets the last <count> played songs.
```php
$history->last(10);
```
Plays the last song again
```php
$history->playLast();
```
Playes the song with <id>
```php
$history->play(2);
```
Sets the name of the song with <id> to <name>
```php
$history->rename(0, "new title");
```
Gets all songs played until <date>. Any of those desciptors: (hour|today|yesterday|week)
```php
$history->till("today");
```
Gets all songs which title contains <string>
```php
$history->filterTitle("filter");
```


Atm the return value of all funtions is the pure answer from the TS3AB API, which may change in the future.


