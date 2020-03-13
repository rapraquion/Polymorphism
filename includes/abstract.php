<?php

abstract class APhpClass {    
    public function __construct($mentor) {
        $this->mentor = $mentor;
    }

    public function startDate($date) {
        $this->date = $date;
    }

    public function getDate() {
        echo "<br />";
        echo "Started date: $this->date";
        echo "<br />";
    }

    public function classBatch($batch) {
        $this->batch = $batch;
    }

    public function getClassBatch() {
        echo "Course: $this->batch";
        echo "<br />";
    }

    public function setStudentName($name, $last) {
        $this->name = $name;
        $this->last = $last;
    }

    public function getStudentName() {
        echo "Hello Student, $this->name $this->last";
        echo "<br />";
    }

    abstract function date();
    abstract function batch();
    abstract function name();
    abstract function mentor();
}

class Mentors extends APhpClass {
    protected $name;
    protected $last;
    protected $batch;
    protected $mentor;

    public function mentor() {
        return $this->__construct();
    }

    public function date() {
        return $this->getDate();
    }

    public function batch() {
        return $this->getClassBatch();
    }

    public function name() {
        return $this->getStudentName();
    }
}