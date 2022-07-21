<?php
function isNulOrEmty($value): bool
{
    return  empty($value) || $value == '';
}

function isSpecialCharacter($value): bool
{
    return !preg_match('/^[a-z\d]{5,20}$/i', $value);
}
