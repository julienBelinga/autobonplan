<?php
require('../database/db.php');

/* SOLUTION 1*/

    // $sql ='INSERT INTO `vehicule` (`etat`,`Fournisseur`,`immatriculation`,`dateMEC`,`annee`,`marque`,`VIN`,`modele`,`version`,`Places`,`energie`,`puissance_fiscale`,`carrosserie`,`segment`,`portes`,`genre`,`kms`,`couleur`,`couleur_interieur`,`sellerie`,`date_achat`,`date_entree`,`date_vente`,`puissanceDIN`,`boite_vitesse`,`nb_rapport`,`prix_achat`,`TVA_achat`,`prix_particulier_TTC`,`TVA_vente-vehicule`,`prix_professionnel`,`type_garantie`,`code_radio`,`frais`,`frais_reel_HT`,`equipement_serie`,`equipement_option`,`cylindree`,`provenance`,`conso_CO2`,`nb_lot_achat`,`poids_vide_MIN`,`duree_mois`,`type_CNIT`,`date_entree_arrivages`,`parc`,`livraison_prevue_BC`,`livraison_prevue_BT`,`dispo_le`)
    //  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
     
    // foreach($worksheet->getRowIterator(2) as $row){
    //     $cellIterration = $row->getCellIterator();
    //     $cellIterration->setIterateOnlyExistingCells(false);

    //     $data = [];
    //     foreach($cellIterration as $cell){
    //         $data[] = $cell->getValue();
    //     }

    //     print_r($data);
    //     // try{
    //         $q = $db->prepare($sql);
    //         $q->execute($data);
    //         echo 'ok <br>';
    //     /*}catch(Exception $ex){
    //         echo $ex->getMessage. '<br>';
    //     }*/
    // }

/* SOLUTION 2*/
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