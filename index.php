<?php
    require('./includes/abstract.php');
    require('./includes/interface.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>
</head>
<body>
    <?php
    echo "---------------start of interface-------------------";
    echo "<br />"; echo "<br />";
        $mentor = new Mentor('Jino Lacson');
            $mentor->startDate('Mar. 3, 2020');
            $mentor->classBatch('PHP');
            $mentor->setStudentName('Rap', 'Raquion');
            echo $mentor->getStudentName();
            echo $mentor->getClassBatch();
            echo $mentor->getMentor();
            echo $mentor->getDate();
    echo "--------------start of abstract---------------------";
    echo "<br />"; echo "<br />";
        $mentors = new Mentors('Jino Lacson');
            $mentors->startDate('Mar. 3, 2020');
            $mentors->classBatch('PHP');
            $mentors->Mentors('Jino Lacson');
            $mentors->setStudentName('Rap', 'Raquion');
            echo $mentors->name();
            echo $mentors->batch();
            echo $mentors->ment();
            echo $mentors->date();
    ?>
</body>
</html>