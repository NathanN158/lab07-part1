<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Using PHP Variables, Arrays and Operators</title>
    <meta name="description" content="Introduction to PHP elements">
    <meta name="keywords" content="HTML, PHP, Array, Variables, operators">
    <meta name="author" content="Nathan Nguyen">
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php 
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

        echo "<p>The days of the week in English are:<br>";
        echo implode(", ", $days);
        echo "</p>";

        $days[0] = "Dimanche";

        echo "<p>The days of the week in French (just the first day changed) are:<br>";
        echo implode(", ", $days);
        echo "</p>";
    ?>
</body>
</html>