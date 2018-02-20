<?php
    /** ****************** ****************** **************************
    **  Title:       First program about STRING functions
    **  includes:    (strsub - strrpos - ucfirst)
    **  Description: the next program takes a whole blog
    **               then take just a substring of it then show it.
    ** ******************* ****************** **************************/
    # this is the paragraph that will be modified
    $blog = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    // take just the first 250 letters of the paragraph
    $blog      = substr($blog, 0, 250);

    // store the last position of space in the variable called (lastSpace)
    $lastSpace = strrpos($blog, ' ');

    // cut just the blog till the last space of 250 characters
    $blog      = substr($blog, 0, $lastSpace);

    // add some dots to show that the blog didn't finish here
    $blog      = $blog . " . . . ";

    // just print the modified blog
    echo $blog;

    /* *************** **********************************
    ** Title:    the second program for the session
    ** Includes: (strlen - strpos - str_replace)
    * **************** ************************************/

    // take the required information from the user
    $username = "<Naruto>";
    $password = "1234jfjf";
    $email    = "naruto@azex.com";
    $phone    = "012312312312";

    /*  ************************
    **  Validation
    * ************************/

    # check if the phone number is not 11 digits or not
    if(strlen($phone) !== 11){
        echo "your number is NOT vaild number!";
    }

    # check if the email has @ or not
    $count = 0;
    for($i = 0; $i < strlen($email); $i++){
        if($email{$i} == '@'){
            $count++;
        }
    }
    if(!$count){
        echo "your email is not valid email <br />";
    }

    // we can do it much easier than that
    $checkEmail = strpos($email, '@');
    if(!$checkEmail){
        echo "your email is not valid! <br />";
    }

    # replace any HTML tags in the username field
    str_replace('<', '&lt;', $username);
    str_replace('>', '&gt;', $username);
    echo $username;
