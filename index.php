<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Movie Age Limits" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Niko" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="./ff/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./ff/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./ff/favicon-16x16.png" />
    <link rel="manifest" href="./ff/site.webmanifest" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Movie Age Limits</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
    <?php  
      echo "<h1>Movie Age Limits</h1>";
      echo '<img src="./images/orange.jpg" alt="orange" width="600" height="300"/>';
      echo "<h3>Enter you age:</h3>";
    ?>
    <br>
    <!-- form to get users age -->
    <form action="./results.php" method="post" target="results">
      <label for="age">Age:</label>
      <input type="number" id="age" min="0" placeholder="age" name="age"><br><br>
      <input type="submit" value="Enter">
    </form>

    <!-- iframe for the results to show on the web page -->
    <iframe id="results" name="results">			

    </iframe>
  </body>
</html>