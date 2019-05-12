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
 * Validates the Profile information
 * @return bool
 */
function validateSeeking()
{
    //check if form data is array is empty
    //personal form validate
    global $f3;
    $isValid = true;

    if(!filter_var($f3->get('uEmail'), FILTER_VALIDATE_EMAIL))
    {
        $isValid = false;
        $f3->set("errors['uEmail']", "Please Enter a valid email");
    }

    if(!validAge($f3->get('iAge')))
    {
        $isValid = false;
        $f3->set("errors['iAge']", "Must be at least 18 years old and up to 118 years old to use this app.");
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

/**
 * Validates the interests activities
 * @param $action
 * @return bool
 */
function validInterests()
{
    global $f3;

    $inPic = $f3->get('inPic');
    $outPic = $f3->get('outPic');

    if(empty($outPic))
    {
        echo "true";
        return true;
    }
    elseif (!empty($inPic) || !empty($outPic))
    {
        if(!empty($inPic)) { return checkArray($inPic); }
        else {
            return checkArray($outPic);
        }
    }
    return true;
}

function checkArray($array)
{
    global $f3;
    $activities = array_merge($f3->get('in'), $f3->get('out'));

    foreach ($array as $act)
    {
        if(!in_array($act, $activities))
        {
            $f3->set("errors['inOut']", "Please choose an activity that is in the collection.");
            return false;
        }
    }

    return true;
}