<?php

/**
 * Function to validate entire POST form
 * @param $formData
 */
function validatePost($formData)
{
    //check if form data is array is empty
    $valid = (!empty($formData));

    //personal form validate
    if(!validName($formData[0]) && !validName($formData[1]))
    {
        $valid = false;
    }

    return $valid;
}

/**
 * checks to see that a string is all alphabetic
 * @param $name
 * @return bool
 */
function validName($name)
{
    return !empty($name) && ctype_alpha($name);
}