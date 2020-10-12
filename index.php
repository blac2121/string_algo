<?php

$string = "Hello";
// $string = "hello";
// $string = "*hello";
// $string = "Hello this is a long string";

if (preg_match("/^[A-Z]/", $string)) {
  echo "True";
} else {
  echo "False";
}

?>  