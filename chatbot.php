<?php
if (isset($_POST['user_name']) && isset($_POST['cat_name'])) {
  // include chat functionality
  include_once 'chat.php';
}
else {
  // clear input fields
  $user_name = '';
  $cat_name = '';

  // include the form
  include_once 'form.php';
}

?>