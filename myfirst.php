<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title> Using POHP Vaiables, arrays and operators</title>
        <meta name="description" content="Introduction to PHP elements">
        <meta name="keywords" content="HTML, PHP, Array, Variables, operators">
        <meta name="author" content="Nathan Nguyen">
</head>
<body?>
    <h1>PHP Variables, arrays and operators </h1>

<?php 
    $days = array(Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday)

    echo ("<p/> The days of the week in English are: $days. </p>")
<?php
    $marks = array (85, 85, 95);
    $marks[1] = 90;
    $ave = ($marks[0] + $marks[1] +$marks[2])/3;
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average score is $ave. You $status.</p>";
?>
</body>
</html>