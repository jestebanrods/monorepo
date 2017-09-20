<?php
/*
Metacaracteres
.	Match con cualquier caracter
^	Match al principio del string
$	Match al final del string
\s	Match con cualquier espacio en blanco
\d	Match con cualquier dígito
\D	Match con cualquier caracter que no sea un dígito
\w	Match con cualquier caracter que pueda ser parte de una palabra (letra, número, guión bajo)
\W	Match con cualquier caracter que NO pueda ser parte de una palabra (letra, número, guión bajo)
\A	Inicio de un string.
\z	Final de un string.

Cuantificadores
*	el caracter puede aparecer cero o mas veces.
+	el caracter puede aparecer una o mas veces.
?	el caracter puede aparecer cero o una vez.
{n}	el caracter aparece exactamente n veces.
{n,}	el caracter aparece n o más veces.
{n,m}	el caracter puede aparecer entre n y m veces.
Como parte de la notacion, siempre encerramos las expresiones regulares entre /, llaves ({}) o #. Por ejemplo,
la expresion /ab?c/ hace match con ac y abc.
La expresión regular /ab{1,3}c/ hace match con abc, abbcy abbbc.

Agrupadores
[]	permiten agrupar creando rangos, por ejemplo /ab[0-5]+c/ hará match con cualquier string que contenga ab, una o
más veces un número entre 0 y 5, y finalmente una c. Por ejemplo: ab12c.
()	Nos permiten crear sub-expresiones, expresiones regulares contenidas dentro de otras: /a(bc.)+e/.
Tiene un uso especial en formas como (…), que permite capturar todos lo que encierren los paréntesis, y (a|b)
que hace match con a o b.

Modificadores
Permiten cambiar el modo en que se ejecute la expresión regular. Se agregan después del delimitador de cierre.
i	Coincidir indistintamente entre mayúsculas y minúsculas.
m	Match multilínea.
s	El metacaracter . hará match también con el caracter de cambio de línea.
u	Hacer los matches en modo UTF8
x	Ignorar espacios.

Otros modificadores
X,e,A,D,S,U,J ver más
*/

$contenido = 'Radio Taxis Libres S.A.';

$exp1 = preg_match('/^Radio/', $contenido, $coincidencias, PREG_OFFSET_CAPTURE);
$exp2 = preg_match('/S.A.$/', $contenido, $coincidencias, PREG_OFFSET_CAPTURE);

$email = 'El correoo es: jers.203.sdfs@ho.com';
$exp = preg_match("/[a-z]+[a-zA-Z0-9\._-]*@[a-zA-Z0-9_-]+.[a-zA-Z0-9]+/", $email, $coincidencias);

$username = 'jestebanrs2344';
$exp3 = preg_match("/^[a-zA-Z0-9]+$/", $username);

echo "$exp\n";
echo $coincidencias[0] . "\n";

$username = 'XSW456';
$exp = preg_match("/^([A-Z]{3}[0-9]{3})$/", $username);

$username = '12345678998745632110'; //20
$exp = preg_match("/^([0-9]{19,20})$/", $username);

echo "$exp\n";

