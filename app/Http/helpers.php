
<?php
function is_logged_in()
{
    if(!is_null(Auth::user()))
    {
        return true;
    }
    else{
        return false;
    }
}

function get_logged_in_user()
{
    return Auth::user();
}