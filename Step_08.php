<?php
$grocery_list =array("Eggs", "Milk", "Cheese", "Water Pack","Tissues", "Watermelon");
echo "Hello Sir, do you have {$grocery_list[0]}, {$grocery_list[1]}, and {$grocery_list[2]}? Also if you sell fruits can I find a {$grocery_list[5]}? <br/>";
$grocery_list_keyed=array("eggs"=> array("balade", "mazare3"), "Milk" => array('Fresh', 'Taanayel'),"Water Pack" => array("Reem", "Tannourin"));
echo "Hey Sir, Please I need 1 pack of {$grocery_list_keyed["eggs"][1]} eggs and 3 {$grocery_list_keyed["Water Pack"][0]} Water Pack";
?>