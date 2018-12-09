<?php 

//01. SCRIPT_NAME is the name of the environment that we are searching for information in. When it gets echoed out, it will show the server information in the browser.
$script_name = $_SERVER['SCRIPT_NAME'];

//02. The output is going to be dependent on what was written in the config file and the file system being accurate when concatenating onto an images folder and grabbing an image source. The host will be updated automatically everywhere if the config file includes that information, so the image will go from being on local host to a production server automatically.
echo $images;

?>

<!-- Using the $script_name variable saves us time because we don't have to write out $_SERVER['SCRIPT_NAME'] everytime that we want to use it. It is also beneficial because if we need to update the parameters, we can do it in one place and using the variable will update it everywhere, as opposed to having to update the text on every page that we inserted it. -->
<form action="<?php echo $script_name; ?>" method="POST">

<input type="submit" name="submit" value="Submit">

</form>