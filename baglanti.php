<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user='root';
$pass='';

        



try {
    $db = new PDO('mysql:host=localhost;dbname=eticaret', $user, $pass);
       
}
    catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}





?>

