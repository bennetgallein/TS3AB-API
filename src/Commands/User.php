<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 02.07.18
 * Time: 22:52
 */

namespace TS3AB\Commands;


use TS3AB\Ts3AudioBot;

/**
 * Class User
 * @package TS3AB\Commands
 */
class User {

    private $instance;

    /**
     * User constructor.
     * @param Ts3AudioBot $instance
     */
    public function __construct(Ts3AudioBot $instance) {
        $this->instance = $instance;
    }

    /**
     * @return mixed
     */
    public function getuserUIDbyID() {
        return $this->instance->request("getuser/uid/byid");
    }

    /**
     * @return mixed
     */
    public function getuserNamebyID() {
        return $this->instance->request("getuser/name/byid");
    }

    /**
     * @return mixed
     */
    public function getuserDBIDbyID() {
        return $this->instance->request("getuser/dbid/byid");
    }

    /**
     * @return mixed
     */
    public function getuserChannelbyID() {
        return $this->instance->request("getuser/channel/byid");
    }

    /**
     * @return mixed
     */
    public function getuserAllbyID() {
        return $this->instance->request("getuser/all/byid");
    }

    /**
     * @return mixed
     */
    public function getuserIDbyName() {
        return $this->instance->request("getuser/id/byname");
    }

    /**
     * @return mixed
     */
    public function getuserAllbyName() {
        return $this->instance->request("getuser/all/byname");
    }

    /**
     * @return mixed
     */
    public function getUserNamebyDBID() {
        return $this->instance->request("getuser/name/bydbid");
    }

    /**
     * @return mixed
     */
    public function getUserUIDbyDBID() {
        return $this->instance->request("getuser/uid/bydbid");
    }
}