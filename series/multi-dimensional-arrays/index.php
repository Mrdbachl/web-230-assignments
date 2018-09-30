<?php

$food = array('Healthy'=>
						array('Salad', 'Vegetables', 'Pasta'),
			  'Unhealthy'=>
						array('Pizza','Ice Cream'),
			  'Toppings'=>
						array('Pepperoni','Sausage','Peppers'));

echo $food['Unhealthy'][0].' ';
echo $food['Toppings'][1];
?>