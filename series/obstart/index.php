<?php ob_start(); ?>
<!-- We use the ob_start when there is content that is loaded before the header redirect information is read. Without obstart, the header will not redirect if information has already been loaded into the page. -->
<h1>My Page</h1>
This is my page.
	
<?php
$redirect_page = 'http://google.com';
$redirect = true;

if ($redirect==true) {
	
//01. The header function is redirecting users to another page that has been defined in the $redirect_page variable. Location is the standard starting point when creating the argument. The variable $redirect needs to be true though in order to move forward with the redirect.
	
	header ('Location: '.$redirect_page);
}

//03. The ob flush outputs to the browser the content that was loaded before the redirect information. The obstart keeps the information in a buffer, kind of like a tape delay on tv. The flush clears the buffer and the page content is displayed. He talked about being directed to a thank you page, so this whole function could be used in an ecommerce way when somebody completes their order online.
ob_end_clean();
?>