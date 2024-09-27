<?php
if (isset($_GET['firstname']) && isset($_GET['lastname'])) //iiset doet dat die niet null / leeg is, en die get haalt uit die link
{
  $firstname = htmlspecialchars($_GET['firstname']); // haalt die ding uit de link en verbind met variable
  $lastname = htmlspecialchars($_GET['lastname']);
  
  echo "get scammed buddy, no free V-bucks, here is your legal name: <br>";
  echo "Your first name is: " . $firstname . "<br>";
  echo "your last name is: " . $lastname . "<br>";
  echo "scammer get scammed";
} 

else 
{
  echo "ermmm error, doe die naam invullen dumbass";
}
?>