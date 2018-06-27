<?php

// TEST FILE
require("vendor/autoload.php");

/** @noinspection PhpVariableNamingConventionInspection */
$bot = new \TS3AB\Ts3AudioBot("192.168.1.104");
$bot->basicAuth("j+W41OpXcHv8In9vt/Q2x+UmUPs=:ts3ab:frVLjQPZZeWWt3MwJfsFDJoUi3120b8x");
$bot->request("rng");
