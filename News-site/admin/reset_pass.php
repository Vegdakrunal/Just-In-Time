<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Reset password</title>
</head>
<body>
    <?php 
        include 'config.php';
        if(isset($_GET['username']) && isset($_GET['reset_token'])){
            date_default_timezone_set('Asia/kolkata');
            $date = date('Y-m-d');
            $query = "SELECT * from user where username='$_GET[username]' and resettoken='$_GET[reset_token]' and resettokenexpired= '$date'";
            $result = mysqli_query($conn, $query);
            if($result){
                if(mysqli_num_rows($result)==1){
                  echo "<style>
                            form{
                                align-items:center;
                                text-align:center;
                                font-style:vardana,italic;
                            }
                                input {
                                width: 17%;
                                padding: 10px;
                                margin-bottom: 15px;
                                border: 1px solid #ddd;
                                border-radius: 5px;
                            }
                        </style>
                        <form method='post' action=''><br><br>
                        <h3>Create New Password</h3><br>
                            <input type='password' name='password' placeholder='Enter new password' required><br><br>
                            <input type='password' name='confirm_password' placeholder='Confirm new password' required><br><br>
                            <button type='submit' name='reset_password'>Reset Password</button>
                            <input type='hidden' name='email' value='".$_GET['username']."'>
                         <br><br>
                      </form>";
                }
                else{
                    echo "<script>alert('Invalide or Expired link......!');</script>";
                }
            }
            else{
                echo "<script>alert('Server Down ! try again leter....');</script>";
            }
        }
    ?>

    <?php 
        if(isset($_POST['reset_password'])){
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            if($password==$confirm_password)
            {
                $sql ="UPDATE user SET password = '$password', resettoken = NULL, resettokenexpired = NULL WHERE username = '$_POST[email]'";
                if(mysqli_query($conn, $sql)){
                    echo "<script>alert('Password Updated Successfully..');</script>";
                    header('location:index.php');
                }
                else{
                    echo "<script>alert('Password does not updated');</script>";
                }
            }
            else{
                echo "<script>alert('Password does not match');</script>";
            }
           
        }
    ?>
</body>
</html>