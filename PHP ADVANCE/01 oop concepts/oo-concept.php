<?php

require "Item.php";

// creating obj
$itemName = new Item();
// $itemName->name = "Absar";
// echo $itemName->name;


$items = new Item();
$items->setName(" Ahmad");
// $items->name = " Ahmad";
echo $items->getName();

