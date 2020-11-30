<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "8a318358c219477fd312d451974781b9";
$scopes = "read_orders,write_products";
$redirect_uri = "https://frndz-test.herokuapp.com/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
