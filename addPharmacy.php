<?php
include_once 'db.php';

if (isset($_POST['submit'])) {

    $conn = getConnection();

    $PHARMACY_ID = $_POST['PHARMACY_ID'];
    $PHRAMACY_NAME = $_POST['PHRAMACY_NAME'];

    $sql = "call pharmacy_insert('" . $PHRAMACY_NAME . "', '" . $PHARMACY_ID . "')";

    $st = oci_parse($conn, $sql);
    $r = oci_execute($st);

    if ($r) {

        header("Location:home.php");
    } else {
        echo  "could not insert";
    }
oci_close($conn);
}

?>
<!DOCTYPE html>
<html>

<body>

    <h2>Add PHARMACY></h2>

    <form method="post" action="">
        <label for="PHARMACY_ID">PHARMACY ID:</label><br>
        <input type="text" id="PHARMACY_ID" name="PHARMACY_ID"><br>
        <label for="PHRAMACY_NAME">PHRAMACY NAME</label><br>
        <input type="text" id="PHRAMACY_NAME" name="PHRAMACY_NAME"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>