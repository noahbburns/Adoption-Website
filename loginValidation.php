
<?php
session_start();

    if(isset($_POST['submit'])) {
        $_SESSION['taken'] = false;
         $username = $_POST['username'];
         $password = $_POST['password'];
         $file = fopen("login.txt", "a+");

         $flag = false;
         if($file) {
            while(($line = fgets($file)) !== false) {
                $user = explode(':', $line);
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
                header("Location: pet-giveaway.php");
                exit;
            } else {
                $_SESSION['logged_in'] = false;
                header("Location: login.php");
                fclose($file);
                exit;
            } 
        } 
        else {
            echo "cannot open the file";
        }
    }
?>
