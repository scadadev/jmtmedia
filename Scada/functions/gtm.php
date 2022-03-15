<?php

/** print google tag manager code in head section  */
add_action('wp_head', function(){
    global $BORN_FRAMEWORK;
    $gtmCode = $BORN_FRAMEWORK->Options->Get('gtm_code') ?? '';
    echo $gtmCode . PHP_EOL ;
});