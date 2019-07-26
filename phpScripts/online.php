<?php

function format_word_minutes($time) {
	$num = $time % 10;

	if ($time >= 5 && $time <= 20){
		$res = "минут";
	}
	elseif ($num == 1) {
		$res = "минуту";
	}
	elseif ($num >= 2 && $num <= 4) {
		$res = "минуты";
	}
	else {
		$res = "минут";
	}

	return $res;
}

function format_words_online($time, $what) {
	$time = $time - 1;
	$Array = Array();

	$Array = [
		['час','часа','часа'],
		['месяц','месяца','месяца'],
	];

	return $Array[$what][$time];
}

function format_word_day($time) {
	$num = $time % 10;

	if ($time >= 5 && $time <= 20){
		$res = "дней";
	}
	elseif ($num == 1) {
		$res = "день";
	}
	elseif ($num >= 2 && $num <= 4) {
		$res = "дня";
	}
	else {
		$res = "дней";
	}

	return $res;
}

function str_online($date) {
	$now_date = date("Y-m-d H:i:s");
	$now_date = strtotime($now_date) + (60 * 60 * 3);

	$result = abs($now_date - strtotime($date)) / 60;
	$result = (int)$result;

	if ($result < 5) {
		return "Online";
	}
	elseif ($result >= 5 && $result < 60) {
		return "Заходил(a) " . $result . " " . format_word_minutes($result) . " назад";
	}
	elseif ($result >= 60 && $result < 180) {
		$result = $result / 60;
		return "Заходил(a) " . (int)$result . " " . format_words_online((int)$result, 0) . " назад";
	}
	elseif ($result >= 180 && $result < 1440) {
		return "Был(a) в сети сегодня";
	}
	elseif ($result >= 1440 && $result < 43200) {
		$result = $result / 1440;
		return "Был(a) в сети " . (int)$result ." " . format_word_day((int)$result) . " назад";
	}
	elseif ($result >= 43200 && $result < 129600) {
		$result = $result / 43200;
		return "Был(a) в сети " . (int)$result ." " . format_words_online((int)$result, 1) . " назад";
	}
	else {
		return "Не заходил(a) более 3-ех месяцев";
	}
	return "Offline";
}

?>