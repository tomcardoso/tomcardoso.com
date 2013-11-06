<?php
if(!isset($_POST['submit']))

/* {
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
*/

//Pulling the variables from the html landing page

$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$phone = $_REQUEST['phone'] ;
$message = $_REQUEST['message'] ;
$ip = getRealIpAddr() ;
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


//Validate first

if(empty($message)) 
{
	echo "<html>
<head>
<title>UTSU 2011 Election Tipline</title>
<link href='/css/style.css' media='screen' rel='stylesheet' type='text/css' />
<link rel='icon' 
      type='image/png' 
      href='/img/favicon.gif' />
<meta name='description' content='UTSU 2011 Election Tipline' />
<meta name='keywords' content='Election tips,election violations,UTSU,University of Toronto Students' Union,U of 								   T,University of Toronto, The Varsity,www.thevarsity.ca' />
<meta name='author' content='Tom Cardoso, Design Editor, The Varsity 2010-2011' />
</head>


<body>

<div class='wrapper'>
     
	<div id='header'>
		<!-- <img src='/img/head.png' alt='UTSU 2011 Election Tipline'> -->
	</div>
		
	<div class='message'><img src='/img/rage.png' alt='Error' />
    <p>You must type in a message!</p>
    </div>
		
</div>	

</body>
</html>";
    exit;
}

if (strlen($message) < 15)
{
	echo "<html>
<head>
<title>UTSU 2011 Election Tipline</title>
<link href='/css/style.css' media='screen' rel='stylesheet' type='text/css' />
<link rel='icon' 
      type='image/png' 
      href='/img/favicon.gif' />
<meta name='description' content='UTSU 2011 Election Tipline' />
<meta name='keywords' content='Election tips,election violations,UTSU,University of Toronto Students' Union,U of 								   T,University of Toronto, The Varsity,www.thevarsity.ca' />
<meta name='author' content='Tom Cardoso, Design Editor, The Varsity 2010-2011' />
</head>


<body>

<div class='wrapper'>
     
	<div id='header'>
		<!-- <img src='/img/head.png' alt='UTSU 2011 Election Tipline'> -->
	</div>
		
	<div class='message'><img src='/img/rage.png' alt='Error' />
    <p>You need a message with at least 15 characters!</p>
    </div>
		
</div>	

</body>
</html>";
	exit;
}

if(IsInjected($visitor_email))
{
		echo "
<html>
<head>
<title>UTSU 2011 Election Tipline</title>
<link href='/css/style.css' media='screen' rel='stylesheet' type='text/css' />
<link rel='icon' 
      type='image/png' 
      href='/img/favicon.gif' />
<meta name='description' content='UTSU 2011 Election Tipline' />
<meta name='keywords' content='Election tips,election violations,UTSU,University of Toronto Students' Union,U of 								   T,University of Toronto, The Varsity,www.thevarsity.ca' />
<meta name='author' content='Tom Cardoso, Design Editor, The Varsity 2010-2011' />
</head>


<body>

<div class='wrapper'>
     
	<div id='header'>
		<!-- <img src='/img/head.png' alt='UTSU 2011 Election Tipline'> -->
	</div>
    
    <div class='message'><img src='/img/rage.png' alt='Error' />
    <p>You need a message with at least 15 characters!</p>
    </div>
		
</div>	

</body>
</html>";
    exit;
}

// Info on the email 

$email_from = 'tips@utsu2011.ca';//<== update the email address
$email_subject = "You've got a new tip!";
$email_body = "You have received a new tip. Here's the tipster's info: \n
Name: $name \n
Email: $email \n
Phone: $phone \n
IP Address: $ip \n
Message:\n
$message \n";

$to = "news@thevarsity.ca";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "BCC: design@thevarsity.ca \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thankyou.html');

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>