<?php 
$course_name="Full Stack" ;
$enrolled_students=20;
$price=55.99;
$on_discount=true;
$price_int=(int)$price;
$on_discount_str=$on_discount? 'True': 'False';
echo "Course title: {$course_name}, the language of no bugs <br/>
Enrolled Students: {$enrolled_students} <br/>
Course price: {$price_int} $ USD <br/>
Course on discount: {$on_discount_str}"
?>
