<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php
  $token = [];
  $token['token'] = $_POST['token'] ?? '';
  $token['ticker'] = $_POST['ticker'] ?? '';
  $token['quantity'] = $_POST['quantity'] ?? '';
  $token['position'] = $_POST['position'] ?? '';
  $token['visible'] = $_POST['visible'] ?? '';

  $result = insert_token($token);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/tracker/tokens/show.php?id=' . $new_id));

 
} else {
  redirect_to(url_for('/tracker/tokens/new.php'));
}

?>