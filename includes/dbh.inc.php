<?php

try {
    //pdo object for db conn
    $pdo = new PDO("mysql:host=localhost;dbname=phplessons", "root", "");

    //allowing pdo to disp
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Database Connection Error:".$e->getMessage();
}

