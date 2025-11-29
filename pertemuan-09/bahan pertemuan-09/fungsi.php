<?php
function bersihhkan($str)
{
    return htmlspecialchars(trim($str));
}
 
function tidak kosong($str)
{
    return strlen(trim($str)) > 0;
}