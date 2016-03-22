<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=deneme', 'root', '');    
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>