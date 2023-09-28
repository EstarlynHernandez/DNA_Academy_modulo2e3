<?php

namespace php\PhpExercise;

class Exercise
{
    static public function Execute(): void
    {
        //Exercise 1
        echo "Exercise 1 \n";
        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        echo $days[4] . "\n";

        //Exercise 2
        echo "\n---Exercise 2--- \n";
        $students = [
            'marco' => [
                'programming' => 4,
                'english' => 7,
                'math' => 3,
            ],
            'maria' => [
                'programming' => 2,
                'english' => 8,
                'math' => 5,
            ],
            'alexander' => [
                'programming' => 9,
                'english' => 5,
                'math' => 5,
            ],
            'alice' => [
                'programming' => 9,
                'english' => 7,
                'math' => 6,
            ]
        ];

        echo $students['marco']['math'] . "\n";


        //Exercise 3
        echo "\n---Exercise 3--- \n";

        function exercise3(): void
        {
            $i = 0;
            $e = 0;
            while ($i < 10) {
                $e++;

                if ($e % 2 == 0) {
                    echo $e . "\n";
                    $i++;
                }
            }
        }

        exercise3();


        //Exercise 4
        echo "\n---Exercise 4--- \n";

        function exercise4($size): void
        {
            for ($i = $size; $i > 0; $i--) {
                for ($e = 0; $e < $i; $e++) {
                    echo '*';
                }
                echo "\n";
            }
        }

        exercise4(5);


        //Exercise 5
        echo "\n---Exercise 5--- \n";

        $fruits = [
            'apple' => 'red',
            'pear' => 'green',
            'orange' => 'orange',
            'lemon' => 'yellow',
            'strawberry' => 'red',
            'pineapple' => 'yellow'
        ];

        foreach ($fruits as $fruit => $color) {
            echo "The $fruit is $color\n";
        }


        //Exercise 6
        echo "\n---Exercise 6--- \n";

        function sum(int $a, int $b): int
        {
            return $a + $b;
        }

        echo "test -15864 + -88654 = " . sum(-15864, -88654) . "\n";
        echo "test -12 + 12 = " . sum(-12, 12) . "\n";
        echo "test 1 + 1 = " . sum(1, 1) . "\n";
        echo "test 24 + 13 = " . sum(24, 13) . "\n";
        echo "test 550 + 762 = " . sum(550, 762) . "\n";
        echo "test 55482 + 40768 = " . sum(55842, 40768) . "\n";


        //Exercise 7
        echo "\n---Exercise 7--- \n";

        function add5(&$a): void
        {
            $a += 5;
        }

        $number = 0;
        echo $number . "\n";
        add5($number);
        echo $number . "\n";


        //Exercise 8
        echo "\n---Exercise 8--- \n";

        function arrayInverter(array $array): array
        {
            $newArray = [];
            for ($i = count($array) - 1; $i >= 0; $i--) {
                $newArray[] = $array[$i];
            }
            return $newArray;
        }

        $numberArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        echo "Inverter Array\n";
        var_dump(arrayInverter($numberArray));
        echo "original Array \n";
        var_dump($numberArray);

        //Exercise 9
        echo "\n---Exercise 9--- \n";

        //array students is in line 11

        foreach ($students as $name => $votes) {
            $averageVotes = 0;
            foreach ($votes as $vote) {
                $averageVotes += $vote;
            }

            $averageVotes = bcdiv($averageVotes, count($votes), 2);

            echo "The student $name average vote is $averageVotes \n";
        }


        //Exercise 10
        echo "\n---Exercise 10--- \n";

        $books = [
            [
                'name' => 'the dragon Blood',
                'author' => 'smith',
                'year' => '2023'
            ],
            [
                'name' => 'php  for beginner',
                'author' => 'jorge',
                'year' => '2020'
            ],
            [
                'name' => 'laravel',
                'author' => 'laravel',
                'year' => '2000'
            ],
            [
                'name' => 'engineer for expert',
                'author' => 'albert',
                'year' => '1996'
            ],
            [
                'name' => 'astronomy',
                'author' => 'test author',
                'year' => '1980'
            ],
            [
                'name' => 'physic',
                'author' => 'albert',
                'year' => '2001'
            ],
            [
                'name' => 'dragons',
                'author' => 'smith',
                'year' => '2010'
            ]
        ];

        for ($i = 0; $i < count($books); $i++) {
            if ($books[$i]['year'] > 2000) {
                echo "The book '" . $books[$i]['name'] . "' for the author '" . $books[$i]['author'] . "' was published in " . $books[$i]['year'] . "\n";
            }
        }

        //Exercise 11
        echo "\n---Exercise 11--- \n";

        function isPrime($number): bool
        {
            for ($i = $number - 1; $i > 1; $i--) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        function printPrimes($number, $start): void
        {
            $value = $start;
            if ($value < 2) {
                echo 2 . "\n";
                $value = 3;
            }
            if ($value % 2 == 0) {
                $value++;
            }
            while ($number > 0) {
                if (isPrime($value)) {
                    echo $value . "\n";
                    $number--;
                }
                $value += 2;
            }
        }

        printPrimes(10, 0);

        //Exercise 12
        echo "\n---Exercise 12--- \n";

        $colors = ['Red', 'Green', 'Agate Blue', 'Alice Blue', 'Blue', 'Yellow'];

        foreach ($colors as $color) {
            if (mb_strtolower($color[0]) === 'a') {
                echo $color . "\n";
            }
        }

        //Exercise 13
        echo "\n---Exercise 13--- \n";

        $numbers = [4, 45, 5, 64, 19, 6, 7];

        function maxNumber($numbers)
        {
            $maxNumber = 0;
            foreach ($numbers as $number)
                if ($number > $maxNumber)
                    $maxNumber = $number;
            return $maxNumber;
        }

        echo maxNumber($numbers) . "\n";

        //Exercise 14
        echo "\n---Exercise 14--- \n";

        $cars = [
            [
                'model' => 'integra',
                'brand' => 'acura',
                'year' => '2012'
            ],
            [
                'model' => 'legend',
                'brand' => 'acura',
                'year' => '1992'
            ],
            [
                'model' => 'mdx',
                'brand' => 'acura',
                'year' => '2001'
            ],
            [
                'model' => '146',
                'brand' => 'Alfa Romeo',
                'year' => '1994'
            ],
            [
                'model' => '147',
                'brand' => 'Alfa Romeo',
                'year' => '2000'
            ],
            [
                'model' => 'a3',
                'brand' => 'Audi',
                'year' => '1996'
            ],
            [
                'model' => 'serie 7',
                'brand' => 'bmw',
                'year' => '1972'
            ],
            [
                'model' => 'civic',
                'brand' => 'honda',
                'year' => '2023'
            ],
            [
                'model' => 'fiesta',
                'brand' => 'ford',
                'year' => '2010'
            ],
        ];

        foreach ($cars as $car) {
            if ($car['year'] > 2010)
                echo $car['brand'] . " " . $car['model'] . " " . $car['year'] . "\n";
        }

        //Exercise 15
        echo "\n---Exercise 15--- \n";

        // students line 11

        function maxNote($students, $matter)
        {
            $betterStudent[$matter] = 0;
            foreach ($students as $name => $student)
                if ($student[$matter] > $betterStudent[$matter]) {
                    $betterStudent = $student;
                    $betterStudent['name'] = $name;
                }
            return $betterStudent;
        }

        $programmingStudent = maxNote($students, 'programming');
        $englishStudent = maxNote($students, 'english');

        echo "The best student in programing is " . $programmingStudent['name'] . " with " . $programmingStudent['programming'] . "\n";
        echo "The best student in english is " . $englishStudent['name'] . " with " . $englishStudent['english'] . "\n";

        //Exercise 16
        echo "\n---Exercise 16--- \n";

        function fibonacci($number): void
        {
            $a = 0;
            $b = 1;
            while ($number > 0) {
                echo $a . "\n";
                $a += $b;
                $b = $a - $b;
                $number--;
            }
        }

        fibonacci(10);

        //Exercise 17
        echo "\n---Exercise 17--- \n";

        $findSmallNumber = true;
        $countSmallNumber = 1;
        while ($findSmallNumber) {
            if ($countSmallNumber % 5 == 0 && $countSmallNumber % 7 == 0) {
                echo $countSmallNumber . "\n";
                $findSmallNumber = false;
            }
            $countSmallNumber++;
        }

        //Exercise 18
        echo "\n---Exercise 18--- \n";

        function printSquare($size): void
        {
            for ($i = 0; $i < $size; $i++) {
                for ($e = 0; $e < $size; $e++) {
                    echo '*';
                }
                echo "\n";
            }
        }

        printSquare(5);

        //Exercise 19
        echo "\n---Exercise 19--- \n";

        for ($i = 1; $i <= 10; $i++) {
            if (($i * $i) <= 100) {
                echo $i * $i . "\n";
            }
        }

        //Exercise 20
        echo "\n---Exercise 20--- \n";

        for ($i = 1; $i < 15; $i++) {
            echo 7 * $i . "\n";
        }

        //Exercise 21
        echo "\n---Exercise 21--- \n";

        //numberArray in line 132
        $sumNumbers = 0;
        foreach ($numberArray as $number) {
            $sumNumbers += $number;
        }

        echo $sumNumbers . "\n";

        //Exercise 22
        echo "\n---Exercise 22--- \n";

        $cities = [
            [
                'name' => 'catania',
                'population' => '316000'
            ],
            [
                'name' => 'bari',
                'population' => '326000'
            ],
            [
                'name' => 'firenze',
                'population' => '361000'
            ],
            [
                'name' => 'bologna',
                'population' => '388000'
            ],
            [
                'name' => 'napoli',
                'population' => '920000'
            ],
        ];

        foreach ($cities as $city) {
            echo "the city of " . $city['name'] . " has " . $city['population'] . " people\n";
        }

        //Exercise 23
        echo "\n---Exercise 23--- \n";

        function factorial(int $number): int|string
        {
            $result = $number;
            if ($number < 1) {
                return "the factorial need to be a number superior to 0";
            }
            for ($i = 1; $i < $number; $i++) {
                $result *= $number - $i;
            }
            return $result;
        }

        echo "the factorial of 4 is " . factorial(4) . "\n";
        echo "the factorial of 2 is " . factorial(2) . "\n";
        echo "the factorial of 8 is " . factorial(8) . "\n";
        echo "the factorial of 5 is " . factorial(5) . "\n";

        //Exercise 24
        echo "\n---Exercise 24--- \n";

        function isPalindromo($string): bool
        {
            $text = strtolower(str_replace(" ", '', (string)$string));
            for ($i = 0; $i < strlen($text); $i++) {
                if ($text[$i] != $text[strlen($text) - $i - 1]) {
                    return false;
                }
            }
            return true;
        }

        echo "'Eterni in rete' " . (isPalindromo('Eterni in rete') ? "e " : "non e ") . "un palindromo\n";
        echo "'1221' " . (isPalindromo('1221') ? "e " : "non e ") . "un palindromo\n";
        echo "'compiti' " . (isPalindromo('compiti') ? "e " : "non e ") . "un palindromo\n";


        //Exercise 25
        echo "\n---Exercise 25--- \n";
        function temperature(float $temp, bool $toCelsius = true): float
        {
            if ($toCelsius) {
                return ($temp - 32) * 5 / 9;
            }
            return $temp * 9 / 5 + 32;
        }

        echo "25.5 celsius degrees is " . temperature(25.5, false) . " fahrenheit degrees\n";
        echo "77.9 Fahrenheit degrees is " . temperature(77.9) . " celsius degrees\n";

        //Exercise 26
        echo "\n---Exercise 26--- \n";

        function double(&$number): void
        {
            $number *= 2;
        }

        $num = 25;
        echo "the double of $num is ";
        double($num);
        echo $num . "\n";

        //Exercise 27
        echo "\n---Exercise 27--- \n";

        function addToArrar(&$array, $item): void
        {
            array_unshift($array, $item);
        }

        $newArray = ['hello', 'find'];
        var_dump($newArray);
        addToArrar($newArray, 'add');
        var_dump($newArray);

        //Exercise 28
        echo "\n---Exercise 28--- \n";

        function lenght($array): int
        {
            $count = 0;
            while (!isset($array[$count])) {
                $count++;
            }
            return $count;
        }

        echo "la lungeza di questo array e di " . lenght(['helo', 'goodbye', false, 'helo', 'goodbye']) . "\n";


        //Exercise 29
        echo "\n---Exercise 29--- \n";

        $films = [
            [
                'titolo' => 'Il Padrino',
                'regista' => 'Francis Ford Coppola',
                'anno' => 1972,
            ],
            [
                'titolo' => 'Forrest Gump',
                'regista' => 'Robert Zemeckis',
                'anno' => 1994,
            ],
            [
                'titolo' => "L'Uomo d'Acciaio",
                'regista' => 'Zack Snyder',
                'anno' => 2013,
            ],
            [
                'titolo' => "L'Uomo d'Acciaio 2",
                'regista' => 'Zack Snyder',
                'anno' => 2018,
            ],
            [
                'titolo' => 'Il Padrino - Parte II',
                'regista' => 'Francis Ford Coppola',
                'anno' => 1974,
            ],
            [
                'titolo' => 'Apocalypse Now',
                'regista' => 'Francis Ford Coppola',
                'anno' => 1979,
            ],
            [
                'titolo' => 'Il Padrino - Parte III',
                'regista' => 'Francis Ford Coppola',
                'anno' => 1990,
            ],
        ];

        function printFilms($films, $regista): void
        {

            foreach ($films as $film) {
                if (strtolower($film['regista']) == strtolower($regista)) {
                    echo "Il film '" . $film['titolo'] . "' dall regista " . $film['regista'] . " uscito nel " . $film['anno'], "\n";
                }
            }

        }

        printFilms($films, 'francis Ford Coppola');


        //Exercise 30
        echo "\n---Exercise 30--- \n";

        for ($i = 'A'; $i != 'AA'; $i++) {
            echo "$i-";
        }


        //Exercise 31
        echo "\n---Exercise 31--- \n";

        function division($number): array
        {
            $divisors = [];
            for ($i = 1; $i <= $number / 2; $i++) {
                if ($number % $i == 0) {
                    $divisors[] = $i;
                }
            }
            return $divisors;
        }

        echo 'Il numero 7 e divisibile per ';
        foreach (division(100) as $number) {
            echo $number . ', ';
        }
        echo "\n";

        //Exercise 32
        echo "\n---Exercise 32--- \n";

        $prezzi = [128, 187, 500, 900, 50, 10];

        function iva($numbers, bool $add = true): array
        {
            $prezzi = [];

            if ($add) {
                foreach ($numbers as $number) {
                    $prezzi[] = $number * 1.22;
                }
            } else {
                foreach ($numbers as $number) {
                    $prezzi[] = $number / 1.22;
                }
            }

            return $prezzi;
        }

        var_dump($array = iva($prezzi));
        var_dump(iva($array, false));

        //Exercise 33
        echo "\n---Exercise 33--- \n";

        function fibonacciOne($number): float
        {
            $a = 0;
            $b = 1;
            while ($number > 0) {
                $a += $b;
                $b = $a - $b;
                $number--;
            }

            return $a;
        }

        echo "Il decimo valore della sequenza di fibonacci e " . fibonacciOne(10) . "\n";

        //Exercise 34
        echo "\n---Exercise 34--- \n";

        $sports = [
            [
                'name' => 'calcio',
                'players' => 11
            ],
            [
                'name' => 'basket',
                'players' => 5
            ],
            [
                'name' => 'tenis',
                'players' => 2
            ],
            [
                'name' => 'baseball',
                'players' => 9
            ],
            [
                'name' => 'pallabolo',
                'players' => 7
            ],
        ];

        foreach ($sports as $sport) {
            if ($sport['players'] > 5) {
                echo "Il " . $sport['name'] . " ha " . $sport['players'] . " giocatori\n";
            }
        }

        //Exercise 35
        echo "\n---Exercise 35--- \n";

        function uppercase($string)
        {
            $string[0] = strtoupper($string[0]);
            for ($i = 0; $i < strlen($string); $i++) {
                if ($string[$i] == ' ') {
                    $string[$i + 1] = strtoupper($string[$i + 1]);
                }
            }
            return $string;
        }

        echo uppercase('texto che deve essere messo in uppercase') . "\n";

        //Exercise 36
        echo "\n---Exercise 36--- \n";

        $animals = ['tigre', 'acquila', 'scimia', 'anatra', 'maiale'];

        function search($string, $find): string|bool
        {
            foreach (str_split($string, 1) as $letter) {
                if ($letter == $find) {
                    return $string;
                }
            }
            return false;
        }

        foreach ($animals as $animal) {
            if (str_contains($animal, 'a')) {
                echo $animal . "\n";
            }
        }

        //Exercise 37
        echo "\n---Exercise 37--- \n";

        $firstDate = date_create('now + 4days');
        $secondDate = new \DateTime();

        function dateDiff($first, $second): string
        {
            $diff = $first->diff($second);
            return $diff->d . "d-" . $diff->h . "h-" . $diff->i . "m-" . $diff->s . "s";
        }

        echo dateDiff($firstDate, $secondDate);

        //Exercise 38
        echo "\n---Exercise 38--- \n";

        for ($i = 1; $i <= 50; $i += 2) {
            echo $i . "-";
        }
        echo "\n";

        //Exercise 39
        echo "\n---Exercise 39--- \n";

        //function in line 206
        //function isPrime($number): bool
        //{
        //    for ($i = ($number - 1); $i > 1; $i--) {
        //        if ($number % $i == 0) {
        //            return false;
        //        }
        //    }
        //    return true;
        //}

        echo "The number 3 " . (isPrime(3) ? "is " : "doesn't ") . "prime number\n";
        echo "The number 8 " . (isPrime(8) ? "is " : "doesn't ") . "prime number\n";
        echo "The number 17 " . (isPrime(17) ? "is " : "doesn't ") . "prime number\n";


        //Exercise 40
        echo "\n---Exercise 40--- \n";

        function searchLonger($array)
        {
            $result = '';

            foreach ($array as $text) {
                if (strlen($text) > strlen($result)) {
                    $result = $text;
                }
            }

            return $result;
        }

        $frasi = ['queste', 'sono', 'le', 'mie', 'frasi', 'lunga'];

        echo searchLonger($frasi) . "\n";

        //Exercise 41
        echo "\n---Exercise 41--- \n";

        $countries = [
            [
                'name' => 'italia',
                'capital' => 'roma'
            ],
            [
                'name' => 'francia',
                'capital' => 'parigi'
            ],
            [
                'name' => 'germania',
                'capital' => 'berlino'
            ],
            [
                'name' => 'regno unito',
                'capital' => 'londra'
            ],
            [
                'name' => 'spagna',
                'capital' => 'madrid'
            ],
        ];

        foreach ($countries as $country) {
            echo "Il paese " . $country['name'] . " ha la come capitale a " . $country['capital'] . "\n";
        }

        //Exercise 42
        echo "\n---Exercise 42--- \n";

        function searchInArray($items, $string): bool
        {
            foreach ($items as $item) {
                if ($item == $string) {
                    return true;
                }
            }
            return false;
        }

        echo "In the array 'frasi' the string 'sono' is " . (searchInArray($frasi, 'sono') ? '' : 'not') . " found\n";
        echo "In the array 'frasi' the string 'studiare' is " . (searchInArray($frasi, 'studiare') ? '' : 'not') . " found\n";
        echo "In the array 'frasi' the string 'queste' is " . (searchInArray($frasi, 'queste') ? '' : 'not') . " found\n";
        echo searchInArray($frasi, 'sono');

        //Exercise 43
        echo "\n---Exercise 43--- \n";

        sort($frasi);
        foreach ($frasi as $text) {
            echo "$text \n";
        }

        //Exercise 44
        echo "\n---Exercise 44--- \n";

        function midNumbers($numbers): float
        {
            $result = 0;

            foreach ($numbers as $number) {
                $result += $number;
            }

            $result /= count($numbers);

            return $result;
        }

        echo midNumbers([3, 5, 6, 8, 10]);


        //Exercise 45
        echo "\n---Exercise 45--- \n";

        function inverter($words): string
        {
            $array = explode(" ", $words);
            $result = '';

            foreach ($array as $item) {
                $result = "$item $result";
            }

            return $result;
        }

        echo inverter('questo e uno string') . "\n";

        //Exercise 45
        echo "\n---Exercise 46--- \n";

        $count = 10;
        while ($count > 0) {
            echo "$count\n";
            $count--;
        }


        //Exercise 47
        echo "\n---Exercise 47--- \n";

        $artists = [
            "Adele" => "Someone Like You",
            "Michael Jackson" => "Billie Jean",
            "The Beatles" => "Hey Jude",
            "Madonna" => "Like a Virgin",
            "Elvis Presley" => "Can't Help Falling in Love",
            "Beyoncé" => "Single Ladies (Put a Ring on It)",
        ];

        foreach ($artists as $artist => $song) {
            if (strtolower($song[0]) == 's') {
                echo "Il/la cantante $artist ha una canzoni che inizia con la 's' e si chiama $song\n";
            }
        }


        //Exercise 48
        echo "\n---Exercise 48--- \n";

        $people = [
            [
                'name' => 'Marco',
                'city' => 'Napoli',
                'age' => '28'
            ],
            [
                'name' => 'Maria',
                'city' => 'Milano',
                'age' => '36'
            ],
            [
                'name' => 'Sofi',
                'city' => 'Napoli',
                'age' => '22'
            ],
            [
                'name' => 'Mateo',
                'city' => 'Roma',
                'age' => '48'
            ],
            [
                'name' => 'Francesco',
                'city' => 'Roma',
                'age' => '88'
            ],
            [
                'name' => 'Francesca',
                'city' => 'Milano',
                'age' => '76'
            ],
        ];

        foreach ($people as $person) {
            if (strtolower($person['city']) == 'roma') {
                echo $person['name'] . " vive nella cita di " . $person['city'] . " e ha " . $person['age'] . " anni\n";
            }
        }

        //Exercise 49
        echo "\n---Exercise 49--- \n";

        function findMin($numbers)
        {
            $result = $numbers[0];

            foreach ($numbers as $number) {
                if ($result > $number) {
                    $result = $number;
                }
            }

            return $result;
        }

        echo findMin([12, 24, 9, 7, 120]) . "\n";

        //Exercise 50
        echo "\n---Exercise 50--- \n";

        //copy of Exercise 19 in line 386
        for ($i = 1; $i <= 10; $i++) {
            echo $i * $i . "\n";
        }
    }
}