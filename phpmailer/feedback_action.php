<?php
session_start();

$fname = $_POST['name'];
$email=$_POST['email'];
  $phone=$_POST['phone'];
	$comment = $_POST['message'];
  $cname=$_POST['cname'];
  $city=$_POST['city'];

if($name!="" || $email!="" || $phone!="")
{ 
require_once('phpmailer/class.phpmailer.php');
	define('GUSER', 'dcbrainsinquiry@gmail.com');	 
	define('GPWD', 'dcbrainsinquiry!@#');
function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
  $mail->IsHTML(true); 
 
 
  
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}			
	} 
		$message_body = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<title>Inquiry from website</title>
	<style type="text/css">
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
body { margin: 0; padding: 0; }
table { border-spacing: 0; }
img { display: block !important; }
table td { border-collapse: collapse; }
.yshortcuts a { border-bottom: none !important; }
a { color: #cf4747; text-decoration: none; }
 @media only screen and (max-width: 640px) {
body { width: auto !important; }
table[class="table600"] { width: 450px !important; text-align: center !important; }
table[class="table-inner"] { width: 86% !important; }
table[class="table2-2"] { width: 47% !important; }
table[class="table3-3"] { width: 100% !important; text-align: center !important; }
table[class="table1-3"] { width: 29.9% !important; }
table[class="table3-1"] { width: 64% !important; text-align: center !important; }
table[class="footer-note"] {width: 100% !important; text-align: left !important;}
/* Image */
img[class="img1"] { width: 100% !important; height: auto !important; }
/*Footer*/
table[class="footer-column"] { width: 47% !important; text-align: left !important; }
}
 @media only screen and (max-width: 479px) {
body { width: auto !important; }
table[class="table600"] { width: 290px !important; }
table[class="table-inner"] { width: 80% !important; }
table[class="table2-2"] { width: 100% !important; }
table[class="table3-3"] { width: 100% !important; text-align: center !important; }
table[class="table1-3"] { width: 100% !important; }
table[class="table3-1"] { width: 100% !important; text-align: center !important; }
table[class="middle-line"] { display: none !important; }
table[class="footer-note"] {width: 100% !important; text-align: center !important;}
/* image */
img[class="img1"] { width: 100% !important; }
/*Footer*/
table[class="footer-column"] { width: 100% !important; text-align: center !important; }
}
</style>
</head>

<body>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
		<tr>
			<td valign="top">
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					<!--Header Bar-->
					<tr>
						<td bgcolor="#FFFFFF" style="border-top:5px solid #5f5f5f;">
							<table width="600" class="table600" border="0" align="center" cellpadding="0" cellspacing="0">
								
								<tr>
									<td valign="bottom">
										<!--Logo-->

										

										<!--End Logo-->
									</td>
								</tr>
								
							</table>
						</td>
					</tr>
					<!--End Header Bar-->

					<!-- feature 3 panels -->
					<tr>
						<td>
							<table bgcolor="#f5f5f5" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td height="30"></td>
								</tr>

								<!-- main title -->
								<tr>
									<td>
										<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="table600">
											<tr>
												<td align="center" style="font-family: \'Century Gothic\', arial, sans-serif ; font-size:24px; color:#4d4d4d; font-weight:bold;">We have a new messages!</td>
											</tr>
										</table>
									</td>
								</tr>
								<!-- end main title -->

								<tr>
									<td height="30"></td>
								</tr>
								<tr>
									<td>
										<table class="table600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
											<tr>
												<td>
													<!-- left -->

													<table class="table3-3" style="border-bottom:3px solid #eaeaea;" bgcolor="#ffffff" width="30%" border="0" align="left" cellpadding="0" cellspacing="0">
														<tr>
															<td>
																<table class="table-inner" width="126" border="0" align="center" cellpadding="0" cellspacing="0">
																	<tr>
																		<td height="30"></td>
																	</tr>

																	<tr>
																		<td height="10"></td>
																	</tr>

																	<!-- title -->
																	<tr>
																		<td align="left" valign="top" style="font-family: \'Century Gothic\', arial, sans-serif ; font-size:15px; color:#bdc3c7; font-weight:normal;">Name:</td>
																	</tr>
																	<!-- end title -->

																	<tr>
																		<td height="10"></td>
																	</tr>

																	<!-- content -->
																	<tr>
																		<td height="15" align="left" valign="top" style="font-family: arial, sans-serif, \'Century Gothic\'; font-size:12px; line-height:6px; color:#676767;font-weight:bold;">'.$fname.'</td>
																	</tr>
																	<!-- end content -->
																	<tr>
																		<td height="10"></td>
																	</tr>
																	
																	<!-- title -->
                                  
                                  			<!-- title -->
																	<tr>
																		<td align="left" valign="top" style="font-family: \'Century Gothic\', arial, sans-serif ; font-size:15px; color:#bdc3c7; font-weight:normal;">Company Name:</td>
																	</tr>
																	<!-- end title -->

																	<tr>
																		<td height="10"></td>
																	</tr>

																	<!-- content -->
																	<tr>
																		<td height="15" align="left" valign="top" style="font-family: arial, sans-serif, \'Century Gothic\'; font-size:12px; line-height:6px; color:#676767;font-weight:bold;">'.$cname.'</td>
																	</tr>
																	<!-- end content -->
																	<tr>
																		<td height="10"></td>
																	</tr>
																	
                                  			<!-- title -->
																	<tr>
																		<td align="left" valign="top" style="font-family: \'Century Gothic\', arial, sans-serif ; font-size:15px; color:#bdc3c7; font-weight:normal;">Phone:</td>
																	</tr>
																	<!-- end title -->

																	<tr>
																		<td height="10"></td>
																	</tr>

																	<!-- content -->
																	<tr>
																		<td height="15" align="left" valign="top" style="font-family: arial, sans-serif, \'Century Gothic\'; font-size:12px; line-height:6px; color:#676767;font-weight:bold;">'.$phone.'</td>
																	</tr>
																	<!-- end content -->
																	<tr>
																		<td height="10"></td>
																	</tr>
																	
																	<!-- title -->
                                  
																	<!-- title -->
                                  
																	<tr>
																		<td align="left" valign="top" style="font-family: \'Century Gothic\', arial, sans-serif ; font-size:15px; color:#bdc3c7; font-weight:normal;">Email:</td>
																	</tr>
																	<!-- end title -->

																	<tr>
																		<td height="10"></td>
																	</tr>

																	<!-- content -->
																	<tr>
																		<td height="15" align="left" valign="top" style="font-family: arial, sans-serif, \'Century Gothic\'; font-size:12px; line-height:6px; color:#676767;font-weight:bold;">'.$email.'</td>
																	</tr>
																	<!-- end content -->
																	<tr>
																		<td height="10"></td>
																	</tr>
																	
															
																	
																	<!-- title -->
                                  
                              
																	<!-- title -->
                             
																	<!-- title -->
                                
																	
																	<!-- title -->
																
																	<!-- end content -->
																	<tr>
																		<td height="30"></td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>

													<!-- end left -->

													<!--Space-->

													<table width="1" height="25" border="0" cellpadding="0" cellspacing="0" align="left">
														<tr>
															<td style="font-size: 0;line-height: 0;border-collapse: collapse;">
																<p style="padding-left: 24px;">&nbsp;</p>
															</td>
														</tr>
													</table>

													<!--End Space-->

													<!-- middle -->

													<table class="table3-3" style="border-bottom:3px solid #eaeaea;padding:8px;" bgcolor="#ffffff" width="66%" border="0" align="center" cellpadding="0" cellspacing="0" >
														<tr>
															<td>
																
																	
																	<tr>
																		<td height="20"></td>
																	</tr>

																	<!-- title -->
																	<tr>
																		<td align="left" valign="top" style="font-family: \'Century Gothic\', arial, sans-serif ; font-size:24px; color:#BDC3C7; font-weight:bold;">Message</td>
																	</tr>
																	<!-- end title -->

																	<tr>
																		<td height="10"></td>
																	</tr>

																	<!-- content -->
																	<tr>
																		<td height="15" align="left" valign="top" style="font-family: arial, sans-serif, \'Century Gothic\'; font-size:12px; line-height:24px; color:#676767;text-align:justify;">'.$comment.'</td>
																	</tr>
																	<!-- end content -->
                                  
                                  	<!-- title -->
																	<tr>
																		<td align="left" valign="top" style="font-family: \'Century Gothic\', arial, sans-serif ; font-size:24px; color:#BDC3C7; font-weight:bold;">Location</td>
																	</tr>
																	<!-- end title -->

																	<tr>
																		<td height="10"></td>
																	</tr>

																	<!-- content -->
																	<tr>
																		<td height="15" align="left" valign="top" style="font-family: arial, sans-serif, \'Century Gothic\'; font-size:12px; line-height:24px; color:#676767;text-align:justify;">'.$city.'</td>
																	</tr>
																	<!-- end content -->

                                  


																	<tr>
																		<td height="30"></td>
																	</tr>
																
															</td>
														</tr>
													</table>

													<!-- end middle -->

													

													
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td height="40"></td>
								</tr>
							</table>
						</td>
					</tr>
					<!-- end feature 3 panels -->
					<!-- footer -->
					<tr>
					</tr>
					<tr bgcolor="#232323">
						<td height="60">

							<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="table600">
								<tr>
									<td height="10"></td>
								</tr>
								<tr>
									<td>
										<table class="table3-3" style="font-family: arial, sans-serif, \'Century Gothic\'; font-size:12px; color:#999999;" height="20" width="290" border="0" align="left" cellpadding="0" cellspacing="0">
											<tr>
												<td valign="middle" height="30">
													Copyright &copy;
													<a href="http://dcbrains.in" style="color:#33CCFF">www.dcbrains.in</a>
													, All rights reserved
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td height="10"></td>
								</tr>
							</table>

						</td>
					</tr>
					<!-- end footer -->
				</table>
			</td>
		</tr>
	</table>
</body>
</html>';
	
	//$regg="Name:".$name." \n \n phone:".$phone. "\n \n Address:".$address."\n \n Comment: ".$comment."\n \n Email: ".$email."";
	
		if(smtpmailer('a11034211040@gmail.com',$email , 'Contact For Dintech', 'New Inquiry For Dintech', $message_body))
		{	
	   
	header('location:thankyou.php');	
		}
		else
		{
    	header('location:contact.php');
		}
 
	//	header('location:contact.html');

}
else
{ ?>
               <script>if(confirm("Please Enter All Details Correct..")) {
    window.location.href = "#";
           }
           else
           {
           window.location.href = "#";
           }
           </script>

   <?php
}
?>

	
