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

//AQUI INICIA EL SIGUIENTE CURSO DE PHP
//manejo de datos
echo "<br>";
echo "<br>";
echo "<br>";
echo 'Un texto de una linea
varias lineas
\' backslash\\ $variable<br>';
$name  = 'Sergio';
echo "mi nombre es $name<br>";
echo 'mi nombre es ' . $name . '<br>';

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

class User
{
    public $cname = 'Sergio';
}

$user = new User;

echo "$user->cname quiere aprender {$courses ['backend'][0]}";
// el {} se usa con estructuras complejas

$courses = ['frontend' => 'javaSvript'];
echo "<br>$user->cname quiere aprender {$courses ['frontend']} <br>";

$teacher = 'italo';
$italo = 'profesor de PHP';
echo "$teacher es ${$teacher} <BR>";

function getTeacher ()
{
    return 'teacher';
}

echo "{${getTeacher()}} enseña PHP <br>";

//3. eXTRACCIÓN DE DATOS

$data = 'Estudio PHP';
echo $data{0} . "<br>";
echo $data[0] . '<br>';

$post = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt laudantium quidem corporis quasi repudiandae tempore totam rem minima nobis omnis et sit dolore, magnam dolor, doloribus est magni quam debitis.';
$extract = substr($post, 0, 20);

echo "<br>$extract... [ver más]<br>";

$data = 'javascript, php, laravel'; //campoo tags
$tags = explode(', ', $data); // array
echo "<pre>";
var_dump($tags);

$courses3 = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses3) . '<br>';

$course31 = "   Curse de PHP   ";
$course31 = trim($course31); //borra los espacios, ltrim, rtrim para los lados no mas
echo "<pre>";
echo "Quiero aprender $course31 <br>";

// 4. clase de formato de datos

//alterar
$text4 = "PHP es UN LENGUAJE";
echo strtolower($text4) ."<br>"; //func de PHP
echo lower($text4) ."<br>"; //funcion que hicimos en el curso anterior
echo ucfirst(lower($text4)) . "<br>";

//reemplazar
$slug = str_replace(' ', '-', $text4);
echo strtolower($slug) ."<br>";

//modificacion
$code4 = 39;
echo str_pad($code4, 8, '#') . "<BR>";
echo str_pad($code4, 8, '#', STR_PAD_BOTH) . "<BR>";// STR_PAD_RIGHT

$text41 = "<h1>Mi tecto con <br>etiquetas</h1>";
echo $text41;
echo  strip_tags($text41) . " (sin) <br>";

//elementos nonobyte
$text42 = "PHP es... año 2020, programación <br>";
echo strtoupper($text42);//monobyte
echo mb_strtoupper($text42);//multibyte

/*Expresiones regulares

/ contenedor
^ inicio
$ final
- rangos
[] patrón
{} condicion
*/
$password = '123456';
// contraseñe de numeros del 1 al 9, de 6 a 9 caracteres
echo preg_match('/^[0-9]{6,9}$/', $password);
var_dump ((bool) (preg_match('/^[0-9]{6,9}$/', $password)));

//continú en la carpeta de proyecto de datos de php