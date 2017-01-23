<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  function has_valid_username_format($value) {
  	return preg_match('/\A[0-9A-Za-z\_]+\z/', $value);
  }

  function has_valid_phone_format($value) {
    return preg_match('/\A[0-9\s\(\)\-]+\z/', $value);
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    return strpos($value, '@') !== false && preg_match('/\A[0-9A-Za-z\_\.\@\-]+\z/', $value);;
  }

  /** custom validations **/

  function has_valid_name_format($value) {
  	return preg_match('/\A[A-Za-z\s\-\,\.\']+\z/', $value);
  }

  function has_valid_state_code($value) {
    return preg_match('/\A[A-Z]{2}\z/', $value);
  }

  function checkDuplicateUsername($value, $db) {
	  $sql = "SELECT * FROM users WHERE username = '$value'";
	  $result = db_query($db, $sql);
	  $get_rows = mysqli_num_rows($result);
	  return $get_rows >= 1;
  }
?>
