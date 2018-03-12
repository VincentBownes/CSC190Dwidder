<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

	<script>
		function insertLocation(){
			
			var name = $("#name").val();
			var place = $("#place").val();
			console.dir(name);
			    $.post("insert.php",
			    {
				name: name,
				place: place 
			    },
			    function(data,status){
				if(data=="ok"){
					alert("Got it! We'll start looking for Dr. Evil there");
					window.location ="postPage.php";
				}else{
					alert("ERROR!");
				}
			    });
		};

		$('#btnSubmit').click(function() {
			insertLocation();
		});
	</script>

<div class="container">
	<label for="name">Name</label>	
	<input type="text" name="name" id="name"> <br />
	<label for="place">Location</label>
	<input type="text" name="where" id="place"> <br />
	<button id="btnSubmit" onclick="insertLocation()">Post</button>
</div>


</html> 
