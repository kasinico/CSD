<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='aboutus.html') {
	include $browser_t.'/aboutus.html';
	}
elseif ($page_name=='jobs.html') {
	include $browser_t.'/jobs.html';
	}
elseif ($page_name=='clients.html') {
	include $browser_t.'/clients.html';
	}
elseif ($page_name=='employers.html') {
	include $browser_t.'/employers.html';
	}
elseif ($page_name=='contactus.html') {
	include $browser_t.'/contactus.html';
	}
elseif ($page_name=='contact-post.html') {
	include $browser_t.'/contact.html';
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
