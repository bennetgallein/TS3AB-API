<?php

// TEST FILE
require("vendor/autoload.php");

/** @noinspection PhpVariableNamingConventionInspection */
$bot = new \TS3AB\Ts3AudioBot("192.168.1.104");
$bot->basicAuth("j+W41OpXcHv8In9vt/Q2x+UmUPs=:ts3ab:oh5rlDXKmEXVcCzrFzyZVMzXKOQLToxk");
var_dump($bot->getCommandExecutor()->listBots());
$bot->getCommandExecutor()->use(0);
$new = ($bot->getCommandExecutor()->connectNew("192.168.1.104:9989"));
$Id = json_decode($new)->Id;
$bot->getCommandExecutor()->use($Id);
$bot->getCommandExecutor()->save(5468);
$bot->getCommandExecutor()->disconnect();
$bot->getCommandExecutor()->use(0);
$bot->getCommandExecutor()->connectTo(5468);