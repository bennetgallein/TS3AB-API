<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 30.06.18
 * Time: 17:16
 */

namespace TS3AB\Commands;


use TS3AB\Ts3AudioBot;

class History {

    private $instance;

    public function __construct(Ts3AudioBot $instance) {
        $this->instance = $instance;
    }

    public function add() {
        return $this->instance->request("history/add");
    }

    public function clean() {
        return $this->instance->request("history/clean");
    }

    public function cleanRemovedefective() {
        return $this->instance->request("history/clean/removedefective");
    }

    public function delete() {
        return $this->instance->request("history/delete");
    }

    public function historyFrom() {
        return $this->instance->request("history/from");
    }

    public function historyID() {
        return $this->instance->request("history/id");
    }

    public function last() {
        return $this->instance->request("history/last");
    }

    public function getLast(int $count) {
        return $this->instance->request("history/last/" . $count);
    }

    public function play(int $id) {
        return $this->instance->request("history/play/" . $id);
    }

    public function rename(int $id, string $name) {
        return $this->instance->request("history/rename/" . $id . "/" . $name);
    }
    public function till(string $date) {
        return $this->instance->request("history/till/" . $date);
    }
    public function filterTitle(string $filter) {
        return $this->instance->request("history/title/" . $filter);
    }
}