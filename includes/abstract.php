<?php

abstract class APhpClass {
    public function Mentors($ment) {
        $this->ment = $ment;
    }

    public function getMentors() {
        echo "Mentor: $this->ment";
        echo "<br />";
    }

    public function startDate($date) {
        $this->date = $date;
    }

    public function getDate() {
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
    abstract function ment();
}

class Mentors extends APhpClass {
    protected $name;
    protected $last;
    protected $batch;
    protected $ment;

    public function date() {
        return $this->getDate();
    }

    public function batch() {
        return $this->getClassBatch();
    }

    public function name() {
        return $this->getStudentName();
    }

    public function ment() {
        return $this->getMentors();
    }
}