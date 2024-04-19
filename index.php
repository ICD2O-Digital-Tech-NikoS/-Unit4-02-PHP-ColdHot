<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="temperature" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Niko" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="./faviconfolder/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./faviconfolder/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./faviconfolder/favicon-16x16.png" />
    <link rel="manifest" href="./faviconfolder/site.webmanifest" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Temperature</title>
  </head>
  <body>
    <!-- php echo to print the html to the page, displays title and subheading -->
    <?php 
      echo "<h1>Temperature</h1>";
    ?>
    <img src="./images/sadcamel.webp" alt="camel" width="600" height="300" > <br>
    <?php
      echo "<h3>Enter the temperature of outside:</h3>";
    ?>
    <!-- form to get dimensions of a sphere from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="degrees">Degrees Celsius: </label>
      <input type="number" id="degrees" step="1" placeholder="degrees" name="degrees"><br><br>
      <input type="submit" value="Enter">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			

      </iframe>

    <br>
  </body>
</html>