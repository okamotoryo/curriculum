<?php
// Step 1
$fruits = array(
    "りんご" => 100, // リンゴの単価
    "みかん" => 30, // みかんの単価
    "もも" => 1500 // 桃の単価
);

$quantities = array(3, 5, 2); // リンゴ3個、みかん5個、桃2個

// Step 2
function Cost($price, $quantity) {
    return $price * $quantity;
}

// Step 3
foreach ($fruits as $fruit => $price) {
    $quantity = $quantities[array_search($fruit, array_keys($fruits))];
    $cost = Cost($price, $quantity);
    echo "{$fruit}は{$cost}円です。<br>" ;
}

?>
