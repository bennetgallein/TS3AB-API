<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 26.06.18
 * Time: 19:44
 */

namespace TS3AB;
use TS3AB\Commands\History;


/**
 * Class Ts3CommandCaller
 * @package TS3AB
 */
class Ts3CommandCaller {

    private $instance;

    /**
     * Ts3CommandCaller constructor.
     * @param Ts3AudioBot $ts3audioBotinstance
     */
    public function __construct(Ts3AudioBot $ts3audioBotinstance) {
        $this->instance = $ts3audioBotinstance;
    }


    /**
     * @param string $link
     * @return string json
     */
    public function play(string $link) {
        return $this->instance->request("play/" . rawurlencode($link));
    }

    /**
     * @param string $link
     * @return string json
     */
    public function add(string $link) {
        return $this->instance->request("add/" . rawurlencode($link));
    }

    /**
     * @return string json
     */
    public function makeCommander() {
        return $this->instance->request("bot/commander/on");
    }

    /**
     * @return mixed
     */
    public function takeCommander() {
        return $this->instance->request("bot/commander/off");
    }

    /**
     * @return mixed
     */
    public function come() {
        return $this->instance->request("bot/come");
    }

    /**
     * @return mixed
     */
    public function connectTo() {
        return $this->instance->request("bot/connect/to");
    }

    /**
     * @return mixed
     */
    public function connectNew() {
        return $this->instance->request("bot/connect/new");
    }

    /**
     * @return mixed
     */
    public function info() {
        return $this->instance->request("bot/info");
    }

    /**
     * @return mixed
     */
    public function list() {
        return $this->instance->rawRequest("bot/list");
    }

    /**
     * @return mixed
     */
    public function move() {
        return $this->instance->request("bot/move");
    }

    /**
     * @return mixed
     */
    public function name() {
        return $this->instance->request("bot/name");
    }

    /**
     * @return mixed
     */
    public function badges() {
        return $this->instance->request("bot/badges");
    }

    /**
     * @return mixed
     */
    public function save() {
        return $this->instance->request("bot/save");
    }

    /**
     * @return mixed
     */
    public function setup() {
        return $this->instance->request("bot/setup");
    }

    /**
     * @param $botid
     */
    public function use($botid) {
        $this->instance->botid = $botid;
    }

    /**
     * @return mixed
     */
    public function clear() {
        return $this->instance->request("clear");
    }

    /**
     * @return mixed
     */
    public function disconnect() {
        return $this->instance->request("disconnect");
    }

    /**
     * @return mixed
     */
    public function eval() {
        return $this->instance->request("eval");
    }

    /**
     * @return mixed
     */
    public function getmyid() {
        return $this->instance->request("getmy/id");
    }

    /**
     * @return mixed
     */
    public function getmyuid() {
        return $this->instance->request("getmy/uid");
    }

    /**
     * @return mixed
     */
    public function getmyname() {
        return $this->instance->request("getmy/name");
    }

    /**
     * @return mixed
     */
    public function getmydbid() {
        return $this->instance->request("getmy/dbid");
    }

    /**
     * @return mixed
     */
    public function getmychannel() {
        return $this->instance->request("getmy/channel");
    }

    /**
     * @return mixed
     */
    public function getmyall() {
        return $this->instance->request("getmy/all");
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

    /**
     * @return mixed
     */
    public function help() {
        return $this->instance->request("help");
    }

    /**
     * @return History
     */
    public function history() {
        return new History($this->instance);
    }

    // all commands until line 477 (https://github.com/Splamy/TS3AudioBot/blob/develop/TS3AudioBot/MainCommands.cs)
}