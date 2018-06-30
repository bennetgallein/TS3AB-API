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

    public function takeCommander() {
        return $this->instance->request("bot/commander/off");
    }

    public function come() {
        return $this->instance->request("bot/come");
    }

    public function connectTo() {
        return $this->instance->request("bot/connect/to");
    }

    public function connectNew() {
        return $this->instance->request("bot/connect/new");
    }

    public function info() {
        return $this->instance->request("bot/info");
    }

    public function list() {
        return $this->instance->rawRequest("bot/list");
    }

    public function move() {
        return $this->instance->request("bot/move");
    }

    public function name() {
        return $this->instance->request("bot/name");
    }

    public function badges() {
        return $this->instance->request("bot/badges");
    }

    public function save() {
        return $this->instance->request("bot/save");
    }

    public function setup() {
        return $this->instance->request("bot/setup");
    }

    public function use($botid) {
        $this->instance->botid = $botid;
    }

    public function clear() {
        return $this->instance->request("clear");
    }

    public function disconnect() {
        return $this->instance->request("disconnect");
    }

    public function eval() {
        return $this->instance->request("eval");
    }

    public function getmyid() {
        return $this->instance->request("getmy/id");
    }

    public function getmyuid() {
        return $this->instance->request("getmy/uid");
    }

    public function getmyname() {
        return $this->instance->request("getmy/name");
    }

    public function getmydbid() {
        return $this->instance->request("getmy/dbid");
    }

    public function getmychannel() {
        return $this->instance->request("getmy/channel");
    }

    public function getmyall() {
        return $this->instance->request("getmy/all");
    }

    public function getuserUIDbyID() {
        return $this->instance->request("getuser/uid/byid");
    }

    public function getuserNamebyID() {
        return $this->instance->request("getuser/name/byid");
    }

    public function getuserDBIDbyID() {
        return $this->instance->request("getuser/dbid/byid");
    }

    public function getuserChannelbyID() {
        return $this->instance->request("getuser/channel/byid");
    }

    public function getuserAllbyID() {
        return $this->instance->request("getuser/all/byid");
    }

    public function getuserIDbyName() {
        return $this->instance->request("getuser/id/byname");
    }

    public function getuserAllbyName() {
        return $this->instance->request("getuser/all/byname");
    }

    public function getUserNamebyDBID() {
        return $this->instance->request("getuser/name/bydbid");
    }

    public function getUserUIDbyDBID() {
        return $this->instance->request("getuser/uid/bydbid");
    }

    public function help() {
        return $this->instance->request("help");
    }

    public function history() {
        return new History($this->instance);
    }

    // all commands until line 477 (https://github.com/Splamy/TS3AudioBot/blob/develop/TS3AudioBot/MainCommands.cs)
}