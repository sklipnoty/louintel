<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>intel uploading form</title>

<?php
$playerIdent = $_GET["player"];
$enemyCoords = $_GET["enemyCoords"];
$enemyName = $_GET["enemyName"];
$allianceName = $_GET["allianceName"];
?>
<style>
#content input.txt
{
	padding-left:5px;
}

#content img
{
	width:37px;
	height:37px;
}

.error {
    font: normal 10px arial;
    padding: 3px;
    margin: 3px;
    background-color: #ffc;
    border: 1px solid #c00;
}
</style>


</head>

<body>
<div id="content">
<p>You are uploading intel on:</p>
<p>Name: <?PHP echo $enemyName ?> ,
  AllianceName: <?PHP echo $allianceName ?> ,
  Coords:   <?PHP echo $enemyCoords ?>.</p>
<form id="intelUpload" name="intelUpload"  method="post" action="WriteTroopNumbers.php" onsubmit="return validateForm()">
  <table border="1">
    <tr>
      <td><img src="Images/Units/icon_units_cityguard.png" alt="cg" />
        <label for="cityGuardNumber"></label>
        <input type="text" name="cityGuardNumber" id="cityGuardNumber" value="0" size="15x" class="required integer" /></td>
      <td><img src="Images/Units/icon_units_berserker.png" width="56" height="56" alt="zerk" />
        <label for="zerkNumber"></label>
        <input type="text" name="zerkNumber" id="zerkNumber"value="0" size="15x" class="required integer" /></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_mage.png" width="56" height="56" alt="mage" />
        <label for="mageNumber"></label>
        <input type="text" name="mageNumber" id="mageNumber" value="0" size="15x"/></td>
      <td><img src="Images/Units/icon_units_ranger.png" width="56" height="56" alt="ranger" />
        <label for="rangerNumber">
          <input type="text" name="rangerNumber" id="rangerNumber" value="0" size="15x" />
        </label></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_guardian.png" width="56" height="56" alt="guardian" />
        <label for="guardianNumber"></label>
        <input type="text" name="guardianNumber" id="guardianNumber" value="0" size="15x"/></td>
      <td><img src="Images/Units/icon_units_templar.png" width="56" height="56" alt="templar" />
        <label for="templarNumber"></label>
        <input type="text" name="templarNumber" id="templarNumber" value="0" size="15x" /></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_scout.png" width="56" height="56" alt="scout" />
        <label for="scoutNumber"></label>
        <input type="text" name="scoutNumber" id="scoutNumber" value="0" size="15x" /></td>
      <td><img src="Images/Units/icon_units_knight.png" width="56" height="56" alt="knight" />
        <label for="knightNumber"></label>
        <input type="text" name="knightNumber" id="knightNumber" value="0" size="15x"/></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_warlock.png" width="56" height="56" alt="warlock" />
        <label for="warlockNumber"></label>
        <input type="text" name="warlockNumber" id="warlockNumber" value="0" size="15x" /></td>
      <td><img src="Images/Units/icon_units_crossbow.png" width="56" height="56" alt="crossbow" />
        <label for="xbowNumber"></label>
        <input type="text" name="xbowNumber" id="xbowNumber" value="0" size="15x" /></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_paladin.png" width="56" height="56" alt="paladin" />
        <label for="paladinNumber"></label>
        <input type="text" name="paladinNumber" id="paladinNumber" value="0" size="15x" /></td>
      <td><img src="Images/Units/icon_units_ram.png" width="56" height="56" alt="ram" />
        <label for="ramNumber"></label>
        <input type="text" name="ramNumber" id="ramNumber" value="0" size="15x" /></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_catapult.png" width="56" height="56" alt="catapult" />
        <label for="catapultNumber"></label>
        <input type="text" name="catapultNumber" id="catapultNumber" value="0" size="15x"/></td>
      <td><img src="Images/Units/icon_units_ballista.png" width="56" height="56" alt="ballista" />
        <label for="ballistaNumber"></label>
        <input type="text" name="ballistaNumber" id="ballistaNumber" value="0" size="15x"/></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_frigate.png" width="56" height="56" alt="frigate" />
        <label for="frigateNumber"></label>
        <input type="text" name="frigateNumber" id="frigateNumber"value="0" size="15x" /></td>
      <td><img src="Images/Units/icon_units_wargalleon.png" width="56" height="56" alt="wargalleon" />
        <label for="wargalleonNumber"></label>
        <input type="text" name="wargalleonNumber" id="wargalleonNumber" value="0" size="15x"/></td>
    </tr>
    <tr>
      <td><img src="Images/Units/icon_units_barge.png" width="56" height="56" alt="sloop" />
        <label for="sloopNumber"></label>
        <input type="text" name="sloopNumber" id="sloopNumber" value="0" size="15x"/></td>
      <td><img src="Images/Units/icon_units_baron.png" width="56" height="56" alt="baron" />
        <label for="baronNumber"></label>
        <input type="text" name="baronNumber" id="baronNumber" value="0" size="15x"/></td>
    </tr>
  </table>
  <p>Water castle? 
    
    <input type="checkbox" name="isWaterCastle" id="isWaterCastle" />
    <label for="isWaterCastle"></label>
  </p>
  <p>Report-string: 
    <label for="reportString"></label>
    <input type="text" name="reportString" id="reportString" size="45" />
  </p>
  <p>Extra info: 
    <label for="extraInfo"></label>
    <input type="text" name="extraInfo" id="extraInfo" size="50" />

    <label for="playerId"></label>
    <input type="text" name="playerId" id="playerId"  value="<?PHP echo $playerIdent ?>" style="visibility:hidden" readonly="readonly" />
    <label for="enemyCoords"></label>
    <input type="text" name="coords" id="coords"value="<?PHP echo $enemyCoords ?>" style="visibility:hidden" readonly="readonly" />
    <label for="enemyName"></label>
    <input type="text" name="enemyName" id="enemyName"  value="<?PHP echo $enemyName ?>"  style="visibility:hidden" readonly="readonly" />
    <label for="enemyCityName"></label>
    <input type="text" name="allianceName" id="allianceName"  value="<?PHP echo $allianceName ?>" style="visibility:hidden" readonly="readonly" />
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit" />
</p>

</form>
<p>&nbsp;</p>
</div>
</body>
</html>