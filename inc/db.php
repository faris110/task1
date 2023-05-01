<?php

$con = mysqli_connect('localhost' , 'root' , '' , 'project');

if(!$con){
    echo mysqli_connect_errno();
}

