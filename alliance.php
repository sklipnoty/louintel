<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TroopSender</title>
</head>
<?php
$member = $_POST["allianceMembers"];

if($member != null)
{
$con = mysql_connect("loudragonage.lo.funpicsql.org", "mysql1063035","sqladmin123") or die ('Error:' .mysql_error());
mysql_select_db("mysql1063035", $con);


$sql = "TRUNCATE TABLE `player`";
mysql_query($sql);

//remove headers.
$allianceStep1 = substr($member,54);

//split the string into an array of things => this method is dep. in need of alt.
//$allianceStep2 = $allianceStep1.preg_split("[\"[a-zA-Z0-9]\"]", $allianceStep1, 0, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

$allianceStep2 = explode("\"",$allianceStep1);

//Id	     Rank	Status	     Name	     Title	     Score	 Cities	Role	Last Login
//"26052"	"1111"	"offline"	"AgentZ001"	"Marquess"	"26702"	"5"	"Member"	"2011.08.27 08:25"
//only 1,3,4,5,6,7 are important to us.
//write the array in the db

$baseI = 0;
$counter = 1;
$id="";
$rank ="";
$name="";
$title="";
$score="";
$cities="";
$role="";
$check = false;
$check2 = false;

for ($i = 1; $i < sizeOf($allianceStep2) ; $i++)
{

if($i == 1 + $baseI)
{
$id = $allianceStep2[$i];
}
if($i == 3 + $baseI)
{
$rank = $allianceStep2[$i];
}

if($i == 7 + $baseI)
{
$name = $allianceStep2[$i];
}

if($i == 9 + $baseI)
{
$title = $allianceStep2[$i];
}

if($i == 11 + $baseI)
{
$score = $allianceStep2[$i];
}

if($i == 13 + $baseI)
{
$cities = $allianceStep2[$i];
}

if($i == 15 + $baseI)
{
$role = $allianceStep2[$i];
$check = true;
$check2 = true;
}


if ( $i > $baseI && $check)
{
	if($counter > 0)
	{
		$baseI = $counter *18;
		$counter++;
		$check = false;
	}
	else
	{
		$baseI = 18;
		$counter++;
		$check = false;
	}
}



if($check2)
{
$query="INSERT INTO `player`(`name`,`playerId`, `title`, `rank`, `score`, `cities`, `role`) VALUES ('$name','$id','$title','$rank','$score','$cities','$role')";
$query = stripslashes($query);
mysql_query($query);
}

$check2 = false;

}




mysql_close($con);


echo "<pre>";
echo"Ty for posting your data ";
echo"\n and have a nice day! - Sklipnoty";
}
else
{
echo "<pre>";
echo"Nothing valid filled in.";
}


?>

<body>
</body>
</html>

