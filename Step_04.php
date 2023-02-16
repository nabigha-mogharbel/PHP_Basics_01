<?php
$name="Nabigha";
$position="full-stack web";
$github_url="https://github.com/gk-git";
echo "My name is".$name."I am a ".$position."please check my github link".$github_url." <br/>";
echo "My name is {$name} I am a {$position} please check my github link {$github_url} <br/>";
$sentence='My name is ';
$sentence.=$name;
$sentence.='I am a ';
$sentence.=$position;
$sentence.='Please check my github link ';
$sentence.=$github_url;
echo "{$sentence} <br/>"
?>