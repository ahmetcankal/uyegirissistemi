<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$vkadi=$_POST['kadi'];
$vparola=$_POST['parola'];


include_once 'baglanti.php';

$sorgu = "SELECT count(*) as varmi FROM kullanicilar where kulad='".$vkadi."' and parola='".$vparola."'";

$gelen = $db->query($sorgu);
$sonuc = $gelen->fetch(PDO::FETCH_ASSOC);

  
        print $sonuc["varmi"] ;
        
        if ($sonuc["varmi"]>0)
        {
           session_start();
            ob_start();

  $_SESSION['kvarmi'] = true; 
  $_SESSION['kulad'] = $vkadi; 
  $_SESSION['parola'] = $vparola; 

header("Location:admin.php"); //
            
            
        }
        
        
  
    
    $db=null;
    




?>
