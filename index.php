<?php

$textStorage = array();

function add($title, $text, &$array){
    $array[] = array($title => $text);
}
function remove($elementNumber, &$array){
    if ($array[$elementNumber]){
        unset($array[$elementNumber]);
        return True;
    }
    return False;
}

function edit(int $index, string $title, string $text, array &$array): bool
    {
        if ($array[$index]){
            $array[$index] = array($title => $text);
            return True;
        }
        return False;
    }

for ($i=0; $i < 4; $i+=1) {
    add ("Element$i", "Value $i", $textStorage);
}

print_r($textStorage);

var_dump(remove(0, $textStorage));
var_dump(remove(5, $textStorage));
print_r($textStorage);

var_dump(edit (1, "Nev element", "New value", $textStorage));
var_dump(edit (8, "Nev element8", "New value8", $textStorage));
print_r($textStorage);

