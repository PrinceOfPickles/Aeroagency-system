<?php
        session_start();
        include "db_con_config.php";
        
          function dataSanitizing($data)
          {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          $email = dataSanitizing($_POST['E_mail_input']);
          $password = dataSanitizing($_POST['password_input']);

          if(empty($email))
          {
              header("Invalid or missing e-mail");
              exit();
          }
          else if (empty($password))
          {
              header("Invalid or missing password");
              exit();
          }
          else
          {
              $hashedpassword = hash('sha256', $password);

              $sqlLogin = "SELECT * FROM users WHERE E_mail='$email' AND Pass='$hashedpassword'";
              $result = mysqli_query($con, $sqlLogin);
              if(mysqli_num_rows($result) === 1)
              {
                $row = mysqli_fetch_assoc($result);

                if($row['E_mail'] === $email && $row['Pass'] === $hashedpassword)
                {
                  echo "Successfully logged in!";
                  header("Location: index.php?SUCESSFUL_LOGIN");
                }
                else
                {
                  header("Location: index.php?error=Incorrect e-mail or password");
                }
              }
              else
              {
                header("Location: index.php?error=Incorrect e-mail or password");
              }
          }
   ?>