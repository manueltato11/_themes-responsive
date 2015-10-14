<?php

function getMetaDescription($metas) {
    global $rewrite, $metas, $page;

    $descriptionP = $page->load('description');
    $tagsP = $page->load('tags');
    // Sustituimos las tildes y caracteres especiales
    $cEspeciales = array("á","é","í","ó","ú","ä","ë","ï","ö","ü","à","è","ì","ò","ù","ñ","Á","É","Í","Ó","Ú","Ä","Ë","Ï","Ö","Ü","À","È","Ì","Ò","Ù","Ñ",";",":"); 
    $cReplace = array("a","e","i","o","u","a","e","i","o","u","a","e","i","o","u","n","a","e","i","o","u","a","e","i","o","u","a","e","i","o","u","N",",",","); 
    $metas = str_ireplace($cEspeciales, $cReplace, $metas);
    // Unimos los metas Auto con los de la pagina principal
    $metas = strip_tags($metas." ".$descriptionP);
    $metas = trim($metas);
    $vowels = array("“","”","&quot,",":)","¿", "?", "!", "(", ")");
    $metas = str_replace($vowels, "", $metas);
    $metas = substr($metas, 0, 150);
    return $metas."";
}

function getMetaKeywords($metas) {
    global $rewrite, $metas, $page;
   
    // Limpiamos el metaso
    $metas = strip_tags($metas);
    $metas = strtolower($metas);
    $metas = trim($metas);
    $vowels = array("yo","cada","toda","hasta","todo","esta","dara", "pero", "este", "eles", "cart","por", "porque", "para", ":", "puede", ";", "cuando", "sacrifican", "saber", "violarla", "!", "¡", "ellos", "entre", "como", "?", ",", "(", ")", ".");
    $metas = str_replace($vowels, " ", $metas);
    $metas = preg_replace('/&([a-zA-Z])(.*?);/', ' ', $metas);
    // extraemos las palabras
    $match = explode(" ", $metas);
    // contamos las palabras
    $count = array();
    if (is_array($match)) {
        foreach ($match as $key => $val) {
            if (strlen($val)> 3) {
                if (isset($count[$val])) {
                    $count[$val]++;
                } else {
                    $count[$val] = 1;
                }
            }
        }
    }
    // Ordenamos los totales
    arsort($count);
    $count = array_slice($count, 0, 15);
    return implode(", ", array_keys($count));
}
$metas = NULL;
//$metas = 'Estamos haciendo una prueba de la creacion de los meta datos de la pagina de carteles creativos';
?>