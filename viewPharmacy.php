<?php
include_once 'db.php';

$PHARMACY_ID = $_GET['PHARMACY_ID'];


$conn = getConnection();

$sql =  "select * from pharmacy where PHARMACY_ID='$PHARMACY_ID'";

$result = oci_parse($conn, $sql);

oci_execute($result);

$row = oci_fetch_assoc($result);

$PHARMACY_ID = $row['PHARMACY_ID'];
$PHRAMACY_NAME = $row['PHRAMACY_NAME'];


// header("../views/PreviousComplain.php");
oci_close($conn);
?>
<!DOCTYPE html>
<html>

<body>

    <h2>Update FOR PHARMACY ID : <?php echo $PHARMACY_ID; ?></h2>

    <form method="post" action="updatePharmacy.php">
        <!-- <label for="fname">PHARMACY ID:</label><br> -->
        <input type="hidden" id="PHARMACY_ID" name="PHARMACY_ID" value="<?php echo $PHARMACY_ID; ?>"><br>
        <label for="lname">PHRAMACY NAME</label><br>
        <input type="text" id="PHRAMACY_NAME" name="PHRAMACY_NAME" value="<?php echo $PHRAMACY_NAME; ?>"><br><br>
        <input type="submit" name="update" value="UPDATE">
    </form>

</body>

</html>

<?php
// if (isset($_POST['login'])) {



//     $PHARMACY_ID = $_REQUEST['PHARMACY_ID'];
//     // $PHARMACY_ID = $_GET['PHARMACY_ID'];
//     $PHRAMACY_NAME = $_REQUEST['PHRAMACY_NAME'];

//     $conn = getConnection();

//     $sql = "UPDATE pharmacy SET PHRAMACY_NAME='" . $PHRAMACY_NAME . "' WHERE PHARMACY_ID='" . $PHARMACY_ID . "'";
//     $result = oci_parse($conn, $sql);

//     $r = oci_execute($result);


//     print_r($r);
//     if ($r) {
//         $error = "update successful";
//     } else {
//         $error = "could not update";
//     }
//     oci_close($conn);
// }
?>