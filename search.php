<?php
if (!empty($_GET['q'])) {
	//have not recieved the api key
	$url=' http://api.rottentomatoes.com/api/public/v1.0.json?apikey=[api_key]';
	$rawdata=file_get_contents($url);
	$data=json_decode($rawdata);
	
}

?>
<!Doctype html>
<html>
<head>
	<title>Search bar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		function active(){
			var searchBar=document.getElementById('searchBar');

			if (searchBar.value=='Search') {
				searchBar.value='';
				searchBar.placeholder='Search';

			}
		}
		function inactive(){
			var searchBar=document.getElementById('searchBar');

			if (searchBar.value=='') {
				searchBar.value='Search';
				searchBar.placeholder='';

			}
		}

	</script>
</head>
<body>
	<form action="" method="post">
			<input type="text" name="q" id="searchBar" placeholder="" value="Search" onMouseDown="active(); "onBlur="inactive();"><input type="submit" id="searchButton" value="Search">
	</form>
	<?php
		if(!empty($_GET['q'])){
			echo 'Name:';//name of movie;

		}
	?>
</body>
</html>
