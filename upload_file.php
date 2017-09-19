<div class="page">
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "<span style='color:red'>Return Error Code: " . $_FILES["file"]["error"] . "</span><br>";
	}
	else
	{
		$file = $_FILES["file"]["tmp_name"];
		$dest = "upload/";
		$filename = $_FILES["file"]["name"];
		$type = $_FILES["file"]["type"];
		echo "<div class='info'>";
		echo "Uploaded Image: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . round(($_FILES["file"]["size"] / 1024)) . " kB<br>";
		echo "Folder: " . $dest.$filename . "<br>";
		echo "</div>";

		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo "<br/><span style='color:green;'>".$_FILES["file"]["name"] . " already exists.</span> ";
			echo "<a href='mark.php?img=".$dest.$filename."&type=".$type."'>Voeg de watermerk toe</a><br/>";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);	
			echo "<br/><span style='color:green;'>Stored in: ".$dest.$filename."</span>";
			echo "<a href='mark.php?img=".$dest.$filename."&type=".$type."'>Voeg de watermerk toe</a><br/>";
		}
	}
}
else
{
	echo "<span style='color:red'>Invalid file</span>";
}
?>
</div>
<style>
* {font-family:verdana}
h1 {color: #DD6685; font-size:20px;margin: 10px 0 10px 0}

div.page {width:450px;margin:0 auto;padding:20px; border-radius:3px; border:1px solid #F4BCCB;text-align:center;line-height:25px;}
div.info {font-size: 14px;}
a 
{
	margin:20px auto 0 auto;
	display: block;
	width: 50%;
	padding:5px;
	border: 1px solid #18BA18;
	border-radius: 3px;
	text-decoration:none;
	color: #fff;

	background: #a9db80; /* Old browsers */
	background: -moz-linear-gradient(top,  #a9db80 0%, #96c56f 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a9db80), color-stop(100%,#96c56f)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #a9db80 0%,#96c56f 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #a9db80 0%,#96c56f 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #a9db80 0%,#96c56f 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #a9db80 0%,#96c56f 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a9db80', endColorstr='#96c56f',GradientType=0 ); /* IE6-9 */
}
a:hover {background: #97C670;}
</style>