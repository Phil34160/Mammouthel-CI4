<?php
?>
<style>
    html{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url('/Jurassic2.jpg');
        background-size: cover;
        margin: 0;
        height: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 11% 79.8% 9.2%;
        
    }
    .header{
        grid-column: 1/8;
        grid-row: 1;
        /* width: 100%;
        height: 12vh; */
        background: black;
        box-shadow: 2px 3px 5px red;
        z-index: 2;
    }
    .navbar{
        grid-column: 1;
        grid-row: 2;
        background: url('/dino1.gif');
        background-size: cover;
        height: 100%;
        box-shadow: -2px -3px 6px inset red;
        z-index: 0;
        text-align: left;
    }
    .navbar:hover{
        box-shadow:2px 3px 6px red;
    }
    /* class main "gridé" et qui accueillera le contenu des infos demandées */
    .main{  
        grid-column: 2/8;
        grid-row: 2;
        margin-left:1%;
        margin-top:1%;
    }
    .footer{
        grid-column: 1/8;
        grid-row: 3;
        background: black;
        height: 100%;
        box-shadow: 2px -3px 3px red;
        z-index: 1;
    }
    h1{
        color: red;
        text-align: center;
        text-shadow: 2px 3px 3px silver;
        
    }
    h1>a{
        color: red;
        text-align: center;
        text-shadow: 2px 3px 3px silver;
        text-decoration:none;
    }
    
    h4{
        color: red;
        text-align: center;
        text-shadow: 1px 1px 1px silver;
    }
    a{
        color: white;
        text-align: center;
        text-shadow: 1px 1px 1px red;
    }
    .list_link{
        font-weight:bold;
    }
    .list_link:hover{
        text-shadow:2px 2px 1px red;
    }
    ul{
        list-style: none;
        margin-left: -10%;
    }
    strong{
        color: white;
        text-shadow: 1px 1px 1px red;
    }
    .no_a{
        text-decoration: none;
        color:black;
        font-weight:bold;
    }
    button{
        background:black;
        color:white;
        box-shadow: 1px 1px 2px red;
        border:none;
        border-radius:9px;
        width:5%;
        height:5%;
        text-shadow:1px 1px 1px red;
        font-weight:bold;
    }
    button:hover{
        box-shadow: 2px 2px 3px red;   
    }
    img{
        box-shadow:1px -1px 2px white,
                   2px -2px 4px silver,
                   3px -3px 5px red,
                   5px -5px 7px red,
                   -1px 1px 2px white,
                   -2px 2px 4px silver,
                   -3px 3px 5px red,
                   -5px 5px 7px red;
        border-radius:5px;
        margin-left:7%;
        -webkit-transition: .5s ease-in-out;
	    transition: .5s ease-in-out;
        -webkit-filter: blur(3px);
	    filter: blur(3px);
        /* -webkit-filter: grayscale(100%);
	    filter: grayscale(100%); */
    }
    img:hover{
        width:500px;
        height:330px;
        border-radius:50%;
        -webkit-filter: blur(0);
	    filter: blur(0);
        -webkit-filter: grayscale(0);
	    filter: grayscale(0);
        -webkit-transform: rotate(360deg); /* rotation de l'image */
        transform: rotate(360deg);
        /* -webkit-transform: scale(1.2);
	    transform: scale(1.2); */
    }
</style>
<html>
<body>
<div class="header">
<h1><a href="/Home">Welcome to Mammouthel</a></h1>
</div>
<div class="navbar">
    <ul><br>
        <legend><h3><strong>Sites list</strong></h3></legend><br>
        <li><a href="/Home/index_info/1">Saint petersburg</a></li><br>
        <li><a href="/Home/index_info/2">Bordeaux</a></li><br>
        <li><a href="/Home/index_info/3">Quito</a></li>
    </ul>
</div>
<div class="footer">
    <h4>&copy;Copyright 2020 this is the footer</h4>
</div>
</body>
</html>