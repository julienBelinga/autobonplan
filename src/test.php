<?php
    require'../vendor/autoload.php';

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

    $spreadsheet = $reader->load('../arrivages.xlsx');
    $worksheet = $spreadsheet->getActiveSheet();
    foreach($worksheet->getRowIterator() as $row){
        $cellIterration = $row->getCellIterator();
        $cellIterration->setIterateOnlyExistingCells(false);

        echo '<table border="1" align="left">';
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