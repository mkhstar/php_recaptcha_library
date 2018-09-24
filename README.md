### PHP GOOGLE RECAPTCHA CLASS

     
     ```
     $recaptcha = new Recaptcha($url, $post_var, $secret, $response);

     $recaptcha_response = $recaptcha->initialize();

     $validity = $recaptcha->checkValidity($recaptcha_response);
     if ($validy !== 1) {
       // Handle Error
     }else {
      // No Errors
     }
     
    ```
