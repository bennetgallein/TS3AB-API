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
    public function getIp() {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip): void {
        $this->ip = $ip;
    }
}