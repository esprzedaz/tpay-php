<?php
/**
 * Created by tpay.com.
 * Date: 28.09.2017
 * Time: 12:02
 */

namespace tpayLibs\src\Translations;

class Sweden
{
    public $translations = [

        // GLOBALS
        'fee_info' => ' Säljaren adderar beloppet för att använda onlinebetalningar: ',
        'pay' => 'Betala med Tpay',
        'merchant_info' => 'Säljarens uppgifter',
        'amount' => 'Belopp',
        'name' => 'Namn och efternamn',
        'address' => 'Gata',
        'city' => 'Ort',
        'zip' => 'Postnummer',
        'country' => 'Land',
        'phone' => 'Telefonnummer',
        'email' => 'Din e-post',
        'order' => 'Beställning',
        // BLIK
        'blik_code_error' => 'BLIK-koden bör bestå av sex siffror!',
        'blik_info' => 'Ange den sexsiffriga koden och tryck på "Köp och betala" för att länka blik-transaktionen.',
        'blik_info2' => ' Lämna detta fält tomt om du vill göra en traditionell betalning.',
        'blik_accept' => ' Genom att använda denna betalningsmetod förklarar du att du accepterar',
        'codeInputText' => 'BLIK-koden',

        // BANK SELECTION
        'cards_and_transfers' => ' Betalkort och överföringar',
        'other_methods' => 'Övriga',
        'accept' => 'Jag accepterar',
        'regulations_url' => 'föreskrifter',
        'regulations' => 'av Tpay',
        'acceptance_is_required' => ' Godkännande av föreskrifter är obligatoriskt innan betalningen påbörjas',

        // CARD

        'card_number' => 'Kortnummer',
        'expiration_date' => 'Utgångsdatum',
        'signature' => ' För MasterCard, Visa eller Discover 
är det de tre sista siffrorna på kortets signatur.',
        'name_on_card' => 'Kortinnehavare',
        'name_surname' => 'Namn och efternamn',
        'save_card' => 'Spara mitt kort',
        'save_card_info' => 'Tillstånd för snabbare betalning i framtiden.
             Kortuppgifterna sparas på Tpay-servern',
        'processing' => ' Bearbetar data, var god dröj...',
        'debit' => 'Debitera mitt konto',
        'not_supported_card' => ' Tyvärr stöds för närvarande inte denna korttyp. Använd ett annat kort eller välj en annan betalningsmetod.',
        'not_valid_card' => ' Tyvärr, kortnumret du angav är felaktigt. Var god och skriv in ett giltigt nummer.',
        'saved_card_label' => ' Betala med ett sparat kort ',
        'new_card_label' => 'Betala med ett nytt kort',
    ];

}
