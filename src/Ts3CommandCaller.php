<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 26.06.18
 * Time: 19:44
 */

namespace TS3AB;

use TS3AB\Commands\History;
use TS3AB\Commands\Playlist;
use TS3AB\Commands\User;


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
     * @return mixed
     */
    public function pause() {
        return $this->instance->request("pause");
    }

    /**
     * @return mixed
     */
    public function unpause() {
        return $this->instance->request("play");
    }

    /**
     * @return mixed
     */
    public function song() {
        return $this->instance->request("song");
    }

    /**
     * @param int $volume
     * @return bool|mixed
     */
    public function volume(int $volume) {
        $volume = (int) $volume;
        if ($volume >= 0 && $volume <= 100) {
            return $this->instance->request("volume/" . $volume);
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function stop() {
        return $this->instance->request("stop");
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
    public function connectTo($templateName) {
        return $this->instance->request("bot/connect/template/" . rawurlencode($templateName));
    }

    /**
     * @return mixed
     */
    public function connectNew($ip) {
        return $this->instance->request("bot/connect/to/" . rawurlencode($ip));
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
    public function listBots() {
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
    public function name($name) {
        return $this->instance->request("bot/name/" . rawurlencode($name));
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
    public function save($templateName) {
        return $this->instance->request("bot/save/" . rawurlencode($templateName));
    }

    /**
     * @return mixed
     */
    public function setup() {
        return $this->instance->request("bot/setup");
    }

    /**
     * @return mixed
     */
    public function disconnect() {
        return $this->instance->request("bot/disconnect");
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
    public function eval() {
        return $this->instance->request("eval");
    }

    /**
     * @return mixed
     */
    public function help() {
        return $this->instance->request("help");
    }

    /**
     * @return mixed
     */
    public function settings() {
        return $this->instance->rawRequest("settings");
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getSettings($value) {
        return $this->instance->rawRequest("settings/get/" . $value);
    }

    /**
     * @param $string
     * @param $value
     * @return mixed
     */
    public function setSettings($string, $value) {
        return $this->instance->rawRequest("settings/set/" . $string . "/" . $value);
    }

    /**
     * @param $template
     * @param $string
     * @return mixed
     */
    public function getBotSettings($template, $string) {
        return $this->instance->request("settings/bot/get/" . $template . "/" . $string);
    }

    /**
     * @param $template
     * @param $string
     * @param $value
     * @return mixed
     */
    public function setBotSettings($template, $string, $value) {
        return $this->instance->request("settings/bot/set/" . $template . "/" . $string . "/" . $value);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getGlobalSettings($value) {
        return $this->instance->rawRequest("settings/global/get/" . $value);
    }

    /**
     * @param $string
     * @param $value
     * @return mixed
     */
    public function setGlobalSettings($string, $value) {
        return $this->instance->rawRequest("settings/global/set/" . $string . "/" . $value);
    }

    /**
     * @return History
     */
    public function history() {
        return new History($this->instance);
    }

    /**
     * @return Playlist
     */
    public function playlist() {
        return new Playlist($this->instance);
    }

    /**
     * @return User
     */
    public function user() {
        return new User($this->instance);
    }

}