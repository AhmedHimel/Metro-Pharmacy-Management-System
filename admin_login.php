<?php
session_start();
require_once('login_controller.php');
if (isset($_POST['login'])) {



    $username = $_REQUEST['username'];
    $pass = $_REQUEST['password'];


    $result = validateUser();

    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) {

        $password = $row['EMPLOYEE_PASSWORD'];

        $name = $row['EMPLOYEE_NAME'];


        //			if($username==$name and $pass==$password){

        if ($username == $name and $pass == $password) {


            //echo "success";
            header("location:home.php");
        } else {


            echo "Invalid User";
        }
    }

    oci_free_statement($result);
}
?>

<html>

<head>
    <style>
        body {
            background-color: rgb(204, 204, 204);
        }
    </style>

</head>

<body>
    <form action=" " method="post">

        <fieldset>
            <legend align="center">
                <h1>Welcome to Metro Pharmacy</h1>
            </legend>

            <table align="center">


                <fieldset>
                    <legend align="right">
                        <h2>Login</h2>
                    </legend>
                    <table align="center">
                        <tr>
                            <td>

                                <label class="control-label">Username</label>
                                <input type="text" name="username" class="form-control" required="required" value="">
                                <br><br>

                                <label class="control-label">Password</label>
                                <input type="password" name="password" class="form-control" required="required" value="">
                                <br><br>



                                <button type="submit" name="login" class="btn btn-success">Login</button>


                            </td>
                        </tr>

                    </table>
                </fieldset>


            </table>


        </fieldset>

    </form>

</body>

</html>