<?php

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load('../arrivages.xlsx');
$worksheet = $spreadsheet->getActiveSheet();
foreach($worksheet->getColumnIterator() as $column){
    $cellIterration = $column->getCellIterator();
    $cellIterration->setIterateOnlyExistingCells(false);

    echo '<table>';
        echo '<tr>';

    foreach($cellIterration as $cell){
        echo '<td>';
            echo $cell->getValue();
        echo '</td>';
    }
        echo '</tr>';
    echo '</table>';


}

?>