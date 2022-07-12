<?php
// GOTO DI CASE BIASA
goto en;
echo "Hello World" . PHP_EOL;

en:
echo "Hello Goto" . PHP_EOL;

// GOTO DI LOOP
$i = 0;
while ($i<10){
    $i++;
    echo "Loop ke ". $i . PHP_EOL;

    if ($i>7){
        goto end;
    }
}

end:
echo "Perulangan berhenti" . PHP_EOL;


