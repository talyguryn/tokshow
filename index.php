<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo var_dump($_POST);

} else {

    require 'views/main.php';

}
