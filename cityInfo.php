<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display</title>
<style>
img
{
	width:37px;
	height:37px;
}
</style>
<?php
$enemyCoords = $_GET["enemyCoords"];

$con = mysql_connect("loudragonage.lo.funpicsql.org", "mysql1063035","sqladmin123") or die ('Error:' .mysql_error());
mysql_select_db("mysql1063035", $con);

$cityQuery = "SELECT * FROM city WHERE coords = '$enemyCoords'";

$data = mysql_query($cityQuery);

while($row = mysql_fetch_array( $data ))
{
	$cityGuards = $row["guards"];
	$zerks = $row["berserker"];
	$mages = $row["mage"];
	$rangers = $row["ranger"];
	$guardians = $row["guardian"];
	$templars = $row["templar"];
	$scouts = $row["scout"];
	$knights = $row["knight"];
	$warlocks = $row["warlock"];
	$xbows =$row["crossbowman"];
	$paladins = $row["paladin"];
	$rams = $row["ram"];
	$catapults = $row["catapult"];
	$ballistas = $row["ballista"];
	$frigate = $row["frigate"];
	$wargalleon = $row["wargalleon"];
	$sloops = $row["sloop"];
	$barons = $row["baron"];
	$isWaterCastle = $row["isWaterCastle"];
	$extra = $row["extra"];
	$report = $row["report"];
}

?>

</head>

<body>
<table border="1">
<tr>
<th> Troop type </th>
<th> Number </th>
</tr>

<?php
if($cityGuards > 0)
{
echo "<tr>";
echo '<td> <img src="Images/Units/icon_units_cityguard.png" alt="cg"/> </td>';
echo "<td>$cityGuards</td>";
echo "</tr>";
}
if($zerks > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_berserker.png" alt="zerk"/> </td>';
echo "<td>$zerks</td>";
echo "</tr>";
}
 if($mages > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_mage.png" alt="mage"/> </td>';
echo "<td>$mages</td>";
echo "</tr>";
}
 if($rangers > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_ranger.png" alt="ranger"/> </td>';
echo "<td>$rangers</td>";
echo "</tr>";
}
 if($guardians > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_guardian.png" alt="guardian"/> </td>';
echo "<td>$guardians</td>";
echo "</tr>";
}
 if($templars > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_templar.png" alt="templar"/> </td>';
echo "<td>$templars</td>";
echo "</tr>";
}
 if($scouts > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_scout.png" alt="scout"/> </td>';
echo "<td>$scouts</td>";
echo "</tr>";
}
 if($knights > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_knight.png" alt="knight"/> </td>';
echo "<td>$knights</td>";
echo "</tr>";
}
 if($warlocks > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_warlock.png" alt="warlock"/> </td>';
echo "<td>$warlocks</td>";
echo "</tr>";
}
 if($xbows > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_crossbow.png" alt="xbow"/> </td>';
echo "<td>$xbows</td>";
echo "</tr>";
}
 if($paladins > 0 )
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_paladin.png" alt="paladin"/> </td>';
echo "<td>$paladins</td>";
echo "</tr>";
}
 if($rams > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_ram.png" alt="ram"/> </td>';
echo "<td>$rams</td>";
echo "</tr>";
}
 if($catapults > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_catapult.png" alt="catapult"/> </td>';
echo "<td>$catapults</td>";
echo "</tr>";
}
 if($ballistas > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_ballista.png" alt="ballista"/> </td>';
echo "<td>$ballistas</td>";
echo "</tr>";
}
 if($frigate > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_frigate.png" alt="frigate"/> </td>';
echo "<td>$frigate</td>";
echo "</tr>";
}
 if($wargalleon > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_wargalleon.png" alt="wg"/> </td>';
echo "<td>$wargalleon</td>";
echo "</tr>";
}
 if($sloops > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_barge.png" alt="sloop"/> </td>';
echo "<td>$sloops</td>";
echo "</tr>";
}
 if($barons > 0)
{
echo "<tr>";
echo '<td><img src="Images/Units/icon_units_baron.png" alt="baron"/> </td>';
echo "<td>$barons</td>";
echo "</tr>";
}
if(!empty($report))
{
echo "<tr>";
echo '<th colspan="2"> Report </th>';
echo "</tr>";
echo"<tr>";
echo'<td colspan="2">'; 
echo "$report";
echo "</td>";
echo"</tr>";
}
if(!empty($extra))
{
echo "<tr>";
echo '<th colspan="2"> Extra info </th>';
echo "</tr>";
echo"<tr>";
echo'<td colspan="2">'; 
echo "$extra";
echo "</td>";
echo"</tr>";
}

?>

</table>
</body>
</html>