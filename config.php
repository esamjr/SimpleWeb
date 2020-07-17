<?php

$mysqli = new mysqli('localhost', 'root', '', 'simple');

if( $mysqli->connect_error) {
    die("Could do not connect ot database". $mysqli->connect_error);
} 