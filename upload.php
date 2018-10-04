<html>
<body>

<?php
if ($_POST)
  {
	if ($_FILES["file"]["error"] > 0)
	  {
	  echo "Error: " . $_FILES["file"]["error"] . "<hr />";
	  }
	else
	  {
	  echo "Upload succesfuly." . "<br />";
	  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
	  echo "Type: " . $_FILES["file"]["type"] . "<br />";
	  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	  echo "<hr />";

		if (file_exists("upload/" . $_FILES["file"]["name"]))
		  {
		  echo $_FILES["file"]["name"] . " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
		  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		  }
		
		
	  }
  }
?> 

<form action="" method="post" enctype="multipart/form-data">
<label>Filename:</label>
<input type="file" name="file" />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html> 
