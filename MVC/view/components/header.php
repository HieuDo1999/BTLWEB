<?php if(!isset($_SESSION['ss_user_token'])) die ("not found file"); ?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php   

                $user=isset($_SESSION['ss_user_token'])?$_SESSION['ss_user_token']:'';
                if($user!=''){
                if($user['username']!=''){
                    echo $data['username']; 
                    print_r($data);

        ?>
         <a href="http://localhost/WEB/?c=AccountController&m=logout" > logout</a>
                <?php
                }else {
                    echo "da logout";
                } 
            }?>
    </body>
</html>