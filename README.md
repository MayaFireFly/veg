Test work with Composer

Компонент визуального редактора, с возможностью его настройки и установки через composer.

Пример использования - код из view-файла


"  <?php

use maya\veg\VegWidget;       //подключаем виджет


use maya\veg\VegAsset;        //подключаем ресурсы для виджета

use maya\veg\VegInitAsset;



VegAsset::register($this);    //регистрируем ресурсы

VegInitAsset::register($this);

?>

Используем виджет здесь "
