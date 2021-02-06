

<!DOCTYPE HTML>
<html>
  <head>
    <!-- Link page to the stylesheet -->
    <link rel="stylesheet" type="text/css" href="../stylesheetlight.css">
    <!-- Define website metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Display the title of the page -->
    <title>Web App</title>
  </head>

  <body>
    <div class="banner">
      <h1 id="title">Logon</h1>
      <a href="/index.php/"><p>Link to Home</p>
      <a href="/index.php/register"><p>Link to Register</p>
      <a href="/index.php/login"><p>Link to Login</p>

      <button type='button' onclick="myFunction(); return false;">Click Me</button>

      <script>
        function myFunction()
        {
        document.body.style.backgroundColor= "cyan";
        }
      </script>

   </div>
  </body>
</html>
