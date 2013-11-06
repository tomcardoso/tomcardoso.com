<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>

<title><%title%> : <%obj_name%></title>

<plug:front_lib_css />
<plug:front_dyn_css />
<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/style.css' type='text/css' />
<!--[if lte IE 6]>
<link rel='stylesheet' href='<%baseurl%><%basename%>/site/<%obj_theme%>/ie.css' type='text/css' />
<![endif]-->
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
<!-- <plug:backgrounder color='<%color%>', img='<%bgimg%>', tile='<%tiling%>' /> -->

<!-- commenting this out for testing

<plug:ndxz_rand_bg bg_img,false />

-->

<!-- call Full-Screen-Background... -->
			<script type='text/javascript' src='<%baseurl%><%basename%>/site/js/full_background.js'></script>


</head>

<body class='section-<%section_id%>'>
	
	<!-- this div is needed for Full-Screen-Background. It points to the images.. -->	
				<div id='the-background'>
				<plug:rnd_full_background bg_img /> <!-- for a custom folder, change "bgbig" to whatever folder url you want to use! -->
				</div><div id='wrapper'>

<div id='menu'>
<div class='container'>

<div class="top-section">
	<%obj_itop%>
</div>
<plug:front_index />

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