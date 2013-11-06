<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<meta name="description" content="You should probably just go ahead and hire this guy."/>
<meta name="keywords" content="Tom Cardoso, Design, Photography, Writing, Advertising, Marketing, Portfolio, Toronto, Canada, Ontario, Communications, Freelance" />
<meta name="author" content="Tom Cardoso"/>

<link rel="shortcut icon" HREF="/ndxz-studio/site/tomcardoso/img/favicon.png">
<title><%obj_name%> | <%title%></title>

<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/style.css' type='text/css' />
<!--[if lte IE 6]>
<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/ie.css' type='text/css' />
<![endif]-->
<plug:front_lib_css />
<plug:front_dyn_css />
<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/jquery.js'></script>
<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/cookie.js'></script>
<plug:front_lib_js />
<script type='text/javascript'>
path = '<%baseurl%>/files/gimgs/';

$(document).ready(function()
{
	setTimeout('move_up()', 1);
});
</script>
<plug:front_dyn_js />
<plug:backgrounder color='<%color%>', img='<%bgimg%>', tile='<%tiling%>' />

<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/full_background.js'></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32154597-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body class='section-<%section_id%>'>

<div id='the-background'>
	<plug:rnd_full_background bg_img />
</div>

<div id='wrapper'>

<div id='menu'>
<div class='container'>
	<a href='http://www.tomcardoso.com/'><div id='logo'></div></a>
<%obj_itop%>
<plug:front_index />
<%obj_ibot%>

</div>	
</div>	

<div id='content'>
<div class='container'>

<!-- text and image -->
<plug:front_exhibit />
<!-- end text and image -->

</div>
</div>
</div>

</body>
</html>