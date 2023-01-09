<?php
/* Данные к персому заданию */
$a1=$a2=$b1=$b3=0;//сразу присваиваем 0 ко всем необходимым переменным
$a3=$a4=$b2=$b4=1;//сразу присваиваем 1 ко всем необходимым переменным
/* Данные ко второму заданию */
$x1=$y1=true;
$x2=$y2=false;
$x3=$y3=1;
$x4=$y4=0;
$x5=$y5=-1;
$x6=$y6="1";
$x7=$y7=null;
$x8=$y8="php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- В блоке изменил название сайта -->
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ТАБЛИЦЫ ИСТИННОСТИ И СРАВНЕНИЯ</title>
</head>
<body>
    <header>
        <h1 class="text-center">ТАБЛИЦЫ ИСТИННОСТИ И СРАВНЕНИЯ</h1>
        <hr>
    </header>
    <main>
        <section>
            <article class="container">
                <h2 align="center">Таблица истинности <i>PHP</i></h2>                
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <th>
                                <strong>A</strong>
                            </th>
                            <th>
                                <strong>B</strong>
                            </th>
                            <th>
                                <strong>!A</strong>
                            </th>
                            <th>
                                <strong>A || B</strong>
                            </th>
                            <th>
                                <strong>A && B</strong>
                            </th>
                            <th>
                                <strong>A xor B</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$a1; //используем сокращенную запись и выводим сразу в нужную ячейку ?></td>
                            <td><?=$b1?></td>
                            <td><?=!$a1?></td>
                            <td><?php echo (int)$or= $a1 || $b1; //Чтобы ноль показался - пришлось ввести новую переменную ?></td>
                            <td><?=(int)$and=$a1 && $b1 ?></td>
                            <td><?=(int)$xor = $a1 ^ $b1;//по непонятной мне причине, не мог вывести ноль, пока не заменил xor на знак ^ ?></td>
                        </tr>
                        <tr>
                            <td><?=$a2?></td>
                            <td><?=$b2?></td>
                            <td><?=!$a2?></td>
                            <td><?=$a2 || $b2 ?></td>
                            <td><?=(int)$and=$a2 && $b2 ?></td>
                            <td><?=$a2 xor $b2 ?></td>
                        </tr>
                        <tr>
                            <td><?=$a3?></td>
                            <td><?=$b3?></td>
                            <td><?=(int)!$a3; //преобразуем в число, чтобы показывался ноль, а не пустота ?></td>
                            <td><?=$a3 || $b3 ?></td>
                            <td><?=(int)$and=$a3 && $b3 ?></td>
                            <td><?=$a3 xor $b3 ?></td>
                        </tr>
                        <tr>
                            <td><?=$a4?></td>
                            <td><?=$b4?></td>
                            <td><?=(int)!$a4?></td>
                            <td><?=$a4 || $b4 ?></td>
                            <td><?=$a4 && $b4 ?></td>
                            <td><?=(int)$xor = $a4 ^ $b4; ?></td>
                        </tr>
                    </tbody>
                </table>
            </article>
         </section>
         <section>
            <article class="container">
                <h2 align="center">Гибкое сравнение в <i>PHP</i></h2>
                <table class="table table-striped table-secondary text-center">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?=var_export($x1)//аналог var_dump, но не выводит тип данных ?></th>
                            <th><?=var_export($x2)?></th>
                            <th><?=$x3?></th>
                            <th><?=$x4?></th>
                            <th><?=$x5?></th>
                            <th><?=var_export($x6)?></th>
                            <th><?var_export($x7)?></th>
                            <th><?=var_export($x8)?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?=var_export($y1)?></strong></td>
                            <td><?var_dump($x1==$y1)?></td>
                            <td><?var_dump($x2==$y1)?></td>
                            <td><?var_dump($x3==$y1)?></td>
                            <td><?var_dump($x4==$y1)?></td>
                            <td><?var_dump($x5==$y1)?></td>
                            <td><?var_dump($x6==$y1)?></td>
                            <td><?var_dump($x7==$y1)?></td>
                            <td><?var_dump($x8==$y1)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=var_export($y2)?></strong></td>
                            <td><?var_dump($x1==$y2)?></td>
                            <td><?var_dump($x2==$y2)?></td>
                            <td><?var_dump($x3==$y2)?></td>
                            <td><?var_dump($x4==$y2)?></td>
                            <td><?var_dump($x5==$y2)?></td>
                            <td><?var_dump($x6==$y2)?></td>
                            <td><?var_dump($x7==$y2)?></td>
                            <td><?var_dump($x8==$y2)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=$y3?></strong></td>
                            <td><?var_dump($x1==$y3)?></td>
                            <td><?var_dump($x2==$y3)?></td>
                            <td><?var_dump($x3==$y3)?></td>
                            <td><?var_dump($x4==$y3)?></td>
                            <td><?var_dump($x5==$y3)?></td>
                            <td><?var_dump($x6==$y3)?></td>
                            <td><?var_dump($x7==$y3)?></td>
                            <td><?var_dump($x8==$y3)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=$y4?></strong></td>
                            <td><?var_dump($x1==$y4)?></td>
                            <td><?var_dump($x2==$y4)?></td>
                            <td><?var_dump($x3==$y4)?></td>
                            <td><?var_dump($x4==$y4)?></td>
                            <td><?var_dump($x5==$y4)?></td>
                            <td><?var_dump($x6==$y4)?></td>
                            <td><?var_dump($x7==$y4)?></td>
                            <td><?var_dump($x8==$y4)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=$y5?></strong></td>
                            <td><?var_dump($x1==$y5)?></td>
                            <td><?var_dump($x2==$y5)?></td>
                            <td><?var_dump($x3==$y5)?></td>
                            <td><?var_dump($x4==$y5)?></td>
                            <td><?var_dump($x5==$y5)?></td>
                            <td><?var_dump($x6==$y5)?></td>
                            <td><?var_dump($x7==$y5)?></td>
                            <td><?var_dump($x8==$y5)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=var_export($y6)?></strong></td>
                            <td><?var_dump($x1==$y6)?></td>
                            <td><?var_dump($x2==$y6)?></td>
                            <td><?var_dump($x3==$y6)?></td>
                            <td><?var_dump($x4==$y6)?></td>
                            <td><?var_dump($x5==$y6)?></td>
                            <td><?var_dump($x6==$y6)?></td>
                            <td><?var_dump($x7==$y6)?></td>
                            <td><?var_dump($x8==$y6)?></td>
                        </tr>
                        <tr>
                            <td><strong><?var_export($y7) ?></strong></td>
                            <td><?var_dump($x1==$y7)?></td>
                            <td><?var_dump($x2==$y7)?></td>
                            <td><?var_dump($x3==$y7)?></td>
                            <td><?var_dump($x4==$y7)?></td>
                            <td><?var_dump($x5==$y7)?></td>
                            <td><?var_dump($x6==$y7)?></td>
                            <td><?var_dump($x7==$y7)?></td>
                            <td><?var_dump($x8==$y7)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=var_export($y8)?></strong></td>
                            <td><?var_dump($x1==$y8)?></td>
                            <td><?var_dump($x2==$y8)?></td>
                            <td><?var_dump($x3==$y8)?></td>
                            <td><?var_dump($x4==$y8)?></td>
                            <td><?var_dump($x5==$y8)?></td>
                            <td><?var_dump($x6==$y8)?></td>
                            <td><?var_dump($x7==$y8)?></td>
                            <td><?var_dump($x8==$y8)?></td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <article class="container">
                <h2 align="center">Жёсткое сравнение в <i>PHP</i></h2>
                <table class="table table-striped table-primary text-center">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?=var_export($x1)//аналог var_dump, но не выводит тип данных ?></th>
                            <th><?=var_export($x2)?></th>
                            <th><?=$x3?></th>
                            <th><?=$x4?></th>
                            <th><?=$x5?></th>
                            <th><?=var_export($x6)?></th>
                            <th><?var_export($x7)?></th>
                            <th><?=var_export($x8)?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?=var_export($y1)?></strong></td>
                            <td><?var_dump($x1===$y1)?></td>
                            <td><?var_dump($x2===$y1)?></td>
                            <td><?var_dump($x3===$y1)?></td>
                            <td><?var_dump($x4===$y1)?></td>
                            <td><?var_dump($x5===$y1)?></td>
                            <td><?var_dump($x6===$y1)?></td>
                            <td><?var_dump($x7===$y1)?></td>
                            <td><?var_dump($x8===$y1)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=var_export($y2)?></strong></td>
                            <td><?var_dump($x1===$y2)?></td>
                            <td><?var_dump($x2===$y2)?></td>
                            <td><?var_dump($x3===$y2)?></td>
                            <td><?var_dump($x4===$y2)?></td>
                            <td><?var_dump($x5===$y2)?></td>
                            <td><?var_dump($x6===$y2)?></td>
                            <td><?var_dump($x7===$y2)?></td>
                            <td><?var_dump($x8===$y2)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=$y3?></strong></td>
                            <td><?var_dump($x1===$y3)?></td>
                            <td><?var_dump($x2===$y3)?></td>
                            <td><?var_dump($x3===$y3)?></td>
                            <td><?var_dump($x4===$y3)?></td>
                            <td><?var_dump($x5===$y3)?></td>
                            <td><?var_dump($x6===$y3)?></td>
                            <td><?var_dump($x7===$y3)?></td>
                            <td><?var_dump($x8===$y3)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=$y4?></strong></td>
                            <td><?var_dump($x1===$y4)?></td>
                            <td><?var_dump($x2===$y4)?></td>
                            <td><?var_dump($x3===$y4)?></td>
                            <td><?var_dump($x4===$y4)?></td>
                            <td><?var_dump($x5===$y4)?></td>
                            <td><?var_dump($x6===$y4)?></td>
                            <td><?var_dump($x7===$y4)?></td>
                            <td><?var_dump($x8===$y4)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=$y5?></strong></td>
                            <td><?var_dump($x1===$y5)?></td>
                            <td><?var_dump($x2===$y5)?></td>
                            <td><?var_dump($x3===$y5)?></td>
                            <td><?var_dump($x4===$y5)?></td>
                            <td><?var_dump($x5===$y5)?></td>
                            <td><?var_dump($x6===$y5)?></td>
                            <td><?var_dump($x7===$y5)?></td>
                            <td><?var_dump($x8===$y5)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=var_export($y6)?></strong></td>
                            <td><?var_dump($x1===$y6)?></td>
                            <td><?var_dump($x2===$y6)?></td>
                            <td><?var_dump($x3===$y6)?></td>
                            <td><?var_dump($x4===$y6)?></td>
                            <td><?var_dump($x5===$y6)?></td>
                            <td><?var_dump($x6===$y6)?></td>
                            <td><?var_dump($x7===$y6)?></td>
                            <td><?var_dump($x8===$y6)?></td>
                        </tr>
                        <tr>
                            <td><strong><?var_export($y7) ?></strong></td>
                            <td><?var_dump($x1===$y7)?></td>
                            <td><?var_dump($x2===$y7)?></td>
                            <td><?var_dump($x3===$y7)?></td>
                            <td><?var_dump($x4===$y7)?></td>
                            <td><?var_dump($x5===$y7)?></td>
                            <td><?var_dump($x6===$y7)?></td>
                            <td><?var_dump($x7===$y7)?></td>
                            <td><?var_dump($x8===$y7)?></td>
                        </tr>
                        <tr>
                            <td><strong><?=var_export($y8)?></strong></td>
                            <td><?var_dump($x1===$y8)?></td>
                            <td><?var_dump($x2===$y8)?></td>
                            <td><?var_dump($x3===$y8)?></td>
                            <td><?var_dump($x4===$y8)?></td>
                            <td><?var_dump($x5===$y8)?></td>
                            <td><?var_dump($x6===$y8)?></td>
                            <td><?var_dump($x7===$y8)?></td>
                            <td><?var_dump($x8===$y8)?></td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <article class="container">
                <h2 class="text-center">Вывод</h2>
                <p class="redp">При жестком сравнении в PHP должны быть тождественно равны как данные, так и их типы. <br>При гибком сравнении вначале происходит преобразование данных <span>(в первую очередь к integer)</span> и только потом происходит сравнение</p>
            </article>
        </section>
    </main>
</body>
</html>