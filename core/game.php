<?php

// Pierre = 0 Feuille = 1 cisseaux = 2

if ( !empty($_POST["pierre"]) ){
    pierre();
}
if ( !empty($_POST["feuille"]) ){
    feuille();
}
if ( !empty($_POST["ciseaux"]) ){
    ciseaux();
}


function pierre(){
    $pierre = 0;
    $rand = rand ( 0 , 2 );
    
    if( $pierre == $rand){
        echo 'Egalité';
    }
    if( $rand == 1){
        echo 'Perdu';
    }
    if( $rand == 2){
        echo 'Gagner';
    }
}

function feuille(){
    $feuille = 1;
    $rand = rand ( 0 , 2 );
    
    if( $feuille == $rand){
        echo 'Egalité';
    }
    if( $rand == 2){
        echo 'Perdu';
    }
    if( $rand == 0){
        echo 'Gagner';
    }
}

function ciseaux(){
    $ciseaux = 2;
    $rand = rand ( 0 , 2 );
   
    if( $ciseaux == $rand){
        echo 'Egalité';
    }
    if( $rand == 0){
        echo 'Perdu';
    }
    if( $rand == 1){
        echo 'Gagner';
    }
}