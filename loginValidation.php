
<?php
session_start();
echo"test";
    if(isset($_POST['submit'])) {
        $_SESSION['taken'] = false;
         $username = $_POST['username'];
         $password = $_POST['password'];
         $file = fopen("login.txt", "r");

         $flag = false;
         if($file) {
            while(($line = fgets($file)) !== false) {
                $user = explode(':', rtrim($line));
                if($user[0] == $username & $user[1] == $password) {
                    $flag = true;
                    break;
                }
                else {
                    $flag = false;
                }
            }
            if ($flag) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user'] = $username;
                $_SESSION['invalid'] = true;

            } else {
                $_SESSION['logged_in'] = false;

            } 
        } 
        else {
            echo "cannot open the file";
        }
    }
?>
