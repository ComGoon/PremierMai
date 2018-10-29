<?php
/**
 * Created by PhpStorm.
 * User: _comGoon
 * Date: 10/29/18
 * Time: 12:27 AM
 */




for($i=2005;$i<=2018;$i++)
{
    // mktime retourne un 'timestamp' UNIX correspondant aux arguments fournis
    $jour=mktime(0,0,0,5,1, $i);


    //Date en français, car par defaut, les dates sont en anglais
    $semaine = array(" Dimanche "," Lundi "," Mardi "," Mercredi "," Jeudi "," Vendredi "," Samedi ");
    $num=date('w',$jour);


    //$date constitue le 'timestamp' de la fonction  date()
    if(date("w",$jour)==6 OR date("w",$jour)==0 ) {

        echo "Le 1<sup>er</sup> Mai $i était un $semaine[$num]: <b>Désolé</b>! <br /> <br />";

        //$date constitue le 'timestamp' de la fonction  date()
    }elseif(date("w",$jour)==5 OR date("w",$jour)==1 ) {

        echo "Le 1<sup>er</sup> Mai $i était un $semaine[$num] : <b>Week-end prolongé</b>! <br /> <br />";

        //si c'est entre Mardi et Jeudi
    }else{

        echo "Le 1<sup>er</sup> Mai $i était un $semaine[$num]: <b>En plein milieu de semaine</b>! <br /> <br />";

    }
}

echo "<a href='http://about.me/comgoon' target='_blank'>Hit me up!</a> :)";
?>