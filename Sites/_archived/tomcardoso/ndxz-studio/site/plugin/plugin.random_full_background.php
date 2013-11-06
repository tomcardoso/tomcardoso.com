<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Random Full Size Backgrounded
* merged by Sawatzki
* from 
* Full Size Backgrounded
* and
* Random Background
* by Vaska
* 
* @version 0.6 beta
* @author Sawatzki 
*/

/* First, we define the main function with the variable of the folder with our images. */

function rnd_full_background($folder='')
{
	
	// this is for global file handling:
	
	global $rs;
	
//	 	the following (inactive) if-rule makes the random image choice affect only the home site "/". 
//		if you want this to be the case, uncomment lines 29-30 & don't forget to un-comment the corresponding bit at the end
//		of the plugin!		
		
		if ($rs['url'] == '/')
		{

//		Here we check whether there is a background defined in indexhibit cms and if so, scale it. 
				
		if ($rs['bgimg'] != '') {
		// 	here, we get the dimensions of the browser window for the image
			$size = getimagesize(DIRNAME . '/files/' . $rs['bgimg']);
		//	..and make a html tag of it.	
			return "<img src='" . BASEURL . "/files/$rs[bgimg]' width='$size[0]' height='$size[1]' alt=''/>";
		}	
		
//		if there isn't a set image, well take a rondom one.
		else
		{
			// get the images from the specified folder (thanks, Vaska!)
			$path = DIRNAME . "/$folder/";

			if (is_dir($path))
			{
				if ($fp = opendir($path)) 
				{
					while (($module = readdir($fp)) !== false) 
					{
						if ((eregi("jpg$", $module)) || (eregi("gif$", $module)) || (eregi("png$", $module)))
						{      
							$images[] = $module;
						}
					} 
				}
				closedir($fp);
			}

			$image = count($images);
			$rand = rand(0, $image-1);

			$show = BASEURL . "/$folder/" . $images[$rand];

			// get the dimensions (Note the variable show being used for the url to the rnd image)
			$size = getimagesize($show);
			return "<img src='$show' width='$size[0]' height='$size[1]' alt=''/>";

		// I decided to comment out the output of the $style, since the image is not set as background picture 
		// but just a regular <img>. This would be a nice place to input some style, though.
		
			 //Vaska says: this 215px setting may need to be adjusted if you have altered your Index in the template
			 //$style = "<style type='text/css'>body { background: url($show) no-repeat #333 0 0 }</style>\n";
			 //return $style;

// !!! See line 19: Don't forget to un-comment this following bit, (74-76) if you want the randomness only on the main page!!!

// 		}
//		else
//		{
		}	
		return;
		}

}
?>