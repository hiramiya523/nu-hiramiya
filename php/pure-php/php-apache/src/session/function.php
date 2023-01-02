<?php

// session_regenerate_id(bool $delete_old_session = false): bool


function app_sesssion_regenerate():bool
{
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }

    return session_regenerate_id(true);
}
