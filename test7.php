<?php
// Принуждающий режим                       ПРИНУДЕТЕЛЬНАЯ ТИПИЗАЦИЯ возвращаемых аргументов
//function sumOfInts(int ...$ints)
//{
//    return array_sum($ints);
//}
//
//var_dump(sumOfInts(2, '3', 9.1));


//declare(strict_types=1);                  СТРОГАЯ ТИПИЗАЦИЯ возвращаемых аргументов
//
//function sum($a, $b): int {
//    return $a + $b;
//}
//
//var_dump(sum(1, 2));
//var_dump(sum(1, 2.5));

//function arraysSum(array ...$arrays): array           ПРИНУДЕТЕЛЬНАЯ ТИПИЗАЦИЯ возвращаемых ТИПОВ даннвх
//{
//    return array_map(function(array $array): int {
//        return array_sum($array);
//    }, $arrays);
//}
//
//print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));

//function arraysSum(array ...$arrays): array           ПРИНУДЕТЕЛЬНАЯ ТИПИЗАЦИЯ возвращаемых ТИПОВ даннвх
//{
//    return array_map(function(array $array): int {
//        return array_sum($array);
//    }, $arrays);
//}
//
//print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));

// Извлекаем значение $_GET['user'], а если оно не задано,
// то возвращаем 'nobody'
//$_GET['user'] = 'wfwfe';
//$_POST['user'] = 'sdfds';
//$username = $_GET['user'] ?? 'nobody';
//
//// Это идентично следующему коду:
//$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
//
//// Данный оператор можно использовать в цепочке.
//// В этом примере мы сперва проверяем, задан ли $_GET['user'], если нет,
//// то проверяем $_POST['user'], и если он тоже не задан, то присваеваем 'nobody'.
//$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
//echo $username;



// Целые
//echo 1 <=> 1; // 0
//echo 1 <=> 2; // -1
//echo 2 <=> 1; // 1
//
//// Рациональные
//echo 1.5 <=> 1.5; // 0
//echo 1.5 <=> 2.5; // -1
//echo 2.5 <=> 1.5; // 1
//
//// Строки
//echo "a" <=> "a"; // 0
//echo "a" <=> "b"; // -1
//echo "b" <=> "a"; // 1


//define('ANIMALS', [   //Можно задать константу типа array
//    'dog',
//    'cat',
//    'bird'
//]);
//
//echo ANIMALS[2]; // выводит "cat"


//interface Logger {
//    public function log(string $msg);
//}
//
//class Application {
//    private $logger;
//
//    public function getLogger(): Logger {
//        return $this->logger;
//    }
//
//    public function setLogger(Logger $logger) {
//        $this->logger = $logger;
//    }
//}
//
//$app = new Application;
//$app->setLogger(new class implements Logger {
//    public function log(string $msg) {
//        echo $msg;
//    }
//});
//
//var_dump($app->getLogger());

//class A {private $x = 2;}
//$getX = function() {return $this->x;};
//echo $getX->call(new A);


//$gen = (function() {
//    yield 1;
//    yield 2;
//
//    return 3;
//})();
//
//foreach ($gen as $val) {
//    echo $val, PHP_EOL;
//}
//
//echo $gen->getReturn(), PHP_EOL;


//function gen()
//{
//    yield 1;
//    yield 2;
//    yield from gen2();
//}
//
//function gen2()
//{
//    yield 3;
//    yield 4;
//}
//
//foreach (gen() as $val)
//{
//    echo $val, PHP_EOL;
//}


//var_dump(intdiv(10, 4));

//session_start([
//    'cache_limiter' => 'private',
//    'read_and_close' => true,
//]);

$subject = 'Aaaaaa Bbb qqqqqqq';   // Поиск определенных символов и их вывод, и вывод их количества
$searchSim = [
    '~[a]+~i' => function ($match) {
        echo strlen($match[0]), ' matches for "a" found', PHP_EOL;
    },
    '~[b]+~i' => function ($match) {
        echo strlen($match[0]), ' matches for "b" found', PHP_EOL;
    },
    '~[q]+~i' => function ($m) {
        echo $m[0], ' matches for "q" found', PHP_EOL;
    }
];

preg_replace_callback_array($searchSim, $subject);