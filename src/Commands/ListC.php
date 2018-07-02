<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 02.07.18
 * Time: 18:38
 */

namespace TS3AB\Commands;

use TS3AB\Ts3AudioBot;


/**
 * Class ListC
 * @package TS3AB\Commands
 */
class ListC {

    private $instance;

    /**
     * ListC constructor.
     * @param Ts3AudioBot $instance
     */
    public function __construct(Ts3AudioBot $instance) {
        $this->instance = $instance;
    }

    /**
     * @param $link
     * @return mixed
     */
    public function add($link) {
        return $this->instance->request("list/add/" . $link);
    }

    /**
     * @return mixed
     */
    public function clear() {
        return $this->instance->request("list/clear");
    }

    /**
     * @return mixed
     */
    public function delete() {
        return $this->instance->request("list/delete");
    }

    /**
     * @return mixed
     */
    public function get() {
        return $this->instance->request("list/get");
    }

    /**
     * @return mixed
     */
    public function itemMove() {
        return $this->instance->request("list/item/move");
    }

    /**
     * @return mixed
     */
    public function itemDelete() {
        return $this->instance->request("list/item/delete");
    }

    /**
     * @return mixed
     */
    public function list() {
        return $this->instance->request("list/list");
    }

    /**
     * @return mixed
     */
    public function load() {
        return $this->instance->request("list/load");
    }

    /**
     * @return mixed
     */
    public function merge() {
        return $this->instance->request("list/merge");
    }

    /**
     * @return mixed
     */
    public function name() {
        return $this->instance->request("list/name");
    }

    /**
     * @return mixed
     */
    public function play() {
        return $this->instance->request("list/play");
    }

    /**
     * @param $index
     * @return mixed
     */
    public function playFrom($index) {
        return $this->instance->request("list/play/" . $index);
    }

    /**
     * @return mixed
     */
    public function queue() {
        return $this->instance->request("list/queue");
    }

    /**
     * @return mixed
     */
    public function save() {
        return $this->instance->request("list/save");
    }

    /**
     * @return mixed
     */
    public function show() {
        return $this->instance->request("list/show");
    }

    /**
     * @return mixed
     */
    public function loop() {
        return $this->instance->request("list/loop");
    }

    /**
     * @return mixed
     */
    public function loopOn() {
        return $this->instance->request("list/loop/on");
    }

    /**
     * @return mixed
     */
    public function loopOff() {
        return $this->instance->request("list/loop/off");
    }

    /**
     * @return mixed
     */
    public function next() {
        return $this->instance->request("next");
    }

    /**
     * @return mixed
     */
    public function random() {
        return $this->instance->request("random");
    }

    /**
     * @return mixed
     */
    public function randomOn() {
        return $this->instance->request("random/on");
    }

    /**
     * @return mixed
     */
    public function randomOff() {
        return $this->instance->request("random/off");
    }

}