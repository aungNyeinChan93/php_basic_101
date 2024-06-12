<?php

$stringOne = "'I am string one' ";
$stringTwo = "I am String Two";
$stringThree = "I am string three";
$stringFour = "I am string Four";

$myText = <<<LABEL
Lorem ipsum $stringOne dolor, sit amet consectetur adipisicing elit. Ut ducimus voluptate dicta eaque sequi nobis cupiditate totam quidem nisi itaque?
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut ducimus voluptate dicta eaque sequi nobis cupiditate totam quidem nisi itaque?
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut ducimus voluptate dicta eaque sequi nobis cupiditate totam quidem nisi itaque?

LABEL;

$myText2 = <<< 'header'
Lorem ipsum $stringOne dolor, sit amet consectetur adipisicing elit. Ut ducimus voluptate dicta eaque sequi nobis cupiditate totam quidem nisi itaque?
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut ducimus voluptate dicta eaque sequi nobis cupiditate totam quidem nisi itaque?
Lorem ipsum dolor, sit amet consectetur adipisi
header;

$mylove = "I Love You";
$myarray = array("I","Hate","You") ;



require ("string.view.php");