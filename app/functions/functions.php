<?php

//declaring a function

function helloworld() {
  echo "hello world";
}
// function with a parameter. If the function is called without a parameter i.e greet(), it will default to "no name was set"
function greet($name = "no name was set") {
  echo "hello ".$name;
}

//complex function
//$somelist will be an array of list items
function buildul($somelist) {
  if(count($somelist) > 0){
    echo "<ul>";
  foreach ($somelist as $key => $value) {
    echo "<li>$value</li>";
  }
  echo "</ul>";
  }
}




?>