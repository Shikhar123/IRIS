<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>IRIS</title>
    <meta name="description" content="A basic form">
    <meta name="author" content="Ludwig Stumpp">
    <link rel="stylesheet" href="styles1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
  </head>

 <body>
  <form action="latestproject.py" id="my-form" method="post">
    <label for="stockname">Enter the stock name of the company:</label><br>
    <input id="stockname" type="text" name="stockname" placeholder="AAPL" required><br>
    <label for="startingdate">Enter the starting date:</label><br>
    <input id="startingdate" type="date" name="startingdate" placeholder="" required><br>
	<label for="todaydate">Enter today's date:</label><br>
    <input id="todaydate" type="date" name="todaydate" placeholder="" required><br>
	<label for="last1week">Enter the last 1 week date:</label><br>
    <input id="last1week" type="date" name="last1week" placeholder="" required><br>
	<label for="last1year">Enter the last 1 year date:</label><br>
    <input id="last1year" type="date" name="last1year" placeholder="" required><br>
    <input class="submit-button" type="submit" value="Submit">
   
  </form>
  <script type="text/javascript">
  // scripts.js


  </script>
  
</body>

</html>