<?php 
session_start(); 
include_once dirname(__FILE__) ('model/dbconnect.php');

include_once dirname(__FILE__) ('model/m_user.php');
?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

//get all data of user table
$m_user = new m_User();
$userlist = $m_user->getAllUser();
$returnview = array('UserList'=>$userlist);
$emaillist = $returnview['UserList'];


echo "<table>
<tr>
<th>UserId</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>";
foreach ($emaillist as $row){
    echo "<tr>";
    echo "<td>" . $row->UserId. "</td>";
    echo "<td>" . $row->Name. "</td>";
    echo "<td>" . $row->Email . "</td>";
    echo "<td>" . $row->Password . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>