<?php
    


// collect data  
    $php_first_name = $_POST['html_first_name'];
    $php_referrer = $_SERVER['HTTP_REFERER'];
    
// prove it
  echo 
    "<script> 
        alert('Thanks, $php_first_name!  We will be in touch soon.');
        location.href = '$php_referrer';
    </script>";

?>
