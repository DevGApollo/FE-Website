<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
//include 'db.php';
$fname = htmlspecialchars(stripslashes(trim($_POST['name'])));
$cname = htmlspecialchars(stripslashes(trim($_POST['cname'])));
$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
$phone = htmlspecialchars(stripslashes(trim($_POST['number'])));
$country = htmlspecialchars(stripslashes(trim($_POST['country'])));
$code = htmlspecialchars(stripslashes(trim($_POST['code'])));
$department = htmlspecialchars(stripslashes(trim($_POST['department'])));
$date_time = date("Y-m-d h:i:s");
$mobile_number = $code . '-' . $phone;

require_once '/var/www/html/vendor/autoload.php';

if (isset($fname) && trim($fname) !== '' && isset($email) && trim($email) !== '' && isset($message) && trim($message) !== '' && isset($phone) && trim($phone) !== '' && isset($country) && trim($country) !== '') {

    if ($_SESSION["code"] == $_POST['captcha']) {


        preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);

        preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);


        if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0) {

            //echo "ERROR junk msg";
            header('location:contact-us.php');

        } else {


            require_once("phpmailer/class.phpmailer.php");

            //echo $fname;exit;

            $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  <style type="text/css">span.go{display:none} .go{display:none}</style>
  </head>
  <body>
    <div style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;background:#ffffff;border:10px solid #cccccc;width:600px;padding:20px;margin: 0px auto;">
    <table border="1" cellpadding="5" style="width:500px;font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-collapse:collapse;border:1px solid #cccccc;border-color:#cccccc">
      <tbody>
        <tr>
          <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Enquiry Details</b></td>
        </tr>
        
        <tr>
          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Department:</td>
          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $department . '</b></td>
        </tr>

        <tr>
          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $fname . '</b></td>
        </tr>

        <tr>
          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Company Name:</td>
          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $cname . '</b></td>
        </tr>
       
        <tr>
          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $email . '</b></td>
        </tr>
       
        <tr>
          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b> ' . $code . '-' . $phone . '</b></td>
        </tr>
        
        <tr>
          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Country:</td>
          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $country . '</b></td>
        </tr>
        <tr>
          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Message:</td>
          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $message . '</b></td>
        </tr>
        <tr>
        </tr>
      </tbody>
    </table>
  </div>
  </body>
</html>
';

            //$regg="Name:".$name." \n \n phone:".$phone. "\n \n Address:".$address."\n \n Comment: ".$comment."\n \n Email: ".$email."";

//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded


//$sql = "INSERT INTO quick_inquiry (name, email, country, mobile, message, cname, dept, date_time, status, created, updated) VALUES ('".$fname."', '".$email."', '".$country."', '".$mobile_number."', '".$message."', '".$cname."', '".$department."', '".$date_time."', 'Active', '".$date_time."', '".$date_time."')";

            if (1) {


                $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

                $mail->IsSMTP(); // telling the class to use SMTP

                try {
//                    $mail->Host = "in-v3.mailjet.com"; // SMTP server
//                    $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
//                    $mail->AddAddress('info@apollo.co.in', 'New Enquiry From Gujarat Apollo Corporate Website');
//                    $mail->SetFrom('support@apollo.co.in', 'New Enquiry From Gujarat Apollo Corporate Website');
//                    $mail->AddCC('arjun_patel@gapollo.net', 'New Enquiry From Gujarat Apollo Corporate Website');
//                    $mail->AddBCC('dcbrainsinquiry@gmail.com', 'New Enquiry From Gujarat Apollo Corporate Website');
//
//
//                    $mail->Subject = 'New Enquiry From Gujarat Apollo Corporate Website';
//                    $mail->SMTPAuth = true;
//                    $mail->Username = "4b966b3cfa2b56e1c970a218ab233f7d";
//                    $mail->Password = "a9f54409f44d3e04eeea594f219dfd2a";
//                    $mail->MsgHTML($message_body);
//                    // $mail->AddAttachment('images/phpmailer.gif');      // attachment
//                    // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
//                    $mail->Send();

                    $resend = Resend::client('re_awQ3YTAE_8sZwNMMVR4YzwTbd5FUr1fvS');

                    $resend->batch->send([[
                        'from' => 'support@apollo.co.in',
                        'to' => 'it_dev@gapollo.net',
                        'subject' => 'New Enquiry From Gujarat Apollo Corporate Website',
                        'html' => $message_body
                    ],[
                        'from' => 'support@apollo.co.in',
                        'to' => 'info@apollo.co.in',
                        'subject' => 'New Enquiry From Gujarat Apollo Corporate Website',
                        'html' => $message_body
                    ],[
                        'from' => 'support@apollo.co.in',
                        'to' => 'arjun_patel@gapollo.net',
                        'subject' => 'New Enquiry From Gujarat Apollo Corporate Website',
                        'html' => $message_body
                    ],[
                        'from' => 'support@apollo.co.in',
                        'to' => 'dcbrainsinquiry@gmail.com',
                        'subject' => 'New Enquiry From Gujarat Apollo Corporate Website',
                        'html' => $message_body
                    ]]);


                    ?>

                    <?php


                    header('location:thankyou.php');
                    //echo "Message Sent OK<p></p>\n";
                } catch (phpmailerException $e) {
                    echo $e->errorMessage(); //Pretty error messages from PHPMailer
                } catch (Exception $e) {
                    echo $e->getMessage(); //Boring error messages from anything else!
                }

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }


        }


    } else { ?>
        <script>
          if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {
            window.location.href = "contact-us.php";
          } else {
            window.location.href = "contact-us.php";
          }
        </script>
        <?php
    }
} else { ?>
    <script>
      if (confirm("Please Enter All Details Correct..")) {
        window.location.href = "contact-us.php";
      } else {
        window.location.href = "contact-us.php";
      }
    </script>

    <?php
}
?>


?>
