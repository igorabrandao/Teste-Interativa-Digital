<?php

    // Check if exist an active session
    if ( !isset($_COOKIE[SESSION_COOKIE]) )
    {
        // Redirection
        $login_uri  = HOME_URI . '/modulo_admin/';
        echo '<meta http-equiv="Refresh" content="0; url=' . $login_uri . '">';
        echo '<script type="text/javascript">window.location.href = "' . $login_uri . '";</script>';
        // header('location: ' . $login_uri);
    }

?>