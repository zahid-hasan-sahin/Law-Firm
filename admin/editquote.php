<?php
include_once '../dbconnection.php';
session_start();

$quote = $_GET['quote'];

echo $quote;