<?php
/**
 * Created by IntelliJ IDEA.
 * User: alejandrorioscalera
 * Date: 5/4/17
 * Time: 2:29
 */

switch ($servidor){

    case "Web":
    case "Website":
    case "web":
    case "website":
        $servidor = "minecraft.net";
        break;


    case "Sessions":
    case "Sesions":
    case "Sesiones":
    case "sessions":
    case "sesions":
    case "sesiones":
        $servidor = "session.minecraft.net";
        break;


    case "Accounts":
    case "Account":
    case "Cuentas":
    case "account":
    case "accounts":
    case "cuentas":
        $servidor = "account.mojang.com";
        break;


    case "Auth":
    case "Auths":
    case "Login":
    case "auth":
    case "auths":
    case "login":
        $servidor = "auth.mojang.com";
        break;


    case "Skin":
    case "Skins":
    case "skin":
    case "skins":
        $servidor = "skins.minecraft.net";
        break;


    case "Auth Server":
    case "Login Server":
    case "AuthServer":
    case "LoginServer":
    case "auth server":
    case "login server":
    case "authserver":
    case "loginserver":
        $servidor = "authserver.mojang.com";
        break;

    case "Session Server":
    case "Sesion Server":
    case "SessionServer":
    case "SesionServer":
    case "session server":
    case "sesion server":
    case "sessionserver":
    case "sesionserver":
        $servidor = "sessionserver.mojang.com";
        break;


    case "API":
    case "api":
    case "Api":
        $servidor = "api.mojang.com";
        break;


    case "Textures":
    case "Texture":
    case "Texturas":
    case "Textura":
    case "textures":
    case "texture":
    case "texturas":
    case "textura":
        $servidor = "textures.minecraft.net";
        break;


    case "Mojang":
    case "mojang":
        $servidor = "mojang.com";
        break;
}


function debug($target){

    echo "<h3>";
    echo $target;
    print "<br>";
    print $target;
    echo "<br>";
    printf($target);
    echo "<br>";
    print_r($target);
    echo "</h3>";
}
