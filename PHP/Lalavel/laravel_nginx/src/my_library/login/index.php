<?php
require_once __DIR__ . "/constants.php";

session_start();
$_SESSION = [];
session_destroy();