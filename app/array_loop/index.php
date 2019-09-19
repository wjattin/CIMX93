<?php
//indexed array
$size = ["small","medium","large","x-large","xx-large"];
// . concat operation to combine 2 or more strings
// echo $size[0]."<br>";
// echo $size[1]."<br>";
// echo $size[2]."<br>";

//associative array
$quantity = [ "One" => 1, "Two" => 2 , "Three" => 3 ];
?>
<label for="size">Choose a size: </label>
<select class="" name="size">
<?php
  // foreach ($size as $key => $value) {
  //   echo "<option value=\"$value\"> $value </option>";
  // }

  $counter = 0;
  while($counter < 3){
  echo "<option value=\"$size[$counter]\"> $size[$counter] </option>";
   $counter++;
  }
?>
</select>
<br>
<label for="quantity">Choose a qty: </label>
<select class="" name="quantity">
  <?php
  foreach ($quantity as $key => $value) {
    echo "<option value=\"$value\"> $key </option>";
  }
  ?>

</select>











