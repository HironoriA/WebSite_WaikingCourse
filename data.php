<?php
require_once('course.php');
$dirpath = dirname(__FILE__);

$location1 = new Course('新横浜駅', 7.2, '1時間31分', $dirpath.'\\images\\新横浜駅.jpg', 'https://goo.gl/maps/K2gXc6c34okoeDkQ8');
$location2 = new Course('横浜駅', 12.7, '2時間42分', $dirpath.'\images\横浜駅.jpg', 'https://goo.gl/maps/8zfhGFNEdR4iUzbe7');
$location3 = new Course('永田町駅', 22.3, '4時間47分', $dirpath.'\images\永田町駅.jpg', 'https://goo.gl/maps/mvcbDz6LLhGo8ua77');
$location4 = new Course('渋谷駅', 17.9, '3時間48分', $dirpath.'\images\渋谷駅.jpg', 'https://goo.gl/maps/nx8WTs5yW485NPWK7');
$location5 = new Course('押上駅', 31.3, '6時間42分', $dirpath.'\images\押上駅.jpg', 'https://goo.gl/maps/BYknbH1hioE8Krin6');
$location6 = new Course('みなとみらい', 13.8, '2時間56分', $dirpath.'\images\横浜みなとみらい.jpg', 'https://goo.gl/maps/sPEVt4RTSu1kVbpDA');
$location7 = new Course('川崎駅', 12.1, '2時間31分', $dirpath.'\images\川崎駅.jpg', 'https://goo.gl/maps/T5Y1k7vfvHk7DjAq7');
$location8 = new Course('五反田駅', 17.1, '3時間40分', $dirpath.'\images\五反田駅.jpg', 'https://goo.gl/maps/2xiDpjz8ggWTXgNeA');
$location9 = new Course('新木場駅', 33.1, '7時間5分', $dirpath.'\images\新木場駅.jpg', 'https://goo.gl/maps/9ZhemCchHmhTEuxbA');

$locations = array($location1,$location2, $location3, $location4, $location5, $location6, $location7, $location8, $location9);

?>