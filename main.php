<?php
/**
 * Created by IntelliJ IDEA.
 * User: alejandrorioscalera
 * Date: 5/4/17
 * Time: 2:17
 */


/** @API **/

/** SMALL CONSTRUCTORS **/

$api = null;
$info = "";
$servidor = "";
$debug = "";


/** REST **/

function estado($servidor){

    $target = json_decode(file_get_contents("https://status.mojang.com/check"), true);

    include ('lib.php');

    $api = $target[0][$servidor];

    return $api;
}


/** OTHERS **/


if ($sapi == "green") $info = "on";
if ($sapi == "yellow") $info = "unstable";
if ($sapi == "red") $info = "off";


if ($info == "on"){
    //Mojang on;
}
else
    if ($info == "unstable"){
        //Mojang unstable;
    }
    else
        if ($info == "off"){
            //Mojang off;
        }


/** @DEBUG **/

//debug ($info);
