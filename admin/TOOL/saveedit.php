<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$da=$_POST["editval"];
$result = $db_handle->executeUpdate("UPDATE product set " . $_POST["column"] . " = '".strip_tags($da)."' WHERE  product_id=".$_POST["id"]);;
?>