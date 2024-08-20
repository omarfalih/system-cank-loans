<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\StripeClient;


class CheckOutController extends Controller
{

    private $stripe;

    public function __construct()
    {
        // $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }


    public function index()
    {
        return view('home');
    }


    public function Pey(Request $request)
    {
        // return 'Ok';

        $checkout_session = $this->stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt',
                            'description' => "hwiebibwiuhfviw",
                        ],
                        'unit_amount' => 20 * 100,
                    ],
                    'quantity' => 1,
                ],

                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'هاتف',
                            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quis eaque et ipsum, laudantium assumenda alias fugit dolorum, blanditiis nihil, doloremque nisi aut nemo rem harum mollitia eligendi! Hic, dolorum.",
                            'images' => [
                                "https://www.apple.com/v/iphone/home/bv/images/overview/select/iphone_15__fm75iyqlkjau_xlarge.png"
                            ]
                        ],
                        'unit_amount' => 350 * 100,
                    ],
                    'quantity' => 1,
                ],

                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'شاحن 500v',
                        ],
                        'unit_amount' => 50 * 100,
                    ],
                    'quantity' => 2,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success.checkout'),
            'cancel_url' => route('cancel.checkout'),
        ]);
        return redirect($checkout_session->url);
    }


    function success(Request $request)
    {
        return 'success payment';
    }

    function cancel()
    {
        return 'cancel payment';
    }
}
