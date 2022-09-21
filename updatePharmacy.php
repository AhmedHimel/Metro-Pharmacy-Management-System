<?php
include_once 'db.php';
if (isset($_REQUEST['update'])) {

    // $id = $_REQUEST['id'];

    $PHARMACY_ID = $_REQUEST['PHARMACY_ID'];
    // $PHARMACY_ID = $_GET['PHARMACY_ID'];
    $PHRAMACY_NAME = $_REQUEST['PHRAMACY_NAME'];

    $conn = getConnection();

    $sql = "UPDATE pharmacy SET PHRAMACY_NAME='" . $PHRAMACY_NAME . "' WHERE PHARMACY_ID='" . $PHARMACY_ID . "'";
    $result = oci_parse($conn, $sql);

    $r = oci_execute($result);


    // print_r($r);
    if ($r) {
        header("Location:home.php");
    } else {
        $error = "could not update";
    }
    oci_close($conn);
}
