 <!DOCTYPE html>
<html lang="en">
<head>
  <title>List locations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type=text/css href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<?php

	include_once("db.php");
	$arr = executeSQL("SELECT * FROM location");
	
	echo "<blockquote class=tweetEntry>"; 
	$count = 0;
	while($row = $arr[$count]){   
		echo "<blockquote class=tweetEntry><div class=tweetEntry-fullname>" . $row['name'] . "</div><<div class=tweetEntry-content>" . $row['place'] . "</div><<div class=tweetEntry-timestamp>" . $row['date'] . "</div></blockquote><br><br>"; 
		 ++$count;
	}

echo "</blockquote>"; 
	

?>
	
	
	

</body>
</html> 
