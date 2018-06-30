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

    /**
     * History constructor.
     * @param Ts3AudioBot $instance
     */
    public function __construct(Ts3AudioBot $instance) {
        $this->instance = $instance;
    }

    /**
     * @return mixed
     */
    public function add() {
        return $this->instance->request("history/add");
    }

    /**
     * @return mixed
     */
    public function clean() {
        return $this->instance->request("history/clean");
    }

    /**
     * @return mixed
     */
    public function cleanRemovedefective() {
        return $this->instance->request("history/clean/removedefective");
    }

    /**
     * @return mixed
     */
    public function delete() {
        return $this->instance->request("history/delete");
    }

    /**
     * @return mixed
     */
    public function historyFrom() {
        return $this->instance->request("history/from");
    }

    /**
     * @return mixed
     */
    public function historyID() {
        return $this->instance->request("history/id");
    }

    /**
     * @return mixed
     */
    public function last() {
        return $this->instance->request("history/last");
    }

    /**
     * @param int $count
     * @return mixed
     */
    public function getLast(int $count) {
        return $this->instance->request("history/last/" . $count);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function play(int $id) {
        return $this->instance->request("history/play/" . $id);
    }

    /**
     * @param int $id
     * @param string $name
     * @return mixed
     */
    public function rename(int $id, string $name) {
        return $this->instance->request("history/rename/" . $id . "/" . $name);
    }

    /**
     * @param string $date
     * @return mixed
     */
    public function till(string $date) {
        return $this->instance->request("history/till/" . $date);
    }

    /**
     * @param string $filter
     * @return mixed
     */
    public function filterTitle(string $filter) {
        return $this->instance->request("history/title/" . $filter);
    }
}