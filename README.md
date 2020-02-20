### PHP GOOGLE RECAPTCHA CLASS

     
     ```php
     $recaptcha = new Recaptcha($post_var, $secret, $response);

     $recaptcha_response = $recaptcha->initialize();

     $validity = $recaptcha->checkValidity($recaptcha_response);
     if ($validity !== 1) {
       // Handle Error
     }else {
      // No Errors
     }
     
    ```
