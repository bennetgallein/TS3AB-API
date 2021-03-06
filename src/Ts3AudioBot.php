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
    private $timeout;

    public $botid = 0;

    /**
     * Ts3AudioBot constructor.
     * @param string $ip
     * @param $port
     */
    public function __construct($ip, $port = 8180, $timeout = 5) {
        $this->ip = $ip;
        $this->port = $port;
        $this->commandExecutor = new Ts3CommandCaller($this);
        $this->timeout = $timeout;
    }

    /**
     * @param $token
     */
    public function basicAuth($token) {
        $this->token = $token;
        $token = explode(":", $token);
        $this->username =  $token[0];
        $this->accesstoken = $token[1];
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
        defined("USE_HTTPS") or define("USE_HTTPS", false);
        $requestpath = (USE_HTTPS == true ? "https://" : "http://");
        $requestpath .= $this->ip . ":" . $this->port . "/api/bot/use/" . $this->botid . "/(/" . $path;
        curl_setopt($ch, CURLOPT_URL, $requestpath);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout); 
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
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
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout); 
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
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

    /**
     * @return int
     */
    public function getID() {
        return $this->botid;
    }
}