<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/master.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <?php require "core/game.php"; ?>

    </head>

    <body>
        <div class="container">
            <div class="col-1"></div>
            <div class="col-10">
                <h1 id="titre">JanKenPon</h1>
                </br>
            </div>   
            <div class="col-1"></div>
            <div id="total" class="row">
                <div class="col-4 row">
                    <p>Gagner :&nbsp; </p><p id="scoreG"> 0</p>
                </div>
                <div class="col-4 row">
                    <p>Egalité :&nbsp; </p><p id="scoreE"> 0</p>
                </div>
                <div class="col-4 row">
                    <p>Perdu :&nbsp; </p><p id="scoreP"> 0</p>
                </div>
            </div>
            <div id="button" class="row">
                <div class="col">
                    <button id="pierre" class="btn btn-outline-dark btn-lg btn-block">Pierre</button>
                </div>
                <div class="col">
                    <button id="feuille" class="btn btn-outline-dark btn-lg btn-block">Feuille</button>
                </div>
                <div class="col">
                    <button id="ciseaux" class="btn btn-outline-dark btn-lg btn-block">Ciseau</button>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-10">
                <h1 id="result"></h1>
                </br>
            </div>   
            <div class="col-1"></div>
        </div>
         <script type="text/javascript" language="javascript">
            $().ready(function() {
                $g = 0;
                $l = 0;
                $e = 0;

                $('#pierre').click(function() {
                    $.ajax({
                        url: "core/game.php",
                        method: 'POST',
                        datatype: 'html',
                        data: {
                            pierre: 'pierre',
                        },
                        success: function(data) {
                            if( data == "Egalité"){
                                $e++;
                                $("#result").html(data).css({"color": "DodgerBlue"});
                                $("#scoreE").html($e);
                            }
                            if (data == "Gagner"){
                                $g++;
                                $("#result").html(data).css({"color": "MediumSeaGreen"});
                                $("#scoreG").html($g);
                            }
                            if (data == "Perdu"){
                                $l++;
                                $("#result").html(data).css({"color": "Tomato"});
                                $("#scoreP").html($l);
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                });
                $('#feuille').click(function() {
                    $.ajax({
                        url: "core/game.php",
                        method: 'POST',
                        datatype: 'html',
                        data: {
                            feuille: 'feuille',
                        },
                        success: function(data) {
                            if( data == "Egalité"){
                                $e++;
                                $("#result").html(data).css({"color": "DodgerBlue"});
                                $("#scoreE").html($e);
                            }
                            if (data == "Gagner"){
                                $g++;
                                $("#result").html(data).css({"color": "MediumSeaGreen"});
                                $("#scoreG").html($g);
                            }
                            if (data == "Perdu"){
                                $l++;
                                $("#result").html(data).css({"color": "Tomato"});
                                $("#scoreP").html($l);
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                });
                $('#ciseaux').click(function() {
                    $.ajax({
                        url: "core/game.php",
                        method: 'POST',
                        datatype: 'html',
                        data: {
                            ciseaux: 'ciseaux',
                        },
                        success: function(data) {
                            if( data == "Egalité"){
                                $e++;
                                $("#result").html(data).css({"color": "DodgerBlue"});
                                $("#scoreE").html($e);
                            }
                            if (data == "Gagner"){
                                $g++;
                                $("#result").html(data).css({"color": "MediumSeaGreen"});
                                $("#scoreG").html($g);
                            }
                            if (data == "Perdu"){
                                $l++;
                                $("#result").html(data).css({"color": "Tomato"});
                                $("#scoreP").html($l);
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                });
            });
        </script>
    </body>

</html>
