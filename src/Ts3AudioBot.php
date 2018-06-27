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
    private $access_token;

    /**
     * Ts3AudioBot constructor.
     * @param string $ip
     * @param int $port
     */
    public function __construct($ip, int $port = 8180) {
        $this->ip = $ip;
        $this->port = $port;
    }

    /**
     * @param $token
     */
    public function basicAuth($token): void {
        $this->token = $token;
        $token = explode(":", $token);
        $this->username =  $token[0];
        $this->realm = $token[1];
        $this->access_token = $token[2];
    }

    /**
     * @return string
     */
    private function generateHeader(): string {
        return "Authorization: Basic " . base64_encode($this->username . ":" . $this->access_token);
    }

    /**
     * @param $path
     */
    public function request($path) {
        /** @noinspection PhpVariableNamingConventionInspection */
        $ch = curl_init();
        $path = "http://" . $this->ip . ":" . $this->port . "/api/" . $path;
        echo $path;
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($this->generateHeader()));
        $output = curl_exec($ch);
        curl_close($ch);
        var_dump($output);
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