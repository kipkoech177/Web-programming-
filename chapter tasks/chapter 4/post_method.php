<?php
    $gr_no = $_POST['gr_no'];
    $course_name = $_POST['course_name'];

    echo "<h2>Details Submitted (POST Method):</h2>";
    echo "G.R No: " . htmlspecialchars($gr_no) . "<br>";
    echo "Course Name: " . htmlspecialchars($course_name) . "<br>";
?>
