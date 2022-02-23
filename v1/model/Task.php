<?php

  class TaskException extends Exception { }

  class Task {

    private $_id;
    private $_title;
    private $_description;
    private $_deadline;
    private $_completed;

    public function getId() {
      return $this->_id;
    }

    public function getTitle() {
      return $this->_title;
    }

    public function getDescription() {
      return $this->_description;
    }

    public funtion getDeadline() {
      return $this->_deadline;
    }

    public function getCompleted() {
      return $this->_completed;
    }

    public function setId($id) {
      if(($id !== null) && (!is_numeric($id)) || $id<=0 || $id > 9223372036854775807 || $this->id !== null ) {
        throw new TaskException("Task Id Error");
      }
      $this->_id = $id;
    }

  }


?>
