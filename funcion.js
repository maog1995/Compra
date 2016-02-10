/**
 * Created by maog1995 on 10/02/2016.
 */
var carrocompra = [];

function mas_info(str) {
    if (str.length == 0) {
        document.getElementByTagName("SECTION")[0].innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementsByTagName("SECTION")[0].innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "db.php?q=" + str, true);
        xmlhttp.send();
    }
}

window.onload= inicio();

function inicio(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementsByTagName("SECTION")[0].innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "articulos.php", true);
    xmlhttp.send();
}

function carrito(unidad,valor){
    carrocompra[unidad]=valor;
}

function listarcompra(){
    for(var i=0;i<carrocompra.length;i++){
        alert("Hay "+carrocompra[i]+" unidades de "+i);
    }
}
