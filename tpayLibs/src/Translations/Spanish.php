<?php
/**
 * Created by tpay.com.
 * Date: 28.09.2017
 * Time: 12:02
 */

namespace tpayLibs\src\Translations;

class Spanish
{
    public $translations = [

        // GLOBALS
        'fee_info' => 'Por utilizar el pago en línea, el vendedor agrega:',
        'pay' => 'Paga con Tpay',
        'merchant_info' => 'Los datos del vendedor',
        'amount' => 'El importe',
        'name' => 'Nombre y apellido',
        'address' => 'Calle',
        'city' => 'Ciudad',
        'zip' => 'Código postal',
        'country' => 'País',
        'phone' => 'Número de teléfono',
        'email' => 'Tu adreza del correo electrónico',
        'order' => 'El pedido',
        // BLIK
        'blik_code_error' => 'El código BLIK debe consistir de seis cifras!',
        'blik_info' => 'Introduce un código de seis cifras y haz click en "Compro y pago" para vincular una transacción con BLIK.',
        'blik_info2' => 'Si quieres completar un pago tradicional, deja esta casilla vacía.',
        'blik_accept' => 'Utilizando este método de pago, declaras que aceptas',
        'codeInputText' => 'Código BLIK',

        // BANK SELECTION
        'cards_and_transfers' => 'Tarjetas de crédito y transferencias',
        'other_methods' => 'Otros',
        'accept' => 'Acepto',
        'regulations_url' => 'reglamento',
        'regulations' => 'del servicio Tpay',
        'acceptance_is_required' => 'La aceptación del reglamento es obligatoria para completar el pago',

        // CARD

        'card_number' => 'Número de tarjeta',
        'expiration_date' => 'Fecha de expiración',
        'signature' => 'En el caso de Visa, MasterCard y Discover, son las últimas tres cifras colocadas al lado de la firma de la tarjeta.',
        'name_on_card' => 'El propietario de la tarjeta',
        'name_surname' => 'Nombre y apellido',
        'save_card' => 'Guardar mi tarjeta',
        'save_card_info' => 'Permiso para pagamento rápido en un futuro.
             Los datos de la tarjeta serán guardados en el servicio Tpay.',
        'processing' => 'Procesando los datos, por favor espere...',
        'debit' => 'Carguen débito en mi cuenta',
        'not_supported_card' => 'Lo sentimos pero el tipo de la tarjeta introducida no es soportado. Por favor utilizen otra tarjeta u otro método de pago para completar el pagamento.',
        'not_valid_card' => 'Lo sentimos pero el número de tarjeta introducido no es correcto. Por favor, introduzcan un número correcto.',
        'saved_card_label' => 'Pagar con una tarjeta guardada ',
        'new_card_label' => 'Pagar con una tarjeta nueva',
    ];

}
