<?php

//инициализация автозагрузки и настройки скрипта
require_once __DIR__ . '/init.php';

//определяем язык
$langCode = $_GET['lang'] ?? 'rus';
$lang = new \Services\Lang($langCode);

//по сути не нужно
$globRegion = \Models\GlobRegion::getById(1);

//объявлем итоговый массив
$result = [];

//получаем страны по региону
$countries = \Models\Country::getByArr(['glob_region_id' => $globRegion->id]);
//циклом перебираем страны глобал региона
foreach ($countries as $country) {
    $result[$country->id]['obj'] = $country;
    //получаем регионы
    $regions = \Models\Region::getByArr(['r_country_id' => $country->id]);
    foreach ($regions as $region) {
        $result[$country->id]['regions'][$region->id]['obj'] = $region;
    }
    //получаем города
    $cities = \Models\City::getByArr(['c_country_id' => $country->id]);
    foreach ($cities as $city) {
        if($city->c_region_id == 0) {
            $result[$country->id]['city_without_region'][] = $city;
        } else {
            $result[$country->id]['regions'][$city->c_region_id]['cities'][] = $city;
        }
    }
}




?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$globRegion->{"gr_name_$lang->code"}?></title>
    <style>
        .tooltip {
            position: fixed;
            padding: 10px 20px;
            border-radius: 4px;
            color: #333;
            background: #e380ec;
        }
    </style>
</head>
<body>
<ul>
<?
foreach ($result as $item) {
    echo '<li><span data-tooltip=\''.$item['obj']->{"c_descr_$lang->code"}.'\'>'.$item['obj']->{"c_name_$lang->code"}.'</span></li>';
    if(isset($item["city_without_region"])) {
        echo '<ul>';
        foreach ($item["city_without_region"] as $cityWithoutRegion) {
            echo '<li><span data-tooltip=\''.$cityWithoutRegion->{"c_descr_$lang->code"}.'\'>'.$cityWithoutRegion->{"c_name_$lang->code"}.'</span></li>';
        }
        echo '</ul>';
    }
    if(isset($item["regions"])) {
        echo '<ul style="margin: 15px">';
        foreach ($item["regions"] as $regionItem) {
            if(isset($regionItem["cities"])) {
                echo '<li><span data-tooltip=\''.$regionItem['obj']->{"r_descr_$lang->code"}.'\'>'.$regionItem['obj']->{"r_name_$lang->code"}.'</span></li>';
                echo '<ul>';
                foreach ($regionItem["cities"] as $city) {
                    echo '<li><span data-tooltip=\''.$city->{"c_descr_$lang->code"}.'\'>'.$city->{"c_name_$lang->code"}.'</span></li>';
                }
                echo '</ul>';
            }
        }
        echo '</ul>';

    }
}
?>
</ul>
<p>Языки:
    <?
    foreach ($lang->user_lang as $value) {
        if($lang->code == $value) {
            echo $value.' ';
        } else {
            echo '<a href="?lang='.$value.'">'.$value.'</a> ';
        }
    }
    ?>
</p>

<script>
    let tooltipElem;

    document.onmouseover = function(event) {
        let target = event.target;

        // если у нас есть подсказка...
        let tooltipHtml = target.dataset.tooltip;
        if (!tooltipHtml) return;

        // ...создадим элемент для подсказки

        tooltipElem = document.createElement('div');
        tooltipElem.className = 'tooltip';
        tooltipElem.innerHTML = tooltipHtml;
        document.body.append(tooltipElem);

        // спозиционируем его сверху от аннотируемого элемента (top-center)
        let coords = target.getBoundingClientRect();

        let left = coords.left + (target.offsetWidth - tooltipElem.offsetWidth) / 2;
        if (left < 0) left = 0; // не заезжать за левый край окна

        let top = coords.top - tooltipElem.offsetHeight - 5;
        if (top < 0) { // если подсказка не помещается сверху, то отображать её снизу
            top = coords.top + target.offsetHeight + 5;
        }

        tooltipElem.style.left = left + 'px';
        tooltipElem.style.top = top + 'px';
    };

    document.onmouseout = function(e) {

        if (tooltipElem) {
            tooltipElem.remove();
            tooltipElem = null;
        }

    };
</script>
</body>
</html>
