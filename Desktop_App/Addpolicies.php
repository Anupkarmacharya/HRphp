



<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="MainpageFiles/metro-bootstrap.css">
    <link rel="stylesheet" href="MainpageFiles/font-awesome.css">
    <!-- documentation styles -->
    <link rel="stylesheet" type="text/css" href="MainpageFiles/docs.css">
    <link rel="stylesheet" type="text/css" href="MainpageFiles/jquery.min.js">
<title>Hrsewa Desktop app</title>
</head>
<body>
	<div data-role="panel" id="myPanel">
  <h2>Panel Header..</h2>
  <p>Some text..</p>  
</div>
<a href="#myPanel" class="ui-btn ui-btn-inline">Open Panel</a>
<h2 align="center">HRsewa Desktop app</h2>

<form method="post" action ="InsertAddPolicies.php">
<div class="input-group">
  <span class="input-group-addon">Name:</span>
  <input type="text" class="form-control" placeholder="Name" name = "policies_name">
</div>
<div class="input-group">
  <span class="input-group-addon">Description:</span>
  <textarea class="form-control" name = "description"></textarea>
</div>
<input type="submit" class="form-control"> 
</form>
</center>
</body>
</html>