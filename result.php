<meta charset='utf8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<?php

//Kiire kalkulaatori programm ( Oldschool way :) ). Autor Martin-Mattias Tarkus. Math klassiga sponsoreerib PHP CLASS veebileht
require 'Math.php';	
$back = '<br><a href="javascript:window.history.back()">Tagasi</a>';
$empty = "<span style='color:red;'>Vali kalkulaatori moodus$back";
function ignore_divide_by_zero($errno, $errstring){
  return ($errstring == 'Division by zero');
}
 if(!isset($_GET['calcMethod'])) {
	echo $empty;
	return false;
	}
$inputOne =   $_GET['inputOne'];
$inputTwo =   $_GET['inputTwo'];
$calcMethod = $_GET['calcMethod'];
switch (true) {
	case ($inputOne || $inputOne == 0 and $inputTwo || $inputTwo == 0  and $calcMethod == 'add'):
	echo '<b>Liitsid ja vastus on: </b>';
	echo  Math::plusNumbers($inputOne,$inputTwo);
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $inputTwo || $inputTwo == 0 and $calcMethod == 'sub'):
	echo '<b>Lahutasid ja vastus on: </b>';
	echo  Math::minusNumbers($inputOne,$inputTwo);
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $inputTwo || $inputTwo == 0 and $calcMethod == 'multiply'):
	echo '<b>Korrutasid ja vastus on: </b>';
	echo  Math::timesNumbers($inputOne,$inputTwo);
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $inputTwo || $inputTwo == 0 and $calcMethod == 'divide'):
	echo '<b>Jagasid ja vastus on: </b>';
	echo  Math::divideNumbers($inputOne,$inputTwo);
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'intNumber'):
	echo '<b>Kasutasid täisarvu INT funktsiooni ja vastus on: </b>';
	echo Math::intNumber($inputOne);
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'absNumber'):
	echo '<b>Kasutasid absouluut numbri funktsiooni ja vastus on: </b>';
	echo Math::absNumber($inputOne);
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'logNumber'):
	echo '<b>Kasutasid LOG numbri funktsiooni ja vastus on: </b>';
	echo Math::logNumber(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $inputTwo || $inputTwo == 0 and $calcMethod == 'powNumber'):
	echo '<b>Kasutasid Võimsuse numbrite funktsiooni ja vastus on: </b>';
	echo  Math::powerNumber($inputOne,$inputTwo);
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'roundNumber'):
	echo '<b>Ümmargune number on: </b>';
	echo Math::roundNumber(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'roundNumber'):
	echo '<b>Ümmargune number on: </b>';
	echo Math::roundNumber(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'sinDegree'):
	echo '<b>Siinuse kraad: </b>';
	echo Math::sinDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'cosDegree'):
	echo '<b>Koosinuse kraad: </b>';
	echo Math::cosDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'tanDegree'):
	echo '<b>Tangensi kraad: </b>';
	echo Math::tanDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'cotDegree'):
	echo '<b>Kootangensi kraad: </b>';
	echo Math::cotDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'arcSinDegree'):
	echo '<b>Arkussiinuse kraad: </b>';
	echo Math::arcSinDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'arcCosDegree'):
	echo '<b>Arkuskoosinuse kraad: </b>';
	echo Math::arcCosDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'arcCotDegree'):
	echo '<b>Arkussiinuse KOT kraad: </b>';
	echo Math::arcCotDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'diffSin'):
	echo '<b>Eristava siinuse vastus on: </b>';
	echo Math::diffSin(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'diffCof'):
	echo '<b>Eristava kootangensi vastus on: </b>';
	echo Math::diffCos(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'diffTan'):
	echo '<b>Eristava tangensi vastus on: </b>';
	echo Math::diffTan(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'diffCot'):
	echo '<b>Eristava kootangensi vastus on: </b>';
	echo Math::diffCot(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne == 0 and $calcMethod == 'secDegree'):
	echo '<b>Sekundi kraad: </b>';
	echo Math::secDegree(number_format((float)$inputOne));
	echo $back;
	break;
	case ($inputOne || $inputOne  == 0 and $calcMethod == 'cosecDegree'):
	set_error_handler('ignore_divide_by_zero', E_WARNING);
	echo '<b>Koosniuse sekundi kraad: </b>';
	echo Math::cosecDegree(number_format((float)$inputOne));
	echo $back;
	break;
	default:
	echo $empty;
	break;
}