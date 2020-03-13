# Polymorphism

Activity - wk2dy3

Implement class Polymorphism that blueprints and share its class properties and methods:

#### Interface

    interface IPhpClass{
        public function startDate();
        public function getDate();
        public function classBatch();
        public function getClassBatch();
        public function setStudentName($name,$last);
        public function getStudentName();
    }

    class Mentor implements IPhpClass {
        // Your methods
    }
    
    $mentor = new Mentor("Jino Lacson");

#### Abstract

    abstract class APhpClass {
        // Define your own methods here
    }

    class Mentor extends APhpClass {
        // class methods
    }

    $mentor = new Mentor("Jino Lacson");

Finished : Submit a link of the source code to the Google Classroom assignment related to this project.
