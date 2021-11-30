<?php

try {
    $db = new PDO('mysql:dbname=verifarma;charset=UTF8', 'root', '');
} catch (PDOException $e) {
    echo "todo mal";
}
