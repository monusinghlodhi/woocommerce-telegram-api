<?php
/**
 * Plugin Name: Telegram Bot Plugin
 * Description: An automatic messaging bot plugin created for WordPress WooCommerce that sends messages to Telegram groups when an order is received.
 * Version: 1.0
 * Author: Monu Singh
 * Author URI: https://github.com/monusinghlodhi/woocommerce-telegram-api
 */

 function admin_page_create(){
    add_menu_page("Telegram Settings", "Telegram Settings","manage_options","telegram-settings","telegrambot");
 }

 add_action('admin_menu','admin_page_create');

 function telegrambot(){ ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <?php
  include 'settings.php';
  
 }
 
add_action("woocommerce_thankyou","new_order_information");
 function new_order_information($order_id){
    $order = new WC_Order($order_id);

    $products = "";
    foreach ($order->get_items() as $item_id => $item) {
        $products .= $item->get_name()." ".$item->get_quantity()." Piece, ";
    }


    $invoice_name = $order->get_billing_first_name()." ".$order->get_billing_last_name();
    $telephone = $order->get_billing_phone();

    $message = "";
    $message .= $invoice_name.", User Placed an order ";
    $message .= "User's Phone number : ".$telephone. " ";
    $message .= "Products Purchased : ";
    $message .= $products;

    sendMessage("-1001924212718", $message);

   //  sendMessage("-1001924212718", "Test Woocommerce Message");
 }

 function sendMessage($id, $message){
   $url = "https://api.telegram.org/bot".get_option("token_value")."/sendMessage?chat_id=".$id."&text=".urlencode($message)."&parse_mode=html";
   $ch = curl_init();
   $optionsArray = array(
       CURLOPT_URL => $url,
       CURLOPT_RETURNTRANSFER => true
   );

   curl_setopt_array($ch, $optionsArray);

   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}