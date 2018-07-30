<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">
		var options = {

		  url: "countries.json",

		  getValue: "name",

		  list: {	
		    match: {
		      enabled: true
		    }
		  },

		  theme: "square"
		};

		$("#countries").easyAutocomplete(options);
	</script>
</head>
<body>

	<input type="text" id="countries"/>

</body>
</html>