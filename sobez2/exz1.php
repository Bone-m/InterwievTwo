Напишите функцию, которая возвращает массив уникальных первых
букв слов переданной в нее строки, отсортированный по возрастанию.
Например: Принимаемое значение – «Если ты будешь злиться на меня
каждый раз, когда я делаю глупость, мне придется прекратить делать
глупости». Возвращаемое значение –
[‘б’, ‘г’, ‘д’, ‘е’, ‘з’, ‘к’, ‘м’, ‘н’, ‘п’, ‘р’, ‘т’, ‘я’].
Можно использовать встроенные функции языка или написать их самостоятельно.
(Вы можете выслать ссылку на GitHub) *

<?php
echo '<br>' . '<br>';
$language = 'Был основан Биллом Гейтсом ещё в далёком 1975 году ';
// $language = strtolower($language);
// echo ' вывод стрроки в нижнем регистре  : ' . $language . '<br>' . '<br>' . '<br>';
$language = explode(" ", $language);
foreach ($language as $value) {
    echo $firstLetter = $value[0] . '<br>';
}

