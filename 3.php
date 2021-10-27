<?php                                         //1
$number = 0;
while ($number < 100) {
    if ($number % 3 == 0){
        var_dump($number);
    }
    $number++;
}
?>
<?php                                         //2
$number = 0;
do {
    if ($number == 0)
        echo "$number - ноль, ";
    else if ($number % 2 == 0)
        echo "$number - четное число, ";
    else 
        echo "$number - нечетное число, ";
    $number++;
} while ($number <= 10)
?>
<?php                                         //3, 8
$districts = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин', 'Ряжск']
];

foreach ($districts as $index => $item)
{
   echo $index. ' : ' ;
   foreach ($item as $index => $item){
       echo $item . ', ';
   }
} 

foreach ($districts as $index => $item)
{
   echo $index. ' : ' ;
   foreach ($item as $index => $item){
       if(mb_substr($item, 0, 1) == 'К'){
        echo $item . ', ';
       }
   }
}
?>
<?php                                         //4, 5, 9
function trlt($txt) {
	$translit = array ('а' => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i", "й" => "i", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sh", "ь" => "", "ы" => "y", "ъ" => "", "э" => "e", "ю" => "yu", "я" => "ya", " " => " "	);
	$text = '';
	for ($i = 0; $i < mb_strlen($txt); $i++) {
		$text .= $translit[mb_substr($txt, $i, 1)];
	}
	return $text;
}

function nospace ($text) {
    $newtext = '';
	for ($i = 0; $i < mb_strlen($text); $i++) {
		if (mb_substr($text, $i, 1) == " ") {
			$newtext .= "_";
		}
		else {
			$newtext .= mb_substr($text, $i, 1);
		}
	}
	return $newtext;
}

$txt = 'московская область москва зеленоград клин ленинградская область санкт петербург всеволожск павловск кронштадт';

echo nospace (trlt($txt));
?>
<?php                                         //6
$menu = [
    'Главная' => [],
    'Услуги' => ['Разработка сайтов', 'СЕО-оптимизация', 'Контекстная реклама'],
    'О компании' => ['Наша миссия', 'История', 'Портфолио'],
    'Контакты' => []
];

foreach ($menu as $index => $item)
{
   echo '<ul>' . $index;
   foreach ($item as $index => $item){
       echo '<li>' . $item . '</li>';
   } echo '</ul>';
}
?>
<?php                                         //7
for ($i = 0; $i < 10; print $i++ . ' ') {
};
?>