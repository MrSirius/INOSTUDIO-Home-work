<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашка 1</title>
</head>
<body>
<h1>Ильин Н. И.</h1>
<?php
$main_array = array(1,2,3,4,5,6,7,8,9);
$nechetInd = '';
$nechet = '';
$chetInd = '';
$chet = '';

foreach ($main_array as $key => $value) {
    if ($key % 2 == 0) {
        $chetInd .= '<td><b>' . $key . '</b></td>';
        $chet .= '<td>' . $value . '</td>';
    } else {
        $nechetInd .= '<td><b>' . $key . '</b></td>';
        $nechet .= '<td>' . $value . '</td>';
    }
}
echo '<table border="1">' . "<tr>" . $chetInd . "</tr><tr>" . "<tr>" . $chet . "</tr><tr>"
    . $nechetInd . "</tr>" . "</tr><tr>" . $nechet . "</tr>" . "</table>\n";
?>

</body>
</html>