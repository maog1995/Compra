<?php
/**
 * Created by PhpStorm.
 * User: maog1995
 * Date: 10/02/2016
 * Time: 18:24
 */

<?php
// Array with names
$a[] = "<article onclick=mas_info(1)>
            <h4>iphone 6</h4>
            <img src='images/moviles/iphone6.jpg' alt=''>
            <ul>
                <li>Pantalla: 4.7 pulgadas</li>
                <li>Cámara: 12 MP</li>
                <li>Almacenamiento: min 16 GB</li>
            </ul>
        </article>";

$a[]="<article onclick=mas_info(2)>
            <h4>iphone 6s plus</h4>
            <img src='images/moviles/iphone6splus.jpg' alt=''>
            <ul>
                <li>Pantalla: 5.5 pulgadas</li>
                <li>Cámara: 12 MP</li>
                <li>Almacenamiento: min 16 GB</li>
            </ul>
        </article>";

$a[]="<article onclick=mas_info(3)>
            <h4>iphone 5s</h4>
            <img src='images/moviles/iphone5s.jpg' alt=''>
            <ul>
                <li>Pantalla: 4 pulgadas</li>
                <li>Cámara: 8 MP</li>
                <li>Almacenamiento: min 16 GB</li>
            </ul>
        </article>";

// get the q parameter from URL

$hint=$a[0].$a[1].$a[2];

// lookup all hints from array if $q is different from ""


// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
