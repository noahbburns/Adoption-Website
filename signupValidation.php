
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
                if($user[0] == $username) {
                    $flag = true;
                    break;
                }
            }
            if ($flag) {
                $_SESSION['taken'] = true;
                header("Location: signup.php");
                exit;
            } else {
                $_SESSION['taken'] = false;
                fwrite($file, $username . ":" . $password ."\n");
                fclose($file);
                header("Location: login.php");
                exit;
            }
            
        } 
    }
?>
