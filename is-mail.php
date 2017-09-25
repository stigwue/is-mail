<?php

require_once(__DIR__ . '/vendor/autoload.php');

class Mail
{
    //validation via RFCs
    //provided by https://github.com/dominicsayers/isemail
    public static function isValidEmail($email_to_test)
    {
        if (is_email($email_to_test))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //validation via mailgun
    //provided by https://github.com/kehers/MG_Email
}
?>
