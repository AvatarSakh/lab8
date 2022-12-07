<?php
    //Задание 1//
    echo "Задание 1<br>";
    //hello
    /*
        Vladislav
        04.12.2022
    */
    echo "Hello";
    echo "<br>-------------------------------------";

    //Задание 2//
    echo "<br>Задание 2<br>";
    $nameOfTvChannel;
    $addressMaker;
    $colorCar;
    $temperatureWater;
    $modelSmartPhone;
    echo "<br>-------------------------------------";

    //Задание 3//
    echo "<br>Задание 3<br>";
    $a = 3;
    $b = 5;
    $c = 8;
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;
    echo "<br>";
    $res1 = $a+$b+$c;
    echo $res1;
    echo "<br>";
    $result = 2+6+2/5-1;
    echo $result;
    echo "<br>-------------------------------------";

    //Задание 4//
    echo "<br>Задание 4<br>";
    $a = 1;
    $b = 2;
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    $c = $a;
    $d = &$b;
    echo $c;
    echo "<br>";
    echo $d;
    echo "<br>";
    $a = 3;
    $b = 4;
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;
    echo "<br>";
    echo $d;
    echo "<br>";
    echo "<br>-------------------------------------";

    //Задание 5//
    echo "<br>Задание 5<br>";
    const z51 = 41.0;
    const z52 = 33.0;
    echo z51 + z52;
    echo "<br>";
    //$z51 = 0;  нельзя
    echo "<br>-------------------------------------";

    //Задание 6//
    echo "<br>Задание 6<br>";
    $a = 152;
    $b = '152';
    $c = 'London'; 
    $d = array(152); 
    $e = 15.2;
    $f = false;
    $g = true; 
    echo gettype($a);
    echo "<br>";
    echo gettype($b);
    echo "<br>";
    echo gettype($c);
    echo "<br>";
    echo gettype($d);
    echo "<br>";
    echo gettype($e);
    echo "<br>";
    echo gettype($f);
    echo "<br>";
    echo gettype($g);
    echo "<br>";
    echo "<br>-------------------------------------";

    //Задание 7//
    echo "<br>Задание 7<br>";
    $a = "abc";
    $b = "bcd";
    echo $a.$b;
    echo "<br>-------------------------------------";

    //Задание 8//
    echo "<br>Задание 8<br>";
    $a = "Доброе утро";
    $b = "дамы";
    $c = "и господа";
    echo $a." ".$b." ".$c;
    echo "<br>-------------------------------------";

    //Задание 9//
    echo "<br>Задание 9<br>";
    $a = array(
        0 => 0,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
    );
    $b = array(
        0 => 0,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
    );
    $a["element"] = 123;
    unset($b[0]);
    echo $a[2];
    echo "<br>";
    echo $b[2];
    echo "<br>";
    print_r($a);
    echo "<br>";
    print_r($b);
    echo "<br>";
    echo count($a);
    echo "<br>";
    echo count($b);
    echo "<br>-------------------------------------";

    //Задание 10//
    echo "<br>Задание 10<br>";
    $n = 5;
    for($i = 0 ; $i <$n; $i++)
    {
        echo rand(-21,35);
        echo "<br>";
    }
    echo "<br>-------------------------------------";

    //Задание 11//
    echo "<br>Задание 11<br>";
    $n = 10;
    $sumn = 0;
    for($i = 0 ; $i <$n; $i++)
    {
        $sumn +=rand(-21,35);
    }
    echo $sumn;
    echo "<br>-------------------------------------";

    //Задание 12//
    echo "<br>Задание 12<br>";
    $n = 5;
    $temp;
    for($i = 0 ; $i <$n; $i++)
    {   
        $value = rand(-21,35);
        echo $value;
        if($i >0)
        {
        if($value > $temp) echo " больше";
        else echo " меньше";
        }
        $temp = $value;
        echo "<br>";
    }
    echo "<br>-------------------------------------";

    //Задание 13//
    echo "<br>Задание 13<br>";
    $n = 10;
    echo "0 1";
    $a = 0;
    $b = 1;
    for($i = 1; $i < $n-1; $i++ )
    {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        echo " ".$temp;
    }
    echo "<br>-------------------------------------";

    //Задание 14//
    echo "<br>Задание 14<br>";
    $value = rand(1,99999);
    echo $value;
    echo "<br>";
    while($value > 1)
    {
        $temp = $value %10;
        echo " ".$temp;
        $value /=10;
    }
    echo "<br>-------------------------------------";

    //Задание 15//
    echo "<br>Задание 15<br>";
    $value = rand(1,99999);
    echo $value;
    echo "<br>";
    $isFind = false;
    while($value > 1)
    {
        $temp = $value %10;
        if($temp % 2 == 1)
        {
        echo " ".$temp;
        $isFind = true;
        }
        $value /=10;
    }
    if($isFind == false) echo "Нечетных цифр не обнаружено!";
    echo "<br>-------------------------------------";

    //Задание 16//
    echo "<br>Задание 16<br>";
    $arr;
    for($i=0; $i<7;$i++)
    {
        $arr[$i] = rand(1,100);
    }
    for($i=0; $i<7;$i++)
    {
        echo " ".$arr[$i];
    }
    echo "<br>-------------------------------------";

    //Задание 17//
    echo "<br>Задание 17<br>";
    $arr = array(array());
    define("m",4);
    define("n",5);
    for($i=0; $i<m;$i++)
    {
        for($j = 0; $j<n;$j++)
        {
            $arr[$i][$j] = rand(1,100);
        }
    }
    for($i=0; $i<m;$i++)
    {
        for($j = 0; $j<n;$j++)
        {
            echo " ".$arr[$i][$j];
        }
        echo "<br>";
    }
    echo "<br>-------------------------------------";

    //Задание 18//
    echo "<br>Задание 18<br>";
    $arr = array();
    $n = rand(1,20);
    $index = 0;
    echo $n."<br>";
    for($i = 0; $i<$n; $i++)
    {
        $arr[$i] = rand(1,50);
    }
    $i = 1;
    while($index < $n)
    {
        for($j = 0; $j < $i; $j++)
        {
            if($index >$n-1) break;
            echo $arr[$index]." ";
            $index++;            
        }
        echo "<br>";
        $i++;
    }
    
    $n = rand(1,20);
    $index = 0;
    $i = 1;
    while($index < $n)
    {
        for($j = 0; $j < $i; $j++)
        {
            echo ($index+1)." ";
            if($index-1 == $n) break;
            $index++;            
        }
        echo "<br>";
        $i++;
    }
    echo "<br>-------------------------------------";

    //Задание 19//
    echo "<br>Задание 19<br>";
    $arr = array();
    $n = rand(1,20);
    for($i = 0; $i<$n;$i++)
    {
        $arr[$i] = rand(1,100);
    }
    print_r($arr);
    echo "<br>";
    $max = $arr[0];
    for($i = 0; $i<$n;$i++)
    {
        if($max < $arr[$i])$max = $arr[$i];
    }
    echo $max;
    echo "<br>-------------------------------------";

    //Задание 20//
    echo "<br>Задание 20<br>";
    $arr = array();
    for($i = 0; $i<20;$i++)
    {
        $arr[$i] = rand(1,100);
    }
    print_r($arr);
    echo "<br>";
    $min = $arr[0];
    for($i = 0; $i<20;$i++)
    {
        if($min > $arr[$i])$min = $arr[$i];
    }
    echo $min;

    echo "<br>-------------------------------------";

    //Задание 21//
    echo "<br>Задание 21<br>";
    $arr1 = array();
    $arr2 = array();
    for($i = 0; $i<20;$i++)
    {
        
        $arr1[$i] = rand(-50,50);
        $arr2[$i] = rand(-50,50);
    }
    print_r($arr1);
    print_r($arr2);
    for($i =3;$i<20;$i += 3)
    {
        if($arr1[$i] > $arr2[$i-1]) echo $arr1[$i]." > ".$arr2[$i-1]."<br>";
        if($arr1[$i] < $arr2[$i-1]) echo $arr1[$i]." < ".$arr2[$i-1]."<br>";
        if($arr1[$i] == $arr2[$i-1]) echo $arr1[$i]." = ".$arr2[$i-1]."<br>";
    }
    echo "<br>-------------------------------------";

    //Задание 22//
    echo "<br>Задание 22<br>";
    $n = 10;
    $arr = array();
    for($i = 0; $i<$n;$i++)
    {
        $arr[$i] = rand(5,12);
    }
    print_r($arr);
    echo "<br>";
    for($i = 0 ;$i < $n; $i++)
    {
        switch($arr[$i])
        {
            case 5: echo "пять"."<br>";
            break;
            case 6: echo "шесть"."<br>";
            break;
            case 7: echo "семь"."<br>";
            break;
            default: echo "Какое-то другое число"."<br>";
            break;
        }
    }
    echo "<br>-------------------------------------";

    //Задание 23//
    echo "<br>Задание 23<br>";
    $n = 10;
    $a = array();
    for($i = 0; $i<$n;$i++)
    {
        $a[$i] = rand(1,20);
    }
    print_r($a);
    echo "<br>";

    $b = array(12,5,17,6,4);
    print_r($b);
    echo "<br>";

    for($i = 0; $i < $n; $i++)
    {
        $flag = true;
        for($j = 0 ; $j<5;$j++)
        {
            if($a[$i] == $b[$j]) $flag = false;
        }
        if($flag == true) echo $a[$i]." ";
    }

    echo "<br>";
    for($i = 0; $i < $n; $i++)
    {
        if(in_array($a[$i],$b) == false) echo $a[$i]." ";
    }

?>