<?php
/**
 * Created by PhpStorm.
 * User: Winston
 * Date: 9/19/2015
 * Time: 7:00 AM
 */

$link = mysqli_connect("wkcrpi.student.rit.edu", "root", "Cakeisg00d", "intuit");

$query = $link->query("SELECT * FROM `users` WHERE `id` = '1'");
$url = 'sendemail.php';
$name = $query->fetch_object()->firstname . $query->fetch_object()->lastname;
// what post fields?
$fields = array(
    'name' => $name,
    'email' => $query->fetch_object()->email,
    'subject' => 'Taxes made Intuitive',
    'message' => "Hello $name we have noticed that you are recently _____ and we would like to congratulate you! We would like
to help you make taxes be intuitive and help you understand the tax implications of this new step in your life
Our website is designed to help people like you who have recently ___ to understand how to deal with and understand
the tax implications. For ___ our website is here: "
);

// build the urlencoded data
$postvars = http_build_query($fields);

// open connection
$ch = curl_init();

// set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

// execute post
$result = curl_exec($ch);

// close connection
curl_close($ch);
