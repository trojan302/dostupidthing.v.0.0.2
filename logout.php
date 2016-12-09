<?php
include 'config/function.php';

session_start();
session_destroy();

redirect(0, "login.php");