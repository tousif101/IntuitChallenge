<?php
/**
 * Created by PhpStorm.
 * User: Winston
 * Date: 9/19/2015
 * Time: 5:10 AM
 */

$link = mysqli_connect("wkcrpi.student.rit.edu", "root", "Cakeisg00d", "intuit");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
