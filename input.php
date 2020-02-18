<?php
//Przesylasz dane z formularza do zmiennych phpowych
// $_POST to metoda przesylu
$car = $_POST["Car"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$dateofbirth = $_POST["date-of-birth"];
$Email = $_POST["Email"];
$Phonenumber = $_POST["Phone-number"];
$nationality = $_POST["nationality"];
$IDnumber = $_POST["ID-number"];
$Driverlicense = $_POST["Driver-license"];
$creditcard = $_POST["credit-card"];
$Daterent = $_POST["Date-rent"];
$Datereturn = $_POST["Date-return"];
$Rental = $_POST["rentalPlace"];
$Terms = $_POST["termsCheck"];

$plik = fopen('formularz.txt', 'w+');
// do zmiennej przypisujesz otwarcie pliku w++ to metoda otwarcia do odczytu i zapisu


ftruncate($plik, 0); // czycisz plik do 0 byteow

$zawartosc = $car. PHP_EOL .$name. PHP_EOL .$surname. PHP_EOL .$dateofbirth. PHP_EOL .$Email. PHP_EOL .$Phonenumber. PHP_EOL .$nationality.
    PHP_EOL .$IDnumber. PHP_EOL .$Driverlicense. PHP_EOL .$creditcard. PHP_EOL .$Daterent. PHP_EOL .$Datereturn. PHP_EOL .$Rental. PHP_EOL .$Terms;

// przypisujesz do zmiennej to co ma byc wpisywane do pliku czyli wyzej zrobione zmienne PHP_EOL to koniec linijki
// zeby ladnie w pliku wygladalo

fwrite($plik, $zawartosc); //wpisywanie do pliku
fclose($plik); //zamykasz plik
echo "Dane zapisano do formularz.txt, oraz wysłano e-mail na podany adres.";

$to = "lukaszkopyszko98@gmail.com";
$subject = "potwierdzenie";

mail($to, $subject,$zawartosc);