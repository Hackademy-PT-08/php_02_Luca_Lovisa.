<?php

// - Traccia 1:

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere.

// $Users = [
//     [
//         'name'=>'Davide',
//         'Surname'=>'Rossi',
//         'Gender'=>'M'
//     ],
//     [
//         'name'=>'Marco',
//         'Surname'=>'Bianchi',
//         'Gender'=>'NB'
//     ],
//     [
//         'name'=>'Giulia',
//         'Surname'=>'Verdi',
//         'Gender'=>'F'
//     ],
//     [
//         'name'=>'Andrea',
//         'Surname'=>'Black',
//         'Gender'=>'NB'
//     ],
//     [
//         'name'=>'Alessandro',
//         'Surname'=>'Brown',
//         'Gender'=>'M'
//     ],
//     [
//         'name'=>'Azzurra',
//         'Surname'=>'Whithe',
//         'Gender'=>'F'
//     ],
// ];

// foreach ($Users as $User){


//     switch ($User) {
//     case $User['Gender']=='M' :
//         echo "Buongiorno Sig. $User[name] $User[Surname] \n" ;
//         break;
//     case $User['Gender']=='F':
//         echo "Buongiorno Sig.ra $User[name] $User[Surname] \n";
//         break;
//     case $User['Gender'] == 'NB':
//         echo "Buongiorno $User[name] $User[Surname] \n";
//         break;     
// };
// };





// - Traccia 2:

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array



// $Numbers = ['2','5','6','8','11','22'];

// $sum=0;
// $Counter=0;
// foreach ($Numbers as $Number){
// if ($Number % 2 == 0){
   
//     $sum += $Number;
//     $Counter ++;
// }
// }

// $media = $sum/$Counter; 
// echo "$media \n";






// - Traccia 3:

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


// for ($i=0;$i<101;$i++) {
//     if ($i % 3 == 0 && $i % 5 == 0){
//         echo "HACKADEMY ";
//     }else if ($i % 5 == 0){
//         echo "JAVASCRIPT "; 
//     }else if ($i % 3 == 0){
//         echo "PHP ";
//     }
//     echo "$i \n";
// }



// ESERCIZIO EXTRA
// Scrivere un programma che converta un voto numerico (v) in un giudizio seguendo questi parametri:
// v < 18: insufficiente
// 18 <= v < 21: sufficiente
// 21 <= v < 24: buono
// 24 <= v < 27: distinto
// 27 <= v <= 29: ottimo
// v = 30: eccellente
// Esempio:
// Input: v = 29
// Output: Ottimo

$v=25;

if ($v <0 || $v >30){
    echo "il Voto non è corretto";
}else if ($v < 18) {
    echo "Il tuo voto $v è 'Insufficiente'";
}else if ($v >=18 && $v < 21){
    echo "Il tuo voto $v è 'Sufficiente'";
}else if ($v >=21 && $v < 24){
    echo "Il tuo voto $v è 'Buono'";
}else if ($v >=24 && $v < 27){
    echo "Il tuo voto $v è 'Distinto'";
}else if ($v >=27 && $v < 29){
    echo "Il tuo voto $v è 'Ottimo'";
}else if ($v == 30){
    echo "Il tuo voto $v è 'Eccellente'";
}



