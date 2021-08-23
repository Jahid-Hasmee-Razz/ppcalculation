
<?php  
//Product 1 Total Price Calculation

function tshirt_total(&$tshirt_unit_number = 0){
 $total_price1 = $tshirt_unit_number *= 150;
  return $total_price1;
}
$tQuantity = 5;
tshirt_total($tQuantity);
echo "Total T-shirt's Price: " . $tQuantity . " Taka" ."<br>";

//Product 2 Total Price Calculation
function redshoes_total(&$shoes_pair_number = 0){
  $total_price2 = $shoes_pair_number *= 650;
  return $total_price2;
}
$redshoesQuantity = 8;
redshoes_total($redshoesQuantity);
echo "RedShoes Total Price: " . $redshoesQuantity . " Taka". "<br>";

//All Product Price Calculation
function Total(){
  global $tQuantity, $redshoesQuantity;
  return $cart_Total = $tQuantity + $redshoesQuantity;
}
echo "CartTotal = " . Total();
?>
