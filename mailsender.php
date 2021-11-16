
<?php
if(isset($_POST['submit']))
//  if($nameErr == "" && $emailErr == "" && $phoneErr == "" && $tourErr == "") 
{
	$name       = $_POST['full_name'];
	$email      = $_POST['email'];
	$phone      = $_POST['phone'];
	$ari        = $_POST['ari'];
	$sendmsg    = $_PST ['sendmsg'];
	
    //$to="info@webworldmultimedia.in";
    $to = "yogeshpande1994@gmail.com";
    $subject = "Enquiry from VIP";
    $message = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>";
    $message .='<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DigiDoc Convergence</title>
    </head>
    <body style="margin:0; padding:0">
    <div style="width:600px; margin:0 auto; border-top:27px solid #FF3333; border-bottom:27px solid #FF3333; border-left:27px solid #F0F0F0; border-right:27px solid #F0F0F0; padding-bottom:10px;">
    	
    
    <div class="detail">
    	<h1 style="font-size:16px; text-align:center; margin-top:30px; text-decoration:underline; color:#FF3333;"><strong>Enquiry from DigiDoc Convergence Website </strong></h1>
						<table border="1" align="center" cellpadding="10" cellspacing="0" width="80%">
							<tr>
								<td  style="font-size:15px;width:50%;">Name :</td>
								<td >'.$name.'</td>
							</tr>
                            <tr>
								<td  style="font-size:15px;width:50%;">Phone :</td>
								<td >'.$email.'</td>
							</tr>
							<tr>
								<td  style="font-size:15px;width:50%;">Email :</td>
								<td >'.$phone.'</td>
							</tr>
							<tr>
								<td  style="font-size:15px;width:50%;"> Area of Interest:</td>
								<td >'.$ari.'</td>
							</tr>
							<tr>
								<td  style="font-size:15px;width:50%;"> Massage </td>
								<td >'.$sendmsg.'</td>
							</tr>
							
						</table><br>
    </div>
    
    
    
      </div>
		</div>
        <table>
        <tr>
	        <td height="27" align="center" valign="top" bgcolor="#f0f0f0">&nbsp;</td>
          </tr>
          </table>
     
</body>
</html>';
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:<yogeshpande1994@gmail.com>' . "\r\n";
$headers .= 'Cc:yogeshpande1994@gmail.com' . "\r\n";

$email = mail($to,$subject,$message,$headers);
if ($email)
{
        echo"<script>alert('Your Message has been sucessfully send to DigiDoc Convergence');</script>";
				echo"<script>window.location.assign('index.php');</script>";
}
}
?>