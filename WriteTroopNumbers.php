<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Write Troop numbers</title>

<?php
////////////////////////////////////////////
$playerIdent = $_POST["playerId"];
$coords = $_POST["coords"];
$enemyName = $_POST["enemyName"];
$allianceName = $_POST["allianceName"];
////////////////////////////////////////////
$cityGuards = $_POST["cityGuardNumber"];
$zerks = $_POST["zerkNumber"];
$mages = $_POST["mageNumber"];
$rangers = $_POST["rangerNumber"];
$guardians = $_POST["guardianNumber"];
$templars = $_POST["templarNumber"];
$scouts = $_POST["scoutNumber"];
$knights = $_POST["knightNumber"];
$warlocks = $_POST["warlockNumber"];
$xbows =$_POST["xbowNumber"];
$paladins = $_POST["paladinNumber"];
$rams = $_POST["ramNumber"];
$catapults = $_POST["catapultNumber"];
$ballistas = $_POST["ballistaNumber"];
$frigate = $_POST["frigateNumber"];
$wargalleon = $_POST["wargalleonNumber"];
$sloops = $_POST["sloopNumber"];
$barons = $_POST["baronNumber"];
$isWaterCastle = $_POST["isWaterCastle"];
$extra = $_POST["extraInfo"];
$report = $_POST["reportString"];

//DO A SERVER SIDE VALIDATION
$integerRegex = "/^[0-9]+$/";
$stringPattern = "/^[a-zA-Z0-9 ]*$/";

if(
preg_match($integerRegex, $cityGuards) 
&& preg_match($integerRegex, $zerks) 
&& preg_match($integerRegex, $mages) 
&& preg_match($integerRegex, $rangers)
&& preg_match($integerRegex, $guardians)
&& preg_match($integerRegex, $templars)
&& preg_match($integerRegex, $scouts)
&& preg_match($integerRegex, $knights)
&& preg_match($integerRegex, $warlocks) 
&& preg_match($integerRegex, $xbows)
&& preg_match($integerRegex, $paladins) 
&& preg_match($integerRegex, $rams)
&& preg_match($integerRegex, $catapults)
&& preg_match($integerRegex, $ballistas)
&& preg_match($integerRegex, $frigate)
&& preg_match($integerRegex, $wargalleon)
&& preg_match($integerRegex, $sloops)
&& preg_match($integerRegex, $frigate)
&& preg_match($integerRegex, $barons)
&& preg_match($stringPattern, $extra)
)
{

$con = mysql_connect("loudragonage.lo.funpicsql.org", "mysql1063035","sqladmin123") or die ('Error:' .mysql_error());
mysql_select_db("mysql1063035", $con);

//FIRST we should do a check to see if playerId can be found in our player table (this is to make sure only the people we assign upload data)

$playername ="";
$nameQuery = "SELECT * FROM player WHERE playerId = $playerIdent";

$data = mysql_query($nameQuery);

while($row = mysql_fetch_array( $data ))
{
	$playername = $row['name'];
}

if(!empty($playername))
{

//SMALL CALC TO FIND OUT THE CONTINENT

//coords0 and 4 element and switch them around = cont.
//000:000
//1234567
$zero = '0';
$coordinates = explode(":", $coords);
$first = $coordinates[0];
$second = $coordinates[1];

if( strlen($first) > 2 && strlen($second) > 2 )
{
	$first = $coords{0};
	$second = $coords{4};
	$continent = $second.$first;
}
else
{
	if ( strlen($first) <  3)
	{
		$finalFirst = $zero.$first;
		$finalSecond = $second;
	}
	else if ( strlen($second) < 3)
	{
		$finalSecond = $zero.$second;
		$finalFirst = $first;
	}


	$coords1 = $finalFirst.$finalSecond;

	$first = $coords1{0};
	$second = $coords1{3};
	$continent = $second.$first;
}

$removeIntelQuery = "Delete From city Where coords = '$coords'";

mysql_query($removeIntelQuery);

if($isWaterCastle == "on")
 $isWaterCastle = true;
else
 $isWaterCastle = false;


//IF FIRST 
//INSERT QUERY.
$query="INSERT INTO `city`(`coords`, `continent`, `playername`,`allianceName`, `guards`, `berserker`, `mage`, `ranger`, `guardian`, `templar`, `scout`, `knight`, `warlock`, `crossbowman`, `paladin`, `ram`, `catapult`, `ballista`, `frigate`, `wargalleon`, `sloop`, `baron`,`isWaterCastle`, `extra`, `report` ) VALUES('$coords','$continent','$enemyName','$allianceName','$cityGuards','$zerks','$mages','$rangers','$guardians','$templars','$scouts','$knights','$warlocks','$xbows','$paladins','$rams','$catapults','$ballistas','$frigate','$wargalleon','$sloops','$barons','$isWaterCastle', '$extra', '$report')";


mysql_query($query);


echo "<pre>";
echo"Ty for posting your data ";
print_r($playername);
echo"\n and have a nice day! -Sklipnoty";

}
else
{
	echo "You are not authorized to post data";
}

mysql_close($con);
}
else
{
echo "You need to fill in atleast 0 for troop fields and no special characters anywhere";
}
?>

</head>

<body>
</body>
</html>