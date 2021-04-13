<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    jajajaja \n <br/>
</body>
</html>

<?php
require __DIR__ . '/vendor/autoload.php';
//6
class Answer
{
    protected $clients = []; //comentarios
    protected $insurers = []; # mas comentarios
    /*
    otra vez
    mas comentarios - (puntito de prueba)
    */
}
//7
//Asignacion
$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'inglés'
];

echo 'Suma 2+2: ' . ((int) 2 + (int) 2) . '\n\n';
echo '\nResta 2-2: ' . ((int) 2 - (int) 2);
echo 'Multiplica 2*2: ' . ((int) 2 * (int) 2);
echo 'Divide 2/2: ' . ((int) 2 / (int) 2);
echo 'Modulo 2%2: ' . ((int) 2 % (int) 2);
echo 'werf';
echo 'Exponencial 2**2: ' . ((int) 2 ** (int) 2);
//8
//comparacion
//igual == y ===
//Diferencias !=, !==
//<, >, <=, >=

//variables
$app = 'name';
$name ='platzi';

echo $app; //name
echo $$app; //platzi

$a = (int) 2;

if ($a==1) {
    echo 'if 1';
}
elseif ($a==2) {
    echo 'if 2 \n';
}
else {
    echo 'if 3';
}

switch ($a) {
    case '1':
        echo 'switch 1';
        break;
    case '2':
        echo 'switch 2';
        break;
    
    default:
        echo 'switch 3';
        break;
}

foreach ($datos as $row) {
    # code...
}

while ($a<=10){
    echo $a;
    $a++;
}

do {
    echo $a;
    $a++;
} while ($a<=10);

for ($b = 0; $b <=10; $b++) {
    echo "b" . $b;
}

echo Text\Format::upperText(' hola');
echo upper (' sergio');
echo lower (' seRgio   ');
echo 'debo aprender a colocar cambios de linea en php';