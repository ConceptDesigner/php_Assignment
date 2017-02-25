<?php
/*
 * Author: James Lewis
 * Date: 02/14/2017
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Statistical analysis of results from rolling a six‐sided die</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="center">

<!--header for stat analysis-->
<h2>Statistical analysis of results from rolling a six‐sided die</h2>
<!--starts frequency from 0-->
<?php
$frequency1 = 0;
$frequency2 = 0;
$frequency3 = 0;
$frequency4 = 0;
$frequency5 = 0;
$frequency6 = 0;

//for loop for rolling die for each frequency

for ($myRoll = 0; $myRoll < 5000; $myRoll++) {
    $face = rand(1, 6);

    if ($face == 1) {
        ++$frequency1;
    }

    if ($face == 2) {
        ++$frequency2;
    }

    if ($face == 3) {
        ++$frequency3;
    }

    if ($face == 4) {
        ++$frequency4;
    }

    if ($face == 5) {
        ++$frequency5;
    }
    if ($face == 6) {
        ++$frequency6;
    }

}

?>

<!--create echo for for each frequency in a table-->
<table width='600' border='1' cellspacing='0' cellpadding='5' align='center'>
    <tr>
        <th>Face of the dice currently facing up</th>
        <th>The Frequency that number has been rolled</th>

    </tr>
    <tr>
        <td>Die Face 1</td>
        <td><?php echo $frequency1; ?></td>
    </tr>
    <tr>
        <td>Die Face 2</td>
        <td><?php echo $frequency2; ?></td>
    </tr>
    <tr>
        <td>Die Face 3</td>
        <td><?php echo $frequency3; ?></td>
    </tr>
    <tr>
        <td>Die Face 4</td>
        <td><?php echo $frequency4; ?></td>
    </tr>
    <tr>
        <td>Die Face 5</td>
        <td><?php echo $frequency5; ?></td>
    </tr>
    <tr>
        <td>Die Face 6</td>
        <td><?php echo $frequency6; ?></td>
    </tr>
</table>
<br>
<!--refreshes frequency-->
<input type="submit" value="Refresh" onclick="window.location.reload()"/>

</body>
</html>

