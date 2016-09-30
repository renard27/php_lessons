<?php

$text = <<<EOT
     GoodId,GoodName,TM,"Вид продукции",Серия,Цвет,Объем,"Все нетто",CatName
33,"Освежитель воздуха Glade морской 300мл",Glade,"ОСВЕЖИТЕЛИ ВОЗДУХА",,,300мл,,"освежители спрей"
34,"Освежитель воздуха Glade цитрусовый 300мл",Glade,"ОСВЕЖИТЕЛИ ВОЗДУХА",,,300мл,,"освежители спрей"
36,"Полироль Pronto д/мебели Антипыль аэрозоль 250мл",Pronto,"ДЛЯ МЕБЕЛИ",,,250мл,,"полироль для чистки"
37,"Средство чистящее Domestos citrus fresh 500мл",Domestos,,,,,,"жидкости для дезинфекции"
41,"Средство чистящее Мистер Мускул д/труб 70г",Mr.Muscle,"ДЛЯ САНТЕХНИКИ",,,,70г,"очиститель водосточных труб"
EOT;
    
    $pattern = '/[\r\n]+/';
    $strings = preg_split ($pattern, $text);

    
    $productType = array();
    
    for ($i=0; $i<count($strings); $i++){
        $productType[$i] = str_getcsv ( $strings[$i], "," );
    }
    
    
   for ($i=1; $i<count($productType); $i++){
       echo $productType[$i][1].'<br>';
   }

