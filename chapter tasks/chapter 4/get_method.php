<?php
    $gr_no = $_GET['gr_no'];
    $course_name = $_GET['course_name'];

    echo "<h2>Details Submitted (GET Method):</h2>";
    echo "G.R No: " . htmlspecialchars($gr_no) . "<br>";
    echo "Course Name: " . htmlspecialchars($course_name) . "<br>";
?>
