<?php 
    $student_name = $_POST['student_name'];
    $student_gr_no = $_POST['student_gr_no'];
    $class = $_POST['class'];
    $section = $_POST['section'];

    echo "<h2> Student Details:</h2>";
    echo "Student name ".$student_name."<br>";
    echo "Student G.R # ".$student_gr_no."<br>";
    echo "Class: ".$class."<br>";
    echo "Section: ".$section."<br>";
?>