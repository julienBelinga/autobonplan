<?php
    require'../vendor/autoload.php';
    error_reporting(E_ERROR | E_PARSE); // hide warning message
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

    $spreadsheet = $reader->load('../arrivages.xlsx');
    $worksheet = $spreadsheet->getActiveSheet();
    $vehicule = array(
        'nb_VO'                     => null,
        'etat'                      => null,
        'fournisseur'               => null,
        'immatriculation'           => null,
        'date_MEC'                  => null,
        'annee'                     => null,
        'marque'                    => null,
        'VIN'                       => null,
        'modele'                    => null,
        'version'                   => null,
        'places'                    => null,
        'energie'                   => null,
        'puissance_fiscale'         => null,
        'carrosserie'               => null,
        'segment'                   => null,
        'portes'                    => null,
        'genre'                     => null,
        'kms'                       => null,
        'couleur'                   => null,
        'couleur_interieure'        => null,
        'sellerie'                  => null,
        'date_achat'                => null,
        'date_entree'               => null,
        'date_vente'                => null,
        'puissance_DIN'             => null,
        'boîte_vitesse'             => null,
        'nb_rapports'               => null,
        'prix_achat'                => null,
        'TVA_achat'                 => null,
        'prix_particulier_TTC'      => null,
        'TVA_vente_véhicule'        => null,
        'prix_professionnel_TTC'    => null,
        'type_garantie'             => null,
        'code_radio'                => null,
        'frais'                     => null,
        'frais_reel_HT'             => null,
        'equip_serie'               => null,
        'equip_option'              => null,
        'cylindrée'                 => null,
        'provenance'                => null,
        'conso_CO2'                 => null,
        'n°_lot_achat'              => null,
        'poids_vide_Min'            => null,
        'duree_en_mois'             => null,
        'type_CNIT'                 => null,
        'date_entree_en_arrivage'   => null,
        'parc'                      => null,
        'livraison_prevue_le_BC'    => null,
        'livraison_prevue_le_BT'    => null,
        'dispo_le'                  => null
    );

    $highestRow = $worksheet->getHighestRow();
    #get the excel cells into an array
    for($row=2; $row <= $highestRow; $row++){
        $nb_VO = $row -2;
        $vehicule[$nb_VO]->nb_VO= $nb_VO;
        $vehicule[$nb_VO]->etat= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
        $vehicule[$nb_VO]->fournisseur= $worksheet->getCellByColumnAndRow(3, $row)->getValue();
        $vehicule[$nb_VO]->immatriculation= $worksheet->getCellByColumnAndRow(4, $row)->getValue();
        $vehicule[$nb_VO]->date_MEC= $worksheet->getCellByColumnAndRow(5, $row)->getValue();
        $vehicule[$nb_VO]->annee= $worksheet->getCellByColumnAndRow(6, $row)->getValue();
        $vehicule[$nb_VO]->marque= $worksheet->getCellByColumnAndRow(7, $row)->getValue();
        $vehicule[$nb_VO]->VIN= $worksheet->getCellByColumnAndRow(8, $row)->getValue();
        $vehicule[$nb_VO]->modele= $worksheet->getCellByColumnAndRow(9, $row)->getValue();
        $vehicule[$nb_VO]->version= $worksheet->getCellByColumnAndRow(10, $row)->getValue();
        $vehicule[$nb_VO]->places= $worksheet->getCellByColumnAndRow(11, $row)->getValue();
        $vehicule[$nb_VO]->energie= $worksheet->getCellByColumnAndRow(12, $row)->getValue();
        $vehicule[$nb_VO]->puissance_fiscale= $worksheet->getCellByColumnAndRow(13, $row)->getValue();
        $vehicule[$nb_VO]->carrosserie= $worksheet->getCellByColumnAndRow(14, $row)->getValue();
        $vehicule[$nb_VO]->segment= $worksheet->getCellByColumnAndRow(15, $row)->getValue();
        $vehicule[$nb_VO]->portes= $worksheet->getCellByColumnAndRow(16, $row)->getValue();
        $vehicule[$nb_VO]->genre= $worksheet->getCellByColumnAndRow(17, $row)->getValue();
        $vehicule[$nb_VO]->kms= $worksheet->getCellByColumnAndRow(18, $row)->getValue();
        $vehicule[$nb_VO]->couleur= $worksheet->getCellByColumnAndRow(19, $row)->getValue();
        $vehicule[$nb_VO]->couleur_interieure= $worksheet->getCellByColumnAndRow(20, $row)->getValue();
        $vehicule[$nb_VO]->sellerie= $worksheet->getCellByColumnAndRow(21, $row)->getValue();
        $vehicule[$nb_VO]->date_achat= $worksheet->getCellByColumnAndRow(22, $row)->getValue();
        $vehicule[$nb_VO]->date_entree= $worksheet->getCellByColumnAndRow(23, $row)->getValue();
        $vehicule[$nb_VO]->date_vente= $worksheet->getCellByColumnAndRow(24, $row)->getValue();
        $vehicule[$nb_VO]->puissance_DIN= $worksheet->getCellByColumnAndRow(25, $row)->getValue();
        $vehicule[$nb_VO]->boîte_vitesse= $worksheet->getCellByColumnAndRow(26, $row)->getValue();
        $vehicule[$nb_VO]->nb_rapports= $worksheet->getCellByColumnAndRow(27, $row)->getValue();
        $vehicule[$nb_VO]->prix_achat= $worksheet->getCellByColumnAndRow(28, $row)->getValue();
        $vehicule[$nb_VO]->TVA_achat= $worksheet->getCellByColumnAndRow(29, $row)->getValue();
        $vehicule[$nb_VO]->prix_particulier_TTC= $worksheet->getCellByColumnAndRow(30, $row)->getValue();
        $vehicule[$nb_VO]->TVA_vente_véhicule= $worksheet->getCellByColumnAndRow(31, $row)->getValue();
        $vehicule[$nb_VO]->prix_professionnel_TTC= $worksheet->getCellByColumnAndRow(32, $row)->getValue();
        $vehicule[$nb_VO]->type_garantie= $worksheet->getCellByColumnAndRow(33, $row)->getValue();
        $vehicule[$nb_VO]->code_radio= $worksheet->getCellByColumnAndRow(34, $row)->getValue();
        $vehicule[$nb_VO]->frais= $worksheet->getCellByColumnAndRow(35, $row)->getValue();
        $vehicule[$nb_VO]->frais_reel_HT= $worksheet->getCellByColumnAndRow(36, $row)->getValue();
        $vehicule[$nb_VO]->equip_serie= $worksheet->getCellByColumnAndRow(37, $row)->getValue();
        $vehicule[$nb_VO]->equip_option= $worksheet->getCellByColumnAndRow(38, $row)->getValue();
        $vehicule[$nb_VO]->cylindrée= $worksheet->getCellByColumnAndRow(39, $row)->getValue();
        $vehicule[$nb_VO]->provenance= $worksheet->getCellByColumnAndRow(40, $row)->getValue();
        $vehicule[$nb_VO]->conso_CO2= $worksheet->getCellByColumnAndRow(41, $row)->getValue();
        $vehicule[$nb_VO]->n°_lot_achat= $worksheet->getCellByColumnAndRow(42, $row)->getValue();
        $vehicule[$nb_VO]->poids_vide_Min= $worksheet->getCellByColumnAndRow(43, $row)->getValue();
        $vehicule[$nb_VO]->duree_en_mois= $worksheet->getCellByColumnAndRow(44, $row)->getValue();
        $vehicule[$nb_VO]->type_CNIT= $worksheet->getCellByColumnAndRow(45, $row)->getValue();
        $vehicule[$nb_VO]->date_entree_en_arrivage= $worksheet->getCellByColumnAndRow(46, $row)->getValue();
        $vehicule[$nb_VO]->parc= $worksheet->getCellByColumnAndRow(47, $row)->getValue();
        $vehicule[$nb_VO]->livraison_prevue_le_BC= $worksheet->getCellByColumnAndRow(48, $row)->getValue();
        $vehicule[$nb_VO]->livraison_prevue_le_BT= $worksheet->getCellByColumnAndRow(49, $row)->getValue();
        $vehicule[$nb_VO]->dispo_le= $worksheet->getCellByColumnAndRow(50, $row)->getValue();
    }

    include('graph/energies.php');    

?>