<?php
echo "body {
    /* achtergrond? */
    background-image: url(Afbeeldingen/achtergrond.jpg);
    background-repeat: repeat; /* herhaalt de afbeelding zodat de achtergrond doorloopt */
    background-color: grey;
}

/* Menubalk */

#menubalk ul {
    list-style-type: none; /* geen opsommingstekens o.i.d. (circle/square)*/
    margin: 0; /* marge buiten een element */
    padding: 0; /* marge binnen een element */
    top: 0;
    left: 0;
    width: 20%; /* breedte menubalk */
    background-color: #f1f1f1; /* https://www.w3schools.com/Colors/colors_hexadecimal.asp; kleur menubalk */
    height: 100%;
    position: fixed; /* De menubalk beweegt niet mee bij scrollen (fixed/relative) */
    overflow: auto; /* Als de menubalk te veel items bevat, kan er gescrold worden (visible, auto, hidden, scroll)*/
}

li a {
    display: block; /* De menubalk schuift niet mee (inline, none)*/
    color: #000; /* kleur letters */
    padding: 10% 5%; /* boven en onder, links en rechts */
    text-decoration: none; /* niets, (overline, underline, line-throug, bold, underline overline, dotted, red/blue */
    font-family: "Courier New", Courier, monospace; /* https://www.w3schools.com/cssref/css_websafe_fonts.asp */
    font-size: 20px;
}

.active {
    /* zo wordt een item weergegeven als de betreffende pagina actief is */
    background-color: #008080;
    color: white;
}


li a:hover {
    /* zo wordt een item weergegeven wanneer de aanwijzer erover beweegt */
    background-color: #555;
    color: white;
}

/* alle pagina's */

.schaakbord {
    height: 250px;
    width: 250px;
}

.afbeeldingen table {
    margin-left: 21%;
    border-style: none; /* bij dotted krijg je puntjes (dotted/solid/double/dashed)*/
    border-collapse: separate; /* wel of geen ruimte tussen de celranden (seperate / collapse)*/
    border-spacing: 5px; /* de afstand tussen de randen van aangrenzende cellen */
}

.afbeeldingen th, .afbeeldingen td {
    border-style: none; /*(dotted/solid/double/dashed)*/
}

/* Homepagina */

#home {
    overflow-y: hidden; /* zorgt ervoor dat er niet gescrold kan worden (in de y-richting) op de home-pagina - (scroll/hidden/auto/visible) */
}

.frontpicture {
    left: 20%;
    top: 0;
    width: 80%;
    height: 100%;
    position: absolute; /*(static, relative, absolute, fixed, or sticky)*/
    z-index: -1; /* Het plaatje wordt door de negatieve z-index achter de tekst geplaatst */
}

#slogan {
    font-family: "Courier New",Courier, monospace;
    font-size: 100px;
    display: block;
    padding-left: 2%;
    width: 45%;
    margin: 30% 0 0 23%; /* boven, rechts, onder, links */
    background-color: #008080;
    color: white;
}

/* Spelregels */

.picture {
    margin-left: 21%;
}

/* Contactformulier */

#contact_title {
    margin-left: 40%;
    font-weight: bold; /* (normal, bold, lighter, bolder, 100, 200, 300, 400 (normal), 500, 600, 700 (bold), 800, 900)*/
    font-family: "Courier New",Courier, monospace;
    font-size: 40px;
    color: black;
}

#contactform {
    margin-left: 40%;
    font-family: "Courier New",Courier, monospace;
    line-height: 25px;
}

#inputbutton_form {
    background-color: #008080;
    color: white;
    font-weight: 400;
    border: 0px;
    font-family: "Courier New",Courier, monospace;
    font-size:20px;
}

#resetbutton_form {
    background-color: #999999;
    color: white;
    font-weight: 400;
    border: 0px;
    font-family: "Courier New",Courier, monospace;
    font-size: 20px;
}

#inputbutton_form:hover {
    /* zo wordt een item weergegeven wanneer de aanwijzer erover beweegt */
    background-color: #555;
}

#resetbutton_form:hover {
    /* zo wordt een item weergegeven wanneer de aanwijzer erover beweegt */
    background-color: #555;
}

#thankyou { 
    margin-left:40%;
}

/* Tekst */

p {
    /* p is algemene tekst*/
    margin-left: 21%; /* de tekst begint meteen naast de menubalk */
    font-family: "Courier New", Courier, monospace;
    font-size: 20px;
}

h1 {
    margin-left: 21%;
    font-weight: bold;
    text-align: center;
    font-family: "Courier New",Courier, monospace;
    font-size: 40px;
    color: black;
}

hr { 
    display: block;
    margin: 0.5em auto 0.5em auto; /* boven, rechts, onder, links */
    border-style: solid; /* bij dotted krijg je een lijn met puntjes */
    border-width: 2px;
    color:  #008080;
} 

h2 {
    font-weight: bold; /*maakt de text dikgedrukt*/
    margin-left: 21%;
    font-family: "Courier New",Courier, monospace;
    font-size: 35px;
    color: black;
}

h3 {
    font-weight: bold;
    margin-left: 21%;
    font-family: "Courier New",Courier, monospace;
    font-size: 25px;
    color: black;
}

h4 {
    font-style: italic;
    font-family: "Courier New",Courier, monospace;
    margin-left: 21%;
    color: black;
    font-size: 20px;
}

ul {
    margin-left: 21%;
    font-family: "Courier New", Courier, monospace;
    font-size: 20px;
}

table {
    margin-left: 21%;
    border-collapse: collapse; /* zorgt ervoor dat de lijnen van cellen en de tabel zelf niet dubbel weergegeven worden */
    border: 1px solid black;
    font-family: "Courier New", Courier, monospace;
    font-size: 18px;
}

th, td {
    border: 1px solid black;
    text-align: left;
    padding: 5px; /* zorgt voor ruimte tussen tekst en lijn cel */
}

/*
(li) a:visited {
    color: black;
}
*/"
?>
