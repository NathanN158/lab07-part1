<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title> Using POHP Vaiables, arrays and operators</title>
        <meta name="description" content="Introduction to PHP elements">
        <meta name="keywords" content="HTML, PHP, Array, Variables, operators">
        <meta name="author" content="Nathan Nguyen">
</head>
<body>
    <h1>PHP Variables, arrays and operators </h1>

<?php 
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p> The days of the week in English are: $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6] </p>";
    $days[0]= Dimanche, Lundi, Mardi, Mecredi, Jeudi, Vendredi, Samedi;
    echo "<p> The days of the week in French are: $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6] </p>";
?>
</body>
</html>