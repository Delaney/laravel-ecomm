<?php

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
	// 'publicKey' => getenv('PAYSTACK_PUBLIC_KEY'),
	'publicKey' => 'pk_test_87f0cf4b045ce056edafc38d94cdfdc0ea6ab3d6',

    /**
     * Secret Key From Paystack Dashboard
     *
     */
	// 'secretKey' => getenv('PAYSTACK_SECRET_KEY'),
	'secretKey' => 'sk_test_f37926a345ec469368114b046ecdae9a1d2478a1',

    /**
     * Paystack Payment URL
     *
     */
    'paymentUrl' => getenv('PAYSTACK_PAYMENT_URL'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => getenv('MERCHANT_EMAIL'),

];