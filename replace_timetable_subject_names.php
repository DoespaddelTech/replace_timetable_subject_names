<?php
$sourcedir = "/group/stundenplan/Files/Auto-Import/";
$sourcefile = $sourcedir."GPU001.TXT";
$outfile = $sourcedir."GPU001.TXT";
$indicator = "Mathe";

$lines = file($sourcefile);
$escape = FALSE;
$newcontent = "";

// überprüfen, ob schon Langnamen vorhanden sind, dann abbrechen.
foreach($lines as $line ){
if (str_contains($line, $indicator)) {
        $escape = TRUE;
        break;
    }
}


// Ersetzungen vornehmen.
if ($escape == FALSE) {
    foreach($lines as $line ){
        $to_replace = array('"De"', '"Ma"', '"Sp"','"Ku"','"Mu"','"Rel"','"Eng"','"TG"','"GW"');
        $replace_with = array('"Deutsch"', '"Mathe"', '"Sport"','"Kunst"','"Musik"','"Religion"','"Englisch"','"Textil"','"Werken"');
        $result = strtr($line, array_combine($to_replace, $replace_with));      
        $newcontent .= $result;    }
file_put_contents($outfile,$newcontent);
}



