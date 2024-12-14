<?php
require 'constants.php';

session_destroy();
header('location: ' . ROOT_URL);
die();
