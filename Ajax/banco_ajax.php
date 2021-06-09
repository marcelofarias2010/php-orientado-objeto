<?php
$mysqli = new mysqli("localhost", "root", "senac", "crud");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
FROM customers WHERE customerid = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Código</th>";
echo "<th>Empresa</th>";
echo "<th>Proprietário</th>";
echo "<th>Endereço</th>";
echo "<th>Cidade</th>";
echo "<th>CEP</th>";
echo "<th>País</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $cid . "</td>";
echo "<td>" . $cname . "</td>";
echo "<td>" . $name . "</td>";
echo "<td>" . $adr . "</td>";
echo "<td>" . $city . "</td>";
echo "<td>" . $pcode . "</td>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";

