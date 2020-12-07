<?php if(!isset($_SESSION['ss_user_token'])) die ("not found file"); ?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php   
                // $islog=false;
                $user=isset($_SESSION['ss_user_token'])?$_SESSION['ss_user_token']:'';
                if($user!=''){
                if($user['username']!=''){
                    // $islog=true;
                    echo "Hello"." " .$user['username']; 
                  

        ?>
         <a href="http://localhost/WEB/?c=AccountController&m=logout" > logout</a>
         <a href="http://localhost/WEB/?c=AdminController&m=viewHomeAdmin">home</a>
                <?php
                }else {
                    echo "da logout";
                } 
            }else { ?>
                <a href="http://localhost/WEB/?c=AccountController&m=loginCustomer" > login</a>
             <?php } ?>
            
            
            
    </body>
</html>