<?php
/*
 * Author: James Lewis
 * Date: 02/24/2017
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Drawing a Pattern with Nested Loops</title>

</head>
<body class="center">

<!--Header-->
<h2>Drawing a Pattern with Nested Loops</h2>
<!-- paragraph under the header  -->
<p>Click the button below to redraw the pattern:</p>

<!--refreshes the page-->
<input type="submit" value="Refresh" onclick="window.location.reload()"/>
<!--line breaks-->
</br>
</br>

<?php
//rand(min,max) represents minimum and maximum
$myRow = rand(1, 20);
$myCount = 0;
//This should loop through to increase columns

while ($myCount < $myRow) {
    echo "<span style='color:white'>";

    for ($i = 0; $i < $myCount; $i++) {
        echo "*";
    }
    echo "</span>";
//This should loop through to increase columns
    for ($i = 0; $i < $myRow - $myCount; $i++) {
        echo "*";
    }
    //count continues
    $myCount++;
    echo "</br>";
}

// end of php code
?>

</body>
</html>

