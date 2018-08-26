### PHP GOOGLE RECAPTCHA CLASS

     
     ```php
        <?php
     $recaptcha = new Recaptcha($url, $url, $post_var, $secret, $response);

     $recaptcha_response = $recaptcha->initialize();

     $validity = $recaptcha->checkValidity($recaptcha_response);
     if ($validy !== 1) {
       // Handle Error
     }else {
      // No Errors
     }
     
    ```
##### Copyright ©2018 Kusi Musah Hussein
