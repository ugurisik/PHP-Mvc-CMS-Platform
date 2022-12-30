<?php
class cookieManager
{
    public function createCookie($array = [])
    {
        foreach ($array as $key => $value) {
            setcookie($key, $value, time() + (86400 * 30)); // 86400 = 1 day
        }
    }
    public function deleteCookie($key)
    {
        setcookie($key, time() - (86400 * 30)); // 86400 = 1 day
    }
    public function getCookie($key)
    {
        return $_COOKIE['' . $key . ''];
    }
    public function getAll()
    {
        return $_COOKIE;
    }
}
