<?php
require("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions test</title>
  </head>
  <body>
<!-- Calling a function  -->
<p><?php helloworld(); ?></p>
<!-- Calling a function with a parameter  -->
<p><?php greet("William");?></p>
<!-- Calling a function with a parameter from query url ?name=somename  -->
<p><?php
//first check if the name parameter is in the query
if(isset($_GET["name"]))
{
  greet($_GET["name"]);

  } else {
// if the name parameter is not in the query, call the empty function to trigger the default value we specified "no name was set". 
  greet();

  }

?></p>
<hr>

<?php
$mylist = ["BMW","LEXUS","FORD","GMC"];

buildul($mylist);


$mylist = ["Miami","L.A","N.Y","Paris"];

buildul($mylist);

$mylist = ['<a href="http://miami.edu">Miami</a>',
          '<a href="http://nyu.edu">NY</a>'];

buildul($mylist);
 ?>

  </body>
</html>
