/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function Calenaderio(idrecinto,contenedorcalendario,onselectday) {


    this.idrecinto=idrecinto;
    this.contenedorcalendario = contenedorcalendario;
    this.onselectaday=onselectday;
    this.fecha=new Date();
    this.getFecha=Calendario_getFecha;
    this.showCalendario=Calendario_showCalenaderio;
    this.getMothOfferDays=Calendario_getMothOfferDays;
    this.getPreciosMes=Calendario_getPreciosMes;
    this.onclickSelectDay=Calendario_onclickSelectDay;
    this.showCalendario(this.fecha.getMonth()+1,this.fecha.getFullYear());
    
    
    
    
}


function Calendario_showCalenaderio(month, year) {

    //var fecha;
    var fecha2;
    var ajaxobj;
    var diasemana;
    var calendario;
    var capa;
    var capa2;
    var tabla;
    var fila;
    var columna;
    var cabeceracuerpotabla;
    var enlace;
    var texto;
    var lenguaje
    var meses;
    var diasconoferta;
    var preciosdias;
    var hoy;
    var cuenta;

    diasconoferta = new Array();
    hoy = new Date()
    cuenta = 0;




    meses = new Array();
    meses[0] = "Enero";
    meses[1] = "Febrero";
    meses[2] = "Marzo";
    meses[3] = "Abril";
    meses[4] = "Mayo";
    meses[5] = "Junio";
    meses[6] = "Julio";
    meses[7] = "Agosto";
    meses[8] = "Septiembre";
    meses[9] = "Octubre";
    meses[10] = "Noviembre";
    meses[11] = "Diciembre";



    ajaxobj = getAjax();
    calendario = document.getElementById(this.contenedorcalendario);

    this.fecha = new Date(year, month - 1, 1);

    diasemana = this.fecha.getDay();
    if (diasemana == 0) {
        diasemana = 7;
    }

    capa = document.createElement("div");





    document.getElementById(this.contenedorcalendario + "_mesmostrado").innerHTML = "";
    document.getElementById(this.contenedorcalendario + "_mesmostrado").innerHTML = meses[month - 1] + " - " + year




    capa2 = document.createElement("div");
    capa2.className = "table-resposive table-resposive-sm table-resposive-md table-resposive-lg table-resposive-xl";

    tabla = document.createElement("table");
    tabla.setAttribute("border", "2");
    tabla.className = "table";

    cabeceracuerpotabla = document.createElement("thead");
    fila = document.createElement("tr");
    columna = document.createElement("th");
    columna.className = "text-center";
    texto = document.createTextNode("L");

    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("M");


    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("X");


    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("J");


    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("V");

    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("S");

    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("D");

    columna.appendChild(texto);
    fila.appendChild(columna);
    cabeceracuerpotabla.appendChild(fila);
    tabla.appendChild(cabeceracuerpotabla);
    cabeceracuerpotabla = document.createElement("tbody");
    fila = document.createElement("tr");

    for (var i = 1; i < diasemana; i++) {
        columna = document.createElement("td");
        columna.className = "text-center bg-white text-white";
        texto = document.createTextNode("");
        columna.appendChild(texto);
        fila.appendChild(columna);
    }
    columna = document.createElement("td");
    columna.id = this.contenedorcalendario + "_celdacalendario1";
    columna.className = "textocalendario";

    diasconoferta = this.getMothOfferDays(month, year)
    preciosdias = this.getPreciosMes(month, year);
    if (diasconoferta != null && preciosdias != null) {

        fecha2 = new Date(year, month - 1, 1);
        if (hoy > fecha2) {
            columna.className = "text-center bg-white text-white";
            texto = document.createTextNode("1");
            columna.appendChild(texto);

        } else if (diasconoferta[1] == 1) {



            columna.className = "text-center bg-success text-white";
            enlace = document.createElement("a");
            enlace.setAttribute("href", "javascript:void(0);");
            enlace.setAttribute("data-fecha", year + "-" + month + "-1");
            //enlace.setAttribute("data-calendario", this);
            enlace.datacalendario=this;
            enlace.setAttribute("data-toggle", "tooltip");
            enlace.setAttribute("title", decodificar(preciosdias[1].precio) + " Euros " + decodificar(preciosdias[1].motivooferta));
            enlace.setAttribute("data-html", "true");


            //enlace.onclick = establecerdiaseleccionado;
            enlace.onclick = this.onclickSelectDay;
            texto = document.createTextNode("1");
            enlace.appendChild(texto);
            columna.appendChild(enlace);
        } else if (diasconoferta[1] == 2) {


            columna.className = "text-center bg-danger text-white";
            texto = document.createTextNode("1");
            columna.appendChild(texto);
        } else {
            columna.className = "text-center bg-white text-black";
            enlace = document.createElement("a");
            enlace.setAttribute("href", "javascript:void(0);");
            enlace.setAttribute("data-fecha",  year + "-" + month + "-1");
            //enlace.setAttribute("data-calendario", this);
            enlace.datacalendario=this;
            enlace.setAttribute("data-toggle", "tooltip");
            enlace.setAttribute("title", decodificar(preciosdias[1].precio) + " Euros " + decodificar(preciosdias[1].motivooferta));
            enlace.setAttribute("data-html", "true");

            //enlace.onclick = establecerdiaseleccionado;
            enlace.onclick = this.onclickSelectDay;
            texto = document.createTextNode("1");
            enlace.appendChild(texto);
            columna.appendChild(enlace);

        }


        fila.appendChild(columna);
        if (diasemana == 7) {
            diasemana = 0;
            cabeceracuerpotabla.appendChild(fila);
        }
        fecha = new Date(year, month, 0)
        for (var i = 2; i <= fecha.getDate(); i++) {
            diasemana++;
            if (diasemana == 1) {
                fila = document.createElement("tr");
            }

            columna = document.createElement("td");
            columna.id = this.contenedorcalendario + "_celdacalendario" + i
            columna.className = "textocalendario";

            fecha2 = new Date(year, month - 1, i);
            if (hoy > fecha2) {
                columna.className = "text-center bg-white text-white";
                texto = document.createTextNode("" + i);
                columna.appendChild(texto);

            } else if (diasconoferta[i] == 1) {


                columna.className = "text-center bg-success text-white";
                enlace = document.createElement("a");
                enlace.setAttribute("href", "javascript:void(0);");
                enlace.setAttribute("data-fecha", year + "-" +month + "-" + i);
                //enlace.setAttribute("data-calendario", this);
                enlace.datacalendario=this;
                enlace.setAttribute("data-toggle", "tooltip");
                enlace.setAttribute("title", decodificar(preciosdias[i].precio) + " Euros " + decodificar(preciosdias[i].motivooferta));
                enlace.setAttribute("data-html", "true");

                //enlace.onclick = establecerdiaseleccionado
                enlace.onclick = this.onclickSelectDay;
                texto = document.createTextNode("" + i);
                enlace.appendChild(texto);
                columna.appendChild(enlace);
            } else if (diasconoferta[i] == 2) {


                columna.className = "text-center bg-danger text-white";
                texto = document.createTextNode("" + i);
                columna.appendChild(texto);
            } else {
                columna.className = "text-center bg-white text-black";
                enlace = document.createElement("a");
                enlace.setAttribute("href", "javascript:void(0);");
                enlace.setAttribute("data-fecha", year + "-" +month + "-" + i);
                //enlace.setAttribute("data-calendario", this);
                enlace.datacalendario=this;
                enlace.setAttribute("data-toggle", "tooltip");
                enlace.setAttribute("title", decodificar(preciosdias[i].precio) + " Euros " + decodificar(preciosdias[i].motivooferta));
                enlace.setAttribute("data-html", "true");

                //enlace.onclick = establecerdiaseleccionado;
                enlace.onclick = this.onclickSelectDay;
                texto = document.createTextNode("" + i);
                enlace.appendChild(texto);
                columna.appendChild(enlace);

            }

            fila.appendChild(columna);
            if (diasemana == 7) {
                diasemana = 0;
                cabeceracuerpotabla.appendChild(fila);
            }


        }


        if (diasemana != 0 && diasemana < 7) {
            for (var i = diasemana; i < 7; i++) {
                columna = document.createElement("td");
                columna.className = "text-center bg-white text-black";
                texto = document.createTextNode("");
                columna.appendChild(texto);
                fila.appendChild(columna);
            }
            diasemana = 0;
            cabeceracuerpotabla.appendChild(fila);
        }


        tabla.appendChild(cabeceracuerpotabla);
        capa2.appendChild(tabla);
        capa.appendChild(capa2);
        calendario.innerHTML = "";

        calendario.appendChild(capa);
    } else {
        columna = document.createElement("div");

        calendario.innerHTML = "";
        columna.className = "text-center text-danger";
        texto = document.createTextNode("se ha producido un error inesperado");
        columna.appendChild(texto);
        calendario.appendChild(columna);
    }




}


function Calendario_getMothOfferDays(month, year) {
    var ajaxurl;
    var cadenaenvio;
    var datos;
    var ajaxobj;
    var retval;

    retval = true;


    ajaxurl = new AJAXURL();

    datos = new Object();
    datos.month = month;
    datos.year = year;
    datos.idrecinto = this.idrecinto;


    cadenaenvio = "datos=" + escape(JSON.stringify(datos));
    ajaxobj = new getAjax();

    if (DEPURACION == true) {

        console.log(ajaxurl.DIASCONOFERTA + "?" + cadenaenvio);
        ajaxobj.open("GET", ajaxurl.DIASCONOFERTA + "?" + cadenaenvio, false);
        ajaxobj.send(null);
    } else {

        ajaxobj.open("POST", ajaxurl.DIASCONOFERTA, false);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaenvio);
    }



    cadenaenvio = ajaxobj.responseText;
    retval = JSON.parse(cadenaenvio);

    return retval;
}

function Calendario_getPreciosMes(month, year) {
    var ajaxurl;
    var cadenaenvio;
    var datos;
    var ajaxobj;
    var retval;

    retval = true;


    ajaxurl = new AJAXURL();

    datos = new Object();
    datos.month = month;
    datos.year = year;
    datos.idrecinto = this.idrecinto;


    cadenaenvio = "datos=" + escape(JSON.stringify(datos));
    ajaxobj = new getAjax();

    if (DEPURACION == true) {

        console.log(ajaxurl.PRECIOSMES + "?" + cadenaenvio);
        ajaxobj.open("GET", ajaxurl.PRECIOSMES + "?" + cadenaenvio, false);
        ajaxobj.send(null);
    } else {

        ajaxobj.open("POST", ajaxurl.PRECIOSMES, false);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaenvio);
    }



    cadenaenvio = ajaxobj.responseText;
    retval = JSON.parse(cadenaenvio);

    return retval;
}


function Calendario_getFecha() {
    
    return this.fecha;
    
}



function Calendario_onclickSelectDay() {
    
 
    this.datacalendario.onselectaday(this.datacalendario,this.getAttribute("data-fecha"));
    
}

