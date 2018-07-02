<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 26.06.18
 * Time: 19:38
 */

namespace TS3AB;


/**
 * Class Ts3AudioBot
 * @package TS3AB
 */
class Ts3AudioBot {


    private /** @noinspection PhpPropertyNamingConventionInspection */
        $ip;
    private $port;
    private $token;

    private $username;
    private $realm;
    private $accesstoken;
    private $commandExecutor;

    public $botid = 0;

    /**
     * Ts3AudioBot constructor.
     * @param string $ip
     * @param int $port
     */
    public function __construct($ip, int $port = 8180) {
        $this->ip = $ip;
        $this->port = $port;
        $this->commandExecutor = new Ts3CommandCaller($this);
    }

    /**
     * @param $token
     */
    public function basicAuth($token): void {
        $this->token = $token;
        $token = explode(":", $token);
        $this->username =  $token[0];
        $this->realm = $token[1];
        $this->accesstoken = $token[2];
    }

    /**
     * @return string
     */
    private function generateHeader(): string {
        return "Authorization: Basic " . base64_encode($this->username . ":" . $this->accesstoken);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function request($path) {
        /** @noinspection PhpVariableNamingConventionInspection */
        $ch = curl_init();
        $requestpath = "http://" . $this->ip . ":" . $this->port . "/api/bot/use/" . $this->botid . "/(/" . $path;
        curl_setopt($ch, CURLOPT_URL, $requestpath);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($this->generateHeader()));
        $output = curl_exec($ch);
        curl_close($ch);
        return ($output);
    }

    public function rawRequest($path) {
        /** @noinspection PhpVariableNamingConventionInspection */
        $ch = curl_init();
        $requestpath = "http://" . $this->ip . ":" . $this->port . "/api/" . $path;
        curl_setopt($ch, CURLOPT_URL, $requestpath);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($this->generateHeader()));
        $output = curl_exec($ch);
        curl_close($ch);
        return ($output);
    }


    /**
     * @return Ts3CommandCaller
     */
    public function getCommandExecutor() {
        return $this->commandExecutor;
    }

    /**
     * @return int
     */
    public function getPort(): int {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port): void {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    private function getIp() {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip): void {
        $this->ip = $ip;
    }
}