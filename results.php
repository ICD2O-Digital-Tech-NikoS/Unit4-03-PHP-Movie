<?php
  // gets user age from text-field
  $user_age = $_POST["age"];
  // if statement to see if user age is above certain age limits for different movie ratings
  if ($user_age >= 100) {
    echo "Bruv you are a dinosaur, good luck getting out of that chair my boi. L R.I.P";
  } 
  else if ($user_age >= 17) {
    echo "You can see an R rated movie alone.";
  } 
  else if ($user_age >= 13) {
    echo "You can see a PG-13 rated movie alone.";
  } 
  else if ($user_age >= 5) {
    echo "You can see a G or PG rated movie alone.";
  } 
  else {
    echo "Buddy, your younger than 5 years old, go play with toys or something.";
  }
  echo " Thanks for verifying your age!";
