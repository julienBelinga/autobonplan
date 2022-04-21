<?php
require('../database/db.php');

/* TODO: protocol:
        envoie BDD
        - parse row excel
        - cast en string
        - mettre '/' entre les cellules
        - 'end' à la fin
        RECUP
        - explode sur 'end' (on à les lignes)
        - explode sur '/' (on à les cellules)
        - mettre dans le tableau associatif
*/

    $excelInTab = [];
    $excelSheet = encryption($worksheet);
    $excelInTab = decryption($excelSheet);
                
    function encryption ($worksheet){
        $string = '';
        foreach($worksheet->getRowIterator(2) as $row){
            $cellIterration = $row->getCellIterator();
            $cellIterration->setIterateOnlyExistingCells(false);
        
            foreach($cellIterration as $cell){
                $string .=strval($cell->getValue());
                $string .='/';
            }
            $string .= 'end';
        }

        return $string;
    }

    function decryption($string){
        $row = explode('end', $string);
        $tabRow = [];
        $data = [];
        
        for($i=0; $i<count($row)-1; $i++){
            
            $tabRow[] = $row[$i];
            $cell = explode('/', $tabRow[$i]);
            for($j=0; $j<count($cell); $j++){
                if($cell[$j] == 'end'){unset($cell[$j]);}
                $data[$i][] = $cell[$j];
            }
        }

        return $data;
    }

        
?>