<?php

	if(!empty($_GET['img']))
	{
		$image = $_GET['img'];
		$type = $_GET['type'];
	
		// Load the stamp and the photo to apply the watermark to
		$stamp = imagecreatefrompng('watermark.png');

		if ($type == "image/jpeg")
			$im = imagecreatefromjpeg($image);
		elseif ($type == "image/png")
			$im = imagecreatefrompng($image);
		elseif ($type == "image/gif")
			$im = imagecreatefromgif($image);
		else
		{
			echo 'Het plaatje moet van het type jpg of png zijn.';
			exit;
		}

		// Set the margins for the stamp and get the height/width of the stamp image
		$marge_right = 10;
		$marge_bottom = 10;
		$sx = imagesx($stamp);
		$sy = imagesy($stamp);

		// Copy the stamp image onto our photo using the margin offsets and the photo 
		// width to calculate positioning of the stamp. 
		imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

		// Output and free memory
		header('Content-type: image/png');
		imagepng($im);
		imagedestroy($im);
	}
	else
	{
		echo 'Er is een fout opgetreden: geen img GET waarde.';
	}
	
?>