<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Kiire kalkulaator programm</title>
<script src='jquery.js'></script>
<script>
$(function() {
$('.hideInput').click(function(){
	$('#inputTwo').css('display','none');
});
$('.showInput').click(function(){
	$('#inputTwo').css('display','');
});
});
</script>
</head>
<body>
<div id='container'>
<div id='calculator'>
<form name='calc' id='calc' method='get' action='result.php'>
<label for='choose'><u>Vali arvutus moodus</u></label>
<div id='choose'>
<label for='add'>Liida:</label><input type='radio' name='calcMethod' class='showInput' value='add' id='add'>
<label for='sub'>Lahuta:</label><input type='radio' name='calcMethod' class='showInput' value='sub' id='sub'>
<label for='multiply'>Korruta:</label><input type='radio' name='calcMethod' class='showInput' value='multiply' id='multiply'>
<label for='divide'>Jaga:</label><input type='radio' name='calcMethod' class='showInput' value='divide' id='divide'>
<br>
<label for='intNumber'>Täisarv INT:</label><input type='radio' name='calcMethod' class='hideInput' value='intNumber' id='intNumber'>
<label for='absNumber'>Absoluut number:</label><input type='radio' name='calcMethod' class='hideInput' value='absNumber' id='absNumber'>
<label for='logNumber'>Log number:</label><input type='radio' name='calcMethod' class='hideInput' value='logNumber' id='logNumber'>
<br>
<label for='powNumber'>Võimsuse number:</label><input type='radio' name='calcMethod' class='showInput' value='powNumber' id='powNumber'>
<label for='roundNumber'>Ümmargune number:</label><input type='radio' name='calcMethod' class='hideInput' value='roundNumber' id='roundNumber'>
<br>
<label for='sinDegree'>Siinuse kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='sinDegree' id='sinDegree'>
<label for='cosDegree'>Koosinuse kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='cosDegree' id='cosDegree'>
<label for='tanDegree'>Tangensi kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='tanDegree' id='tanDegree'>
<br>
<label for='cotDegree'>Kootangensi kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='cotDegree' id='cotDegree'>
<label for='arcSinDegree'>Arkussiinuse kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='arcSinDegree' id='arcSinDegree'>
<label for='arcCosDegree'>Arkussiinuse kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='arcCosDegree' id='arcCosDegree'>
<br>
<label for='arcCotDegree'>Arkussiinuse KOT kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='arcCotDegree' id='arcCotDegree'>
<label for='diffSin'>Eristav siinus:</label><input type='radio' name='calcMethod' class='hideInput' value='diffSin' id='diffSin'>
<label for='diffCof'>Eristav kootangens:</label><input type='radio' name='calcMethod' class='hideInput' value='diffCof' id='diffCof'>
<br>
<label for='diffTan'>Eristav tangens:</label><input type='radio' name='calcMethod' class='hideInput' value='diffTan' id='diffTan'>
<label for='diffCot'>Eristava kootangens:</label><input type='radio' name='calcMethod' class='hideInput' value='diffCot' id='diffCot'>
<br>
<label for='secDegree'>Sekundi kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='secDegree' id='secDegree'>
<label for='cosecDegree'>Koosinuse sekundi kraad:</label><input type='radio' name='calcMethod' class='hideInput' value='cosecDegree' id='cosecDegree'>
</div>
<hr>
<label for='inputOne'>Arv üks:</label>
<input type='text' name='inputOne' id='inputOne' style='width:100px;'>
<label for='inputTwo'>Arv kaks:</label>
<input type='text' name='inputTwo' id='inputTwo' style='width:100px;'>
<br>
<input type='submit'  value='Arvuta'>
</form>
</div>
<br>
<hr>
<a href='Kalkulaator.zip'>Lae alla kalkulaatori programm</a>
</div>
</body>
</html>