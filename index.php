<?php

// TEST FILE
require("vendor/autoload.php");

/** @noinspection PhpVariableNamingConventionInspection */
$bot = new \TS3AB\Ts3AudioBot("192.168.1.104");
$bot->basicAuth("j+W41OpXcHv8In9vt/Q2x+UmUPs=:ts3ab:X38WCfV3srBQBYUYZVkMnpxyBPWlMxZs");
var_dump($bot->getCommandExecutor()->list());
$bot->getCommandExecutor()->use(0);
var_dump($bot->getCommandExecutor()->play("https://www.youtube.com/watch?v=JtULGlOOkuM&list=RDMM15Mkpqy6kpc&index=21"));