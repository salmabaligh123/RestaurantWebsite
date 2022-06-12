<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script>

		function getResult() 
		{
			jQuery.ajax(
			{
				url: "backend-search.php",
				data:'term='+$("#term").val(),
				type: "POST",
				success:function(data2)
				{
					$("#result").html(data2);
				}
			});
		}
	</script>
	<?php include "menu.php";?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<h1>Search Any Item</h1>
	<input name="term" type="text" id="term" onkeyup="getResult()" placeholder="Search Term..." />
	<div id="result"></div>
</body>
</html>