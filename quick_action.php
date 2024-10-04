<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

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

require 'PHPMailer/PHPMailerAutoload.php';

if (isset($fname) && trim($fname) !== '' && isset($email) && trim($email) !== '' && isset($message) && trim($message) !== '' && isset($phone) && trim($phone) !== '' && isset($country) && trim($country) !== '') {

    if ($_SESSION["code"] == $_POST['captcha']) {

        preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);
        preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);

        if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0) {
            header('location:contact-us.php');
        } else {
            $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
            <html>
              <head>
              <meta http-equiv="content-type" content="text/html; charset=windows-1250">
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
                      <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $mobile_number . '</b></td>
                    </tr>
                    <tr>
                      <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Country:</td>
                      <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $country . '</b></td>
                    </tr>
                    <tr>
                      <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Message:</td>
                      <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $message . '</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </body>
            </html>';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'it_dev@gapollo.net';
                $mail->Password = 'voah eucw hnmi pbkg';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Recipients
                $mail->setFrom('support@apollo.co.in', 'Support');
                // $mail->addAddress('it_dev@gapollo.net', 'IT dev');
                // $mail->addAddress('info@apollo.co.in', 'Info Apollo');
                // $mail->addAddress('arjun_patel@gapollo.net', 'Arjun Patel');
                // $mail->addAddress('dcbrainsinquiry@gmail.com', 'DC Brains');
                $mail->addAddress('ujjawalpatel91@gmail.com', 'Ujjawal Patel');
                
                // Content
                $mail->isHTML(true);
                $mail->Subject = 'New Enquiry From Gujarat Apollo Corporate Website';
                $mail->Body    = $message_body;

                $mail->send();
                header('location:thankyou.php');
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    } else {
        echo "<script>alert('You have entered wrong Captcha. Please try again.'); window.location.href = 'contact-us.php';</script>";
    }
} else {
    echo "<script>alert('Please enter all details correctly.'); window.location.href = 'contact-us.php';</script>";
}
?>
