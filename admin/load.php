<?php
global $wpdb;
$user_count = $wpdb->get_var( "show tables like 'ind'");
if(count($user_count)==0){
  try {
    $con = new PDO("mysql:host=".$wpdb->dbhost.";dbname=".$wpdb->dbname,$wpdb->dbuser,$wpdb->dbpassword);
    $con->query("");
    $con = null;
  }catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
  }

}

?>
