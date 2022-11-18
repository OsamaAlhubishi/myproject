<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'p1');

if(!$conn){
    echo 'Error: ' .mysqli_connect_error();
}
