<?php

    $connect = mysqli_connect('localhost', 'root', '', 'tcgreen');

    if (!$connect) {
        die('Error connect to DataBase');
    }