<?php

$path    = './36077';
$path = $path."/products_1501-2000.json";
$contents = file_get_contents($path);
$jsonans = json_decode($contents, true);
$finalArray = [
          "Handle",
          "Title",
          "Body (HTML)",
          "Vendor",
          "Standardized Product Type",
          "Custom Product Type",
          "Published",
          "Option1 Name",
          "Option1 Value",
          "Option2 Name",
          "Option2 Value",
          "Variant Inventory Tracker",
          "Variant Inventory Qty",
          "Variant Inventory Policy",
          "Variant Price",
          "Variant Compare At Price",
          "Image Src"
          ];
// echo "<pre>";
// var_dump($jsonans);die;
$csv = 'products_1501-2000.csv';
$file_pointer = fopen($csv, 'w');
fputcsv($file_pointer, $finalArray);
foreach ($jsonans as $value) {
  $tempArray = [];
  if(isset($value['url'])){
    $handle = strtok($value['url'], '?');
    $handle = substr($handle, strrpos($handle, '/') + 1);
    $tempArray['Handle'] = $handle;
  }
  $tempArray['Title'] = isset($value['name']) ? $value['name'] : "";
  
  $tempArray['Body (HTML)'] = isset($value['description']) ? $value['description'] : "";
  $tempArray['Vendor'] = isset($value['brand']) ? $value['brand'] : "";

  if(isset($value['category'])){
    $tempArray['Standardized Product Type'] = $value['category'];
  } else {
    $tempArray['Standardized Product Type'] = "";
  }
  if(isset($value['product_type'])){
    $tempArray['Custom Product Type'] = $value['product_type'];
  }else {
    $tempArray['Custom Product Type'] = "";
  }
  if(isset($value['visibility']) && $value['visibility'] == "published"){
    $tempArray['Published'] = "true";
  } else {
    $tempArray['Published'] = "false";
  }
  if(isset($value['color']) || isset($value['size'])) {
    if(isset($value['color']) && isset($value['size'])) {
        $tempArray['Option1 Name'] = "Color";
        $tempArray['Option1 Value'] = $value['color'];
        $tempArray['Option2 Name'] = "Size";
        $tempArray['Option2 Value'] = $value['size'];
    }else{
      if(isset($value['size'])) {
          $tempArray['Option1 Name'] = "Size";
          $tempArray['Option1 Value'] = $value['size'];
      }

      if(isset($value['color'])) {
          $tempArray['Option1 Name'] = "Color";
          $tempArray['Option1 Value'] = $value['color'];
      }
      
      $tempArray['Option2 Name'] = "";
      $tempArray['Option2 Value'] = "";
    }
      
  }else {
      $tempArray['Option1 Name'] = "";
      $tempArray['Option1 Value'] = "";
      $tempArray['Option2 Name'] = "";
      $tempArray['Option2 Value'] = "";
  }
  $tempArray['Variant Inventory Tracker'] = "shopify";
  if(isset($value['inventory'])){
    $tempArray['Variant Inventory Qty'] = $value['inventory'];
  }else {
    $tempArray['Variant Inventory Qty'] = "";
  }
  $tempArray['Variant Inventory Policy'] = "continue";
  if(isset($value['price'])) {
    $price = explode('.', $value['price']);
    unset($price[0]);
    unset($price[1]);
    $price = implode(".", $price);
    $tempArray['Variant Price'] = $price;
  }else {
    $tempArray['Variant Price'] = "";
  }
  if(isset($value['offer_price'])) {
    $price = explode('.', $value['offer_price']);
    unset($price[0]);
    unset($price[1]);
    $price = implode(".", $price);
    $tempArray['Variant Compare At Price'] = $price;
  }else {
    $tempArray['Variant Compare At Price'] = "";
  }

  if(isset($value['main_image'])) {
    $tempArray['Image Src'] = $value['main_image'];
  }else {
    $tempArray['Image Src'] = "";
  }
  fputcsv($file_pointer, $tempArray);
}



   
// foreach($jsonans as $i){
    // fputcsv($file_pointer, $i);
// }
   
fclose($file_pointer);
  
?>