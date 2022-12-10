<?php 

session_start(); 

include "DBConnection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate(trim($_POST['uname']));

    $pass = validate(trim($_POST['password']));

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }
else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }
else{

        $sql = "SELECT * FROM login_Cred WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

        	if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['login_id'] = $row['login_id'];
                    if($row['username'] === $uname && $uname = 'manager')
                        header("Location: catalog.php");
                        exit();
                header("Location: home.php");

                exit();

            }
else{
	
	header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}

?>
