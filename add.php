<?php
/**
 * Created by PhpStorm.
 * User: Winston
 * Date: 9/19/2015
 * Time: 5:16 AM
 */

$link = mysqli_connect("wkcrpi.student.rit.edu", "root", "Cakeisg00d", "intuit");

$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$marital = mysqli_real_escape_string($link, $_POST['marital']);
$homeowner = mysqli_real_escape_string($link, $_POST['homeowner']);
$childstatus = mysqli_real_escape_string($link, $_POST['childstatus']);
$email = mysqli_real_escape_string($link, $_POST['email']);

$sql = "INSERT INTO users (lastname, firstname, address, marital, homeowner, childstatus, email)
VALUES ($lastname, $firstname, $address, $marital, $homeowner, $childstatus, $email)";

if ($link->query($sql) == TRUE) {
    echo "Successful";
} else {
    echo "Failed";
}

$link->close();

