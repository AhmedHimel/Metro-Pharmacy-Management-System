<?php

include_once 'db.php';

$PHARMACY_ID = $_GET['PHARMACY_ID'];
$conn = getConnection();

$sql = "DELETE FROM pharmacy WHERE PHARMACY_ID = '$PHARMACY_ID'";
$result = oci_parse($conn, $sql);

$r = oci_execute($result);

if ($r) {

    header("Location:home.php");
} else {
    echo  "can not delete";
}
