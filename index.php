<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Lesson3</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div class="main">

    <!--            **********   ВНИМАНИЕ!!!
                    **********   НЕ ЗАБУДЬТЕ ДОБАВИТЬ style.css!
                    **********   ИНАЧЕ БУДЕТ НЕКРАСИВО ;(
    -->

    <!--    ВЫПОЛНИЛ РЕНАТ М-->

    <h3>Домашняя работа №3</h3>
    <br>
    <hr>
    <br>
    <p>Задание №1</p>
    <br>
    <div>С&nbsp;помощью цикла while вывести все числа в&nbsp;промежутке от&nbsp;0&nbsp;до&nbsp;100, которые делятся
        на&nbsp;3&nbsp;без остатка.
    </div>
    <br>
    <div class="answer">
        <?php

        function divideOnThree($fromNum, $toNum)
        {
            // дополнительная проверка на случай, если первой число больше второго
            if ($fromNum > $toNum) {
                $num = $fromNum;
                $fromNum = $toNum;
                $toNum = $num;
            }
            while ($fromNum <= $toNum) {
                if ($fromNum % 3 == 0) {
                    if (($toNum - $fromNum) <= 3) { // убираем запятую после последней цифры
                        echo $fromNum;
                    } else {
                        echo $fromNum . ', ';
                    }
                }
                $fromNum++;
            }

        }

        divideOnThree(0, 100);

        ?>
    </div>
    <br>
    <hr>
    <br>
    <p>Задание №2</p>
    <br>
    <div>С&nbsp;помощью цикла do...while написать функцию для вывода чисел от&nbsp;0&nbsp;до&nbsp;10, чтобы результат
        выглядел так:

        0&nbsp;&mdash; это ноль.
        1&nbsp;&mdash; нечетное число.
        2&nbsp;&mdash; четное число.
        3&nbsp;&mdash; нечетное число.
        ...
        10&nbsp;&mdash; четное число.
    </div>
    <br>
    <div class="answer">
        <?php

        function whatNum($fromNum, $toNum)
        {
            do {
                if ($fromNum == 0) {
                    echo '0&nbsp;&nbsp;это ноль' . '<br>';
                }
                $fromNum++;
                if ($fromNum % 2 == 0) {
                    echo $fromNum . '&nbsp;&nbsp;четное число' . '<br>';
                } else {
                    echo $fromNum . '&nbsp;&nbsp;нечетное число' . '<br>';
                }


            } while ($fromNum < $toNum);

        }

        whatNum(0, 10);

        ?>
    </div>
    <br>
    <hr>
    <br>
    <p>Задание №3</p>
    <br>
    <div>Объявить массив, в&nbsp;котором в&nbsp;качестве ключей будут использоваться названия областей, а&nbsp;в&nbsp;качестве
        значений&nbsp;&mdash; массивы с&nbsp;названиями городов из&nbsp;соответствующей области. Вывести в&nbsp;цикле
        значения массива, чтобы результат был таким:

        Московская область:
        Москва, Зеленоград, Клин
        Ленинградская область:
        Санкт-Петербург, Всеволожск, Павловск, Кронштадт
        Рязанская область ... (названия городов можно найти на&nbsp;maps.yandex.ru)
    </div>
    <br>
    <div class="answer">
        <?php
        $districts = [
            'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
            'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
            'Рязанская область' => ['Рязань', 'Скопин', 'Кадом'],
            'Астраханская область' => ['Астрахань', 'Камызяк', 'Нариманов', 'Харабали', 'Красный Яр'],
        ];
        foreach ($districts as $district => $cities) {

            echo $district . ' : ';
            $i = 0;
            foreach ($cities as $city) {
                // Добавляем точку в конце, вместо запятой
                if ($i == count($cities) - 1) {
                    echo $city . '. ';
                } else {
                    echo $city . ', ';
                }
                $i++;
            }
            echo '<br>';
        }

        ?>
    </div>
    <br>
    <hr>
    <br>
    <p>Задание №4</p>
    <br>
    <div>Объявить массив, индексами которого являются буквы русского языка, а&nbsp;значениями&nbsp;&mdash;
        соответствующие латинские буквосочетания (&lsquo;а&rsquo;=&gt; &rsquo;a&rsquo;, &lsquo;б&rsquo; =&gt; &lsquo;b&rsquo;,
        &lsquo;в&rsquo; =&gt; &lsquo;v&rsquo;, &lsquo;г&rsquo; =&gt; &lsquo;g&rsquo;, ..., &lsquo;э&rsquo; =&gt; &lsquo;e&rsquo;,
        &lsquo;ю&rsquo; =&gt; &lsquo;yu&rsquo;, &lsquo;я&rsquo; =&gt; &lsquo;ya&rsquo;).

        Написать функцию транслитерации строк.
    </div>
    <br>
    <div class="answer">
        <?php
        mb_regex_encoding('UTF-8');
        mb_internal_encoding("UTF-8");
        $alphabet = [
            // строчные буквы
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
            'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm',
            'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
            'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '\'',
            'ы' => 'i', 'ь' => '\'', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
            // прописные буквы
            'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO',
            'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I', 'Й' => 'I', 'К' => 'K', 'Л' => 'L', 'М' => 'M',
            'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
            'Ф' => 'F', 'Х' => 'KH', 'Ц' => 'TS', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '\'',
            'Ы' => 'I', 'Ь' => '\'', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA'
        ];

        $myString = 'Написать функцию транслитерации строк.';

        function transLetter($string, $abc)
        {

//           $stringToArray = explode("",$string); // это не работает 'Empty delimiter'

//           for($i=0;$i<strlen($string);$i++){   // это не работает
//               $stringToArray[]=$string[$i];
//            }

//           $stringToArray = str_split($string);  // это не работает N�a�p�i�s�a�t�'�

//            for ($i=0;$i<count($stringToArray);$i++){   // такой вывод не работает
//                echo $stringToArray[i].$stringToArray[i+1].'--';
//            }

            // посколько вышеупомянутые способы не работают, по крайней мере у меня, пришлось применить рег. выражения
            // разбиваем строку на массив символов
            $stringToArray = preg_split('//u', $string);
            // эти переменные пригодятся для определения символов и знаков, не относящихся к русскому алфавиту
            $a = 0;
            $b = 0;
            $arrayToString = [];

            foreach ($stringToArray as $rusLetter) {
                foreach ($abc as $abcRus => $abcEng) {

                    if ($rusLetter == $abcRus) {
                        $arrayToString[] = $abcEng;
                        $b++; // это означает, что нашлось совпадение
                        break;
                    }
                }
                if ($a == $b) { // это означает, что совпадений не было, значит символ не из русского алфавита
                    $arrayToString[] = $rusLetter; //учитываем пробелы и прочие знаки и символы
                }
                $a = $b;
            }
            $string = implode($arrayToString);
            return $string;

        }

        echo transLetter($myString, $alphabet);

        ?>
    </div>
    <br>
    <hr>
    <br>
    <p>Задание №5</p>
    <br>
    <div>Написать функцию, которая заменяет в&nbsp;строке пробелы на&nbsp;подчеркивания и&nbsp;возвращает видоизмененную
        строчку.
    </div>
    <br>
    <div class="answer">
        <?php
        $myString2 = 'Написать функцию, которая заменяет в строке пробелы на подчеркивания.';
        function changeSpace($string)
        {
            return str_replace(' ', '_', $string);
        }

        echo changeSpace($myString2);

        ?>
    </div>
    <br>
    <hr>
    <br>
    <p>Задание №6</p>
    <br>
    <div>В&nbsp;имеющемся шаблоне сайта заменить статичное меню (ul&nbsp;&mdash; li) на&nbsp;генерируемое через PHP.
        Необходимо представить пункты меню как элементы массива и&nbsp;вывести их&nbsp;циклом. Подумать, как можно
        реализовать меню с&nbsp;вложенными подменю? Попробовать его реализовать.
    </div>
    <br>
    <div class="answer">

        <?php
        // создаем массив, в котором в одном пункте тоже есть массив, будет как выпадающее меню
        $myMenu = [
            'Компания' => false,
            'Продукция' => ['Одежда', 'Обувь', 'Сумки'],
            'О нас' => false,
            'Контакты' => false,
            'Цены' => false
        ];

        function createMenu($Menu)
        {

            echo '<ul class="list">';
            foreach ($Menu as $menuList => $menuListData) {

                if ($menuListData) {
                    echo '<li class="withSubMenu">' . $menuList . '<ul class="subMenu">';

                    foreach ($menuListData as $listData) {
                        echo '<li>' . $listData . '</li>';
                    }
                    echo '</ul></li>';

                } else {
                    echo '<li>' . $menuList . '</li>';
                }
            }
            echo '</ul>';
        }

        createMenu($myMenu);

        ?>
    </div>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <p>Задание №7*</p>
    <br>
    <div>Вывести с&nbsp;помощью цикла for числа от&nbsp;0&nbsp;до&nbsp;9, НЕ&nbsp;используя тело цикла. То&nbsp;есть
        выглядеть должно так:

        for (...){ // здесь пусто}
    </div>
    <br>
    <div class="answer">
        <?php
        for ($i = 0; $i < 10; print ($i++ . ' ')) {
        };
        ?>
    </div>
    <br>
    <hr>
    <br>
    <p>Задание №8*</p>
    <br>
    <div>Повторить третье задание, но&nbsp;вывести на&nbsp;экран только города, начинающиеся с&nbsp;буквы &laquo;К&raquo;.
    </div>
    <br>
    <div class="answer">

        <?php
        $districts = [
            'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
            'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
            'Рязанская область' => ['Рязань', 'Скопин', 'Кадом'],
            'Астраханская область' => ['Астрахань', 'Камызяк', 'Нариманов', 'Харабали', 'Красный Яр'],
        ];
        foreach ($districts as $district => $cities) {

            echo $district . ' : ';
            $i = 0;
            foreach ($cities as $city) {
                if ($city[0] . $city[1] == 'К') {
                    if ($i == count($cities) - 1) {
                        echo $city . '. ';
                    } else {
                        echo $city . ', ';
                    }
                }
                $i++;
            }
            echo '<br>';
        }

        ?>

    </div>
    <br>
    <hr>
    <br>
    <p>Задание №9*</p>
    <br>
    <div>Объединить две ранее написанные функции в&nbsp;одну, которая получает строку на&nbsp;русском языке, производит
        транслитерацию и&nbsp;замену пробелов на&nbsp;подчеркивания (аналогичная задача решается при конструировании
        url-адресов на&nbsp;основе названия статьи в&nbsp;блогах).
    </div>
    <br>
    <div class="answer">

        <?php
        $myString3 = 'Объединить две ранее написанные функции в одну, которая получает строку на русском языке.';
        function transForUrl($string, $abc)
        {
            return changeSpace(transLetter($string, $abc));
        }

        echo transForUrl($myString3, $alphabet);
        ?>

    </div>
    <br>
    <hr>
    <br>
    <p>Задание №10*</p>
    <br>
    <div>Написать функцию get_missed_number($sequence)
        массив $sequence&nbsp;&mdash; арифметическая прогрессия, в&nbsp;которой пропущено одно число (в&nbsp;середине,
        не&nbsp;первое и&nbsp;не&nbsp;последнее)
        функция возвращает это число или false , если в&nbsp;массиве меньше двух элементов
        примеры
        [] вернуть false
        [12] =&gt; false
        [1,11] =&gt; 6
        [1,11,31] =&gt; 21
        [1,21,31,41] =&gt; 11
    </div>
    <br>
    <div class="answer">

        <?php
        $arr = [1,21,31,41];
        function get_missed_number($sequence)
        {
            $findNum = NULL;
            $breakCircle = 0;
            for ($i = 1; $i < count($sequence); $i++) {
                $breakCircle = $i;
                if ($sequence[$i] - $sequence[$i - 1] == $sequence[$i + 1] - $sequence[$i]) {
                    $addNum = $sequence[$i] - $sequence[$i - 1];
                    for ($j = 0; $j < count($sequence)-1; $j++) {
                        if (($sequence[$j] + $addNum) != $sequence[$j + 1]) {
                            $findNum = $sequence[$j] + $addNum;
                            break;
                        }
                    }
                }
            };
            if ($breakCircle < 1) {
                return 'false';
            };
            return $findNum;
        }

      echo  get_missed_number($arr);

        ?>

    </div>
    <br>
    <hr>
    <br>
</div>
</body>

</html>
