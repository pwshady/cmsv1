<?php

function include_block ($url, $date)
{
    if (isset($date))
    {
        foreach($date as $key => $value)
        {
            $$key = $value;
        };
    };
    ob_start();
    $content = require $url;
    return ob_get_clean();
};
