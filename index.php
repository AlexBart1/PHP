<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;
        
echo 17;
echo"<br>";
print (2.2);
echo"<br>";
echo "škola";
echo"<br>";
print(FALSE);
echo " ahoj "." čus ";
echo "<img src=\"koronavirus.jpg.jpg\">";
echo "\\";
$a = 8;
            echo "<br>";
            $b = 5;

            echo "<br>";

            dump ($a + $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

           dump ($a - $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a * $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

            echo $a / $b;

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

          dump ($a += $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a -= $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

           dump ($a *= $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a /= $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a == $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a != $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

           dump ($a > $b);

            echo "<br>";

            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a < $b);

            echo "<br>";
            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a || $b);

            echo "<br>";
            $a = 8;
            echo"<br>";
            $b = 5;

            dump ($a & $b);

            
        
 $produkty =  array(1 =>"op",2 =>"op1", 3 => "op2",4 =>"op3",5 =>"op4",6 =>"op5",7 =>"op6",8 =>"op7",9 =>"op8",10 =>"op9");                  
 
 $produkty1["op"] = array( );
 $produkty1["up"] = array( );
 $produkty1["ip"] = array( 
    array('jméno' => 'Alex', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'úžovka', 'věk' => 3 ),
    array('jméno' => 'Kuba', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'krajta', 'věk' => 6),
    array('jméno' => 'Ondra', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'kobra', 'věk' => 4 ),
    array('jméno' => 'Vojta', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'zmije', 'věk' => 2),
    array('jméno' => 'Michal', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'anakonda', 'věk' => 1 ),
    array('jméno' => 'Jan', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'mamba', 'věk' => 7 ),
    array('jméno' => 'Pepa', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'chřestýš', 'věk' => 5),
    array('jméno' => 'Karel', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'pakobra', 'věk' => 9),
    array('jméno' => 'David', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'bojga', 'věk' => 10),
    array('jméno' => 'Dominik', 'pohlaví' => 'M', 'druh' => 'had', 'rasa' => 'štíhlovka', 'věk' => 1,5),
      );
dump($produkty);     
 dump($produkty1); 
 
 
         

                echo "</tr>";
            }
            echo "</table><br><br><br>";

           echo abs(7)."<br>";
            echo cos(149)."<br>";
           $string="Dobrý den";
          echo strstr($string, "its")."<br>";
          echo strpos($string, "its")."<br>";
          echo sizeof($produkty);
          array_splice($produkty, 0, 1, "oi1"); 
          dump($produkty);

          $i=1;
          foreach ($produkty as $produkt){
              echo $i."-".$produkt."<br>";
              $i++;
          }
            echo currency(48.200);

            function currency($price, $currency = "CZK", $precision = 2) {
                $price = round($price, $precision);
                $price = number_format($price, $precision) . ",-" . $currency;

                return $price;
                
                //Práce s řetězcem
            $jmena = "Jan, KaJa, ReNne, OnDrA";
            var_dump($jmena);
            $jmena = str_replace("", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace(",,", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace("-", ",", $jmena);
            var_dump($jmena);
            $jmena = str_replace(";", ",", $jmena);
            $jmena = str_replace(",", ",", $jmena);
            var_dump($jmena);
            $jmena = strtolower($jmena);
            var_dump($jmena);
            $jmena = ucwords($jmena);
            var_dump($jmena);
            $jmena = explode(" ", $jmena);
            var_dump($jmena);
        
                  
       
}
      
  ?>
  
