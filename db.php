<?php
/**
 * Created by PhpStorm.
 * User: maog1995
 * Date: 10/02/2016
 * Time: 18:23
 */
// Array con los articulos a vender
//0
$a[] = "<article id='completo'>
            <h4>iphone 6</h4>
            <img src='images/moviles/iphone6.jpg' alt=''>
            <ul>
                <li>Pantalla: 4.7 pulgadas</li>
                <li>Cámara: 12 MP</li>
                <li>Almacenamiento: min 16 GB</li>
            </ul>
            <p>El iPhone 6 es un movil de 2014 de la marca de Apple, con un procesador dual-core a 2.4 GHz y como minimo 16 GB y como maximo 128 GB</p>
            <input id='unidades' type=\"number\" name=\"number_control\" min=\"0\" value=\"0\" width='2px'>
            <button onclick='carrito(0,document.getElementById(\"unidades\").value)'>Añadir al carrito</button>
            <button onclick='inicio()' >Volver</button>
        </article>";

//1
$a[]="<article id='completo'>
            <h4>iphone 6s plus</h4>
            <img src='images/moviles/iphone6splus.jpg' alt=''>
            <ul>
                <li>Pantalla: 5.5 pulgadas</li>
                <li>Cámara: 12 MP</li>
                <li>Almacenamiento: min 16 GB</li>
            </ul>
            <p>El iPhone 6s plus es un movil de 2015 de la marca de Apple, con un procesador dual-core a 2.4 GHz y como minimo 16 GB y como maximo 128 GB</p>
            <input id='unidades' type=\"number\" name=\"number_control\" min=\"0\" value=\"0\" width='2px'>
            <button onclick='carrito(1,document.getElementById(\"unidades\").value)'>Añadir al carrito</button>
            <button onclick='inicio()' >Volver</button>
        </article>";
//2
$a[]="<article id='completo'>
            <h4>iphone 5s</h4>
            <img src='images/moviles/iphone5s.jpg' alt=''>
            <ul>
                <li>Pantalla: 4 pulgadas</li>
                <li>Cámara: 8 MP</li>
                <li>Almacenamiento: min 16 GB</li>
            </ul>
            <p>El iPhone 5s es un movil de 2013 de la marca de Apple, con un procesador dual-core a 1.8 GHz y como minimo 16 GB y como maximo 128 GB</p>
            <input id='unidades' type=\"number\" name=\"number_control\" min=\"0\" value=\"0\" width='2px'>
            <button onclick='carrito(2,document.getElementById(\"unidades\").value)'>Añadir al carrito</button>
            <button onclick='inicio()' >Volver</button>
        </article>";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = $a[$q-1];

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>

