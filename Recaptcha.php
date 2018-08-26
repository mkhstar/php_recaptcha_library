<?php

/*
@ RECAPTCHA VALIDATION CLASS BY KUSI MUSAH HUSSEIN ALSO KNOWN AS mkhstar
@ CREDITS TO CODECOURSE ON YOUTUBE (ALEX)
 */
class Recaptcha {
    private $url = '';
    private $secret = '';
    private $response = '';
    private $post_var = '';
    public function __construct($url, $post_var, $secret, $response) {
        $this->url = $url;
        $this->secret = $secret;
        $this->response = $response;
        $this->post_var = $post_var;
    }
    public function initialize() {
        // CURL IS BEING USED FOR POST REQUEST
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => [
                'secret' => $this->secret,
                'response' => $this->post_var,
            ],
        ]);
        // RESPONSE IS STORED AND CONVERTED TO AN ARRAY FOR EASY REFERENCE OF VARIABLES
        $response = json_decode(curl_exec($curl));
        $response = (array) $response;
        return $response;
    }

    public function checkValidity($response) {
        if (!$response['success']) {
            // RETURNS AN ERROR MESSAGE ON WHEN ERROR OCCURS ON RECAPTCHA VALIDATION
            $errorMsg = ucwords(implode(' ', explode('-', $response['error-codes'][0]))) . " On Recapthca";
            return $errorMsg;
        } else {
            // SUCCESSFUL RECAPTCHA
            return 1;
        }
    }
}
