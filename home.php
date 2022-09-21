<?php

include_once 'db.php';

$conn = getConnection();

$sql = "select * from pharmacy";

$result = oci_parse($conn, $sql);



oci_execute($result);

// $userQuery = $connection->ShowComplain($conobj, "complain", $users_id);
// oci_execute($userQuery);
// $row = oci_fetch_assoc($userQuery);
// if (oci_num_rows($userQuery) > 0) {
echo "<br>";
echo ' <a href="addPharmacy.php">ADD PHARMACY</a>';
echo "<br>";
echo "<table border=" . "1" . " ><tr><th>PHARMACY_ID</th><th>PHARMACY_NAME</th><th>Action</th></tr>";
// output data of each row
// print_r($row);
while ($row = oci_fetch_array($result, OCI_RETURN_NULLS + OCI_ASSOC)) {
    echo "<tr><td>" . $row["PHARMACY_ID"] . "</td><td>" . $row["PHRAMACY_NAME"] . "</td><td>" . '<a class="btn btn-sm btn-primary m-1" href="viewPharmacy.php?PHARMACY_ID=' . $row["PHARMACY_ID"] . '">View</a>' .
        ' | ' . '<a class="btn btn-sm btn-danger" href="deletePharmacy.php?PHARMACY_ID=' . $row["PHARMACY_ID"] . '">Delete</a>' . "</td></tr>";
}
echo "</table>";
// $connection->CloseCon($conobj);
oci_close($conn);
