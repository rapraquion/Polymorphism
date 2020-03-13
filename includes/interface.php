<?php 

interface IPhpClass{
    public function startDate($date);
    public function getDate();
    public function classBatch($batch);
    public function getClassBatch();
    public function setStudentName($name,$last);
    public function getStudentName();
}

class Mentor implements IPhpClass {

    protected $name;
    protected $last;
    protected $batch;
    public $mentor;

    public function __construct($ment) {
        $this->mentor = $ment;
    }

    public function startDate($date) {
        $this->date = $date;
    }

    public function getDate() {
        echo "<br />";
        echo "Started date: $this->date";
        echo "<br />";
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
}