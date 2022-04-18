<?php
require('../database/db.php');


    $sql ='INSERT INTO `vehicule` (`etat`,`Fournisseur`,`immatriculation`,`dateMEC`,`annee`,`marque`,`VIN`,`modele`,`version`,`Places`,`energie`,`puissance_fiscale`,`carrosserie`,`segment`,`portes`,`genre`,`kms`,`couleur`,`couleur_interieur`,`sellerie`,`date_achat`,`date_entree`,`date_vente`,`puissanceDIN`,`boite_vitesse`,`nb_rapport`,`prix_achat`,`TVA_achat`,`prix_particulier_TTC`,`TVA_vente-vehicule`,`prix_professionnel`,`type_garantie`,`code_radio`,`frais`,`frais_reel_HT`,`equipement_serie`,`equipement_option`,`cylindree`,`provenance`,`conso_CO2`,`nb_lot_achat`,`poids_vide_MIN`,`duree_mois`,`type_CNIT`,`date_entree_arrivages`,`parc`,`livraison_prevue_BC`,`livraison_prevue_BT`,`dispo_le`)
     VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
     
    foreach($worksheet->getRowIterator(2) as $row){
        $cellIterration = $row->getCellIterator();
        $cellIterration->setIterateOnlyExistingCells(false);

        $data = [];
        foreach($cellIterration as $cell){
            $data[] = $cell->getValue();
        }

        print_r($data);
        // try{
            $q = $db->prepare($sql);
            $q->execute($data);
            echo 'ok <br>';
        // }catch(Exception $ex){
        //     echo $ex->getMessage. '<br>';
        // }
    }

?>