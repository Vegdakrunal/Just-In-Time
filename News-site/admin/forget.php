<?php 
include 'config.php';
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forget Password</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="icon" href="images/logo_f.png" type="image/x-icon">
  <!-- <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css"> -->
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div id="wrapper-admin" class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-4 col-md-4">
          <!-- <img class="logo" src="images/news.jpg"> -->
          <img class="log" src="images/logo_f.png"><br>
          <h3 class="heading">Forget Password</h3><br>
          <form action="" method="POST"> 
            <div class="form-group">
              <label>Username</label>
              <input type="email" name="username" class="form-control" placeholder="Email Address" required>
            </div>
            <input type="submit" name="sendlink" class="btn btn-primary" value="send_link"/>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
include 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendMail($email, $reset_token)
{
  require_once('PHPMailer/PHPMailer.php');
  require_once('PHPMailer/SMTP.php');
  require_once('PHPMailer/Exception.php');
  $mail = new PHPMailer(true);
  try {
    //Server settings
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'vegdakrunal21@gmail.com';            //SMTP username 
    $mail->Password   = 'vnsu tsmn faol uelc';                //SMTP password 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption 
    $mail->Port       = 465;      //465                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    // password- cgko eyjn sxem gxks

    //Recipients
    $mail->setFrom('vegdakrunal21@gmail.com', 'News Site');
    $mail->addAddress($email);                                //Add a recipient

    //Content
    $mail->isHTML(true);                                      //Set email format to HTML
    $mail->Subject = 'Password reset link from News Site';
    $body = "We received a request from you to reset your password !<br>
                Click the link below to reset your password:<br>
                <a href='http://localhost/news-site/admin/reset_pass.php?username=$email&reset_token=$reset_token'>Reset Password</a>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->MsgHTML($body);
    $mail->isHTML(true);
    $mail->send();
    return true;
  } catch (Exception $e) {
    echo'<pre>';print_r($e->getMessage());exit();
    return false;
  }
}

if (isset($_POST['sendlink'])) {
  $sql = "SELECT * FROM user where username= '$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    if (mysqli_num_rows($result) == 1) {
      $reset_token = bin2hex(random_bytes(16));   //generate random unique token 
      date_default_timezone_set('Asia/kolkata');
      $date = date('Y-m-d');
      $query = "UPDATE `user` SET `resettoken`='$reset_token',`resettokenexpired`='$date' WHERE `username`='$_POST[username]'";
      //print_r($query);
      if(mysqli_query($conn, $query) && sendMail($_POST['username'], $reset_token)){ 
        echo "<script>alert('Password reset link send to mail....!');</script>";
      } 
      else {
        echo "<script>alert('Server Down ! try again leter....');</script>";
      }
    } else {
      echo "<script>alert('Email does not found.....!');</script>";
    }
  } else {
    echo "<script>alert('Technical issue.....Informed soon');</script>";
  }
} //mi81w 120wbc
?>