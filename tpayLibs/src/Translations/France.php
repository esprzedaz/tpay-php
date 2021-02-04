<?php
/**
 * Created by tpay.com.
 * Date: 28.09.2017
 * Time: 12:02
 */

namespace tpayLibs\src\Translations;

class France
{
    public $translations = [

        // GLOBALS
        'fee_info' => 'Pour utiliser les paiements en ligne, le vendeur ajoute:',
        'pay' => 'Payer avec Tpay',
        'merchant_info' => 'Détails du vendeur',
        'amount' => 'Montant',
        'name' => 'Nom et prénom',
        'address' => 'Rue',
        'city' => 'Ville',
        'zip' => 'Code postal',
        'country' => 'Pays',
        'phone' => 'Numéro de téléphone',
        'email' => 'Votre adresse e-mail',
        'order' => 'Commander',
        // BLIK
        'blik_code_error' => 'Le code BLIK doit être composé de six chiffres!',
        'blik_info' => 'Entrez le code à 6 chiffres et appuyez sur "Acheter et payer" pour lier la transaction blik.',
        'blik_info2' => 'Si vous souhaitez effectuer un paiement traditionnel, laissez ce champ vide.',
        'blik_accept' => 'En utilisant ce mode de paiement, vous déclarez que vous acceptez',
        'codeInputText' => 'Code BLIK',

        // BANK SELECTION
        'cards_and_transfers' => 'Cartes de paiement et virements',
        'other_methods' => 'Autres',
        'accept' => 'J`accepte',
        'regulations_url' => 'le règlement',
        'regulations' => 'du service Tpay',
        'acceptance_is_required' => 'L`acceptation du règlement est obligatoire, avant de commencer le paiement',

        // CARD

        'card_number' => 'Numéro de carte',
        'expiration_date' => 'Date d`expiration',
        'signature' => 'Pour MasterCard, Visa ou Discover, ce sont les trois derniers
             chiffres à côté de la signature de la carte. ',
        'name_on_card' => 'Propriétaire de la carte',
        'name_surname' => 'Nom et prénom',
        'save_card' => 'Enregistrer ma carte',
        'save_card_info' => 'Permettre un paiement plus rapide à l`avenir. 
             Les détails de la carte seront enregistrés sur le serveur Tpay',
        'processing' => 'Traitement des données, veuillez patienter ...',
        'debit' => 'Veuillez débiter mon compte',
        'not_supported_card' => 'Désolé, ce type de carte n`est actuellement pas pris en charge. Veuillez utiliser une autre carte ou sélectionner un autre mode de paiement. ',
        'not_valid_card' => 'Désolé, le numéro de carte saisi est invalide. Veuillez entrer un numéro de carte valide.',
        'saved_card_label' => 'Payer avec une carte enregistrée',
        'new_card_label' => 'Payer avec une nouvelle carte',
    ];

}
