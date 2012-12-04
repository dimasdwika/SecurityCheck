<?php 


function getDomainName($input)
{
    if (preg_match('/(^(https?):\/\/|^)(([^\.]+)\.([^\.]+\.[^\/$]+)|([^\.]+\.[^\/$]+))\/?$/', $input, $matches)) {

        $domain_name = $matches[5] ? $matches[5] : $matches[6];
        return $domain_name;
    }
    else{

        $error_message = $input . ' - INVALID URL or Domain Name';
        return $error_message;
    }
}


function checkDomain($domain)
{
    if (preg_match('/(^(https?):\/\/|^)(([^\.]+)\.([^\.]+\.[^\/$]+)|([^\.]+\.[^\/$]+))\/?$/', $domain, $matches)) {

        echo
            '<b>' . $domain . '</b><br />' .
            'Protocol: <b>'   . ($matches[2] ? $matches[2] : 'None') . '</b><br />' .
            'Sub-Domain: <b>' . ($matches[4] ? $matches[4] : 'None') . '</b><br />' .
            'Domain: <b>'     . ($matches[5] ? $matches[5] : $matches[6]) . '</b><br />' .
            '<br />';

    } else {
        echo $domain . ' - INVALID<br /><br />';
    }
}

?>