<html>
<body>

<div>
<h1>Watermerk toevoegen!</h1>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>
<style>
* {font-family:verdana}
div {width:400px;margin:0 auto;padding:20px; border-radius:3px; border:1px solid #F4BCCB;text-align:center;line-height:20px;}
h1 {color: #DD6685; font-size:18px;margin: 10px 0 30px 0}
input[type=submit]
{
margin: 20px auto 0 auto;

padding:2px 5px;
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
input[type=submit]:hover {background: #97C670;}
input[type=file] {padding:5px;border: 1px solid #555; border-radius: 3px;}
</style>  