<?php
    ob_start();
    session_start();
     if (isset($_POST["Login"]) && !empty($_POST["Username"]) && !empty($_POST["Password"])){
          $userfile = fopen("txt/credentials.txt", "r");
            while(($line=fgets($userfile))!==false){
                    $line = rtrim($line,"\r\n");
                    $user = explode(",", $line);
                    if ($_POST["Username"]==$user[0]  && $_POST["Password"]==$user[1]){
                        $_SESSION["user"] = $_POST["Username"];
                        fclose($userfile);
                        // header("location: ./temp.html");

                        header("location: secure.php");
                        exit;
                    }
                }
                fclose($userfile);
                header("location: warning.html");
     }
    else
    {
        header("location: index.php");
    }
?>