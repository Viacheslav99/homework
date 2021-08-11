<?php

function getFile($url) {
    $content = file_get_contents($url);

    $arrStr = mb_split('\s', $content);

    $result = [];
    $firstIterator = 0;
    $secondIterator = 0;

    for($i = 0; $i < count($arrStr); $i++){
        $result[$firstIterator][$secondIterator] = $arrStr[$i];
        $secondIterator++;
        if($arrStr[$i] == ""){
            $firstIterator++;
            $secondIterator = 0;
        }
    }

    $final = '';

    for($j = 0; $j < count($result); $j++){
        for($k = 0; $k < count($result); $k++){
            $final .= $result[$k][$j] . ' ';
        }
        $final .= "\n";
    }

    echo $final;

    if (!$content) {
        throw new Exception('Error read file.');
    }
    return $content;
}

$url = './shev.txt';
try {
    getFile($url);
} catch (Exception $e) {
    echo 'Throw: ',  $e->getMessage(), "\n";
}