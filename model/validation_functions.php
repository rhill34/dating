<?php

/**
 * Function to validate entire POST form
 * @param $formData
 */
function validatePost()
{
    //check if form data is array is empty
    //personal form validate
    global $f3;
    $isValid = true;

    if(!validName($f3->get('uFirst')))
    {
        $isValid = false;
        $f3->set("errors['uFirst']", "Please Enter your First Name with letters only without numbers");
    }

    if(!validName($f3->get('uLast')))
    {
        $isValid = false;
        $f3->set("errors['uLast']", "Please Enter a Name with letters only without numbers.");
    }
    if(!validAge($f3->get('uAge')))
    {
        $isValid = false;
        $f3->set("errors['uAge']", "Must be at least 18 years old and up to 118 years old to use this app.");
    }
    if(!validPhone($f3->get('uNum')))
    {
        $isValid = false;
        $f3->set("errors['uNum']", "You must enter the hyphens between the 10 digits as shown.");
    }
    return $isValid;
}

/**
 * checks to see that a string is all alphabetic
 * @param $name
 * @return bool
 */
function validName($name)
{
    return (!empty($name) && ctype_alpha($name));
}

/**
 * Checks to see that an age is numeric and between 18 and 118
 * @param $age
 * @return bool
 */
function validAge($age)
{
    return (!empty($age) && $age >= 18 && $age <= 118 && is_numeric($age));
}

/**
 * checks to see that a phone number is valid
 * @param $phone
 * @return bool
 */
function validPhone($phone)
{
    return (!empty($phone) && (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)));
}