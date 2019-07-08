<?php 

function DateWordSt ($date,$word) {
	$timePublishing = strtotime($date);


    $timePublicReady = $word. " " . getTrueDaySS(date('d', $timePublishing)). " ".
      getTrueMonthSS(date('m', $timePublishing)). " в " .date('H', $timePublishing). ':' .date('i', $timePublishing);

    return $timePublicReady;
}

function getTrueDaySS ($day) {
	$trueDay = mb_substr($day,0,1);
	if ($trueDay == 0) {
		return mb_substr($day,1,2);
	} else {
		return $day;
	}
}

function getTrueMonthSS ($month) {
    if ($month == 1) {
    	return "января";
    } elseif ($month == 2) {
    	return "февраля";
    } elseif ($month == 3) {
    	return "марта";
    } elseif ($month == 4) {
    	return "апреля";
    } elseif ($month == 5) {
    	return "мая";
    } elseif ($month == 6) {
    	return "июня";
    } elseif ($month == 7) {
    	return "июля";
    } elseif ($month == 8) {
    	return "августа";
    } elseif ($month == 9) {
    	return "сентября";
    } elseif ($month == 10) {
    	return "октября";
    } elseif ($month == 11) {
    	return "ноября";
    } elseif ($month == 12) {
    	return "декабря";
    } 
}

?>