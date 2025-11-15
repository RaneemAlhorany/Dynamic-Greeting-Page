# Dynamic-Greeting-Page

It's stage 1 in your PHP language learning journey

project (1) : Dynamic Greeting Page

Goal :

        Learn how PHP interacts with HTML by creating a simple dynamic greeting based on date + time.
        1) Embedding PHP inside HTML
        2) Using echo
        3) Using date() function
        4) Gnerating dynamic text automatically

Task :

        🇬🇧 Create a PHP file that displays:

            A dynamic greeting based on the hour
            5am–11am → Good morning
            11am–5pm → Good afternoon
            5pm–9pm → Good evening
            Otherwise → Good night
            The current date in this format: Day - Month - Year
            The current time in this format: Hour : Minute : Second
            EX of output: 
                Good evening
                Today’s date: 09 - 02 - 2025
                Current time: 14 : 22 : 45

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//! Variables in PHP

    ? In PHP, variables are used to store data such as numbers, text, or arrays.
    ? Every PHP variable must start with a dollar sign ($).

        Example:
            $number = 38;
            $name = "Raneem";

    ^ Rules for PHP variables:
        1. Must begin with a $ symbol.
        2. Must start with a letter (a-z, A-Z) or underscore (_).
        3. Cannot start with a number.
        4. Can contain letters, numbers, and underscores.
        5. PHP variable names are case-sensitive:
               $name  ≠  $Name  ≠  $NAME

    ^ Assigning values:
        - Strings use quotes:
              $city = "Paris";
        - Integers:
              $age = 21;
        - Floating numbers:
              $price = 19.99;
        - Boolean values:
              $isActive = true;

    ^ PHP uses dynamic typing:
        - You do NOT need to declare a type.
        - The type is automatically determined by the assigned value.

    ? Displaying variable values:
            echo $name;
            echo $number;

    ? Example in a PHP script:
        <?php
            $user = "Rere";
            $score = 95;
            echo "User: $user — Score: $score";
        ?>

//////////////////////////////////////////////////////////////////////


//! concatenation (.)

    //? The dot operator (.) is used in PHP to concatenate (join) two strings together.

    $firstName = "John";
    $lastName = "Doe";

    //~ Concatenation example:
    $fullName = $firstName . " " . $lastName;
    echo $fullName; 
    // Output: John Doe


    //^ Concatenation with assignment (.=)
    //? The .= operator appends a string to an existing variable.

    $message = "Hello";
    $message .= ", World!";

    echo $message; 
    // Output: Hello, World!

//////////////////////////////////////////////////////////////////////////

//! conditions

    ? Conditions in PHP allow you to control the flow of your program
      by executing different code based on whether a condition is TRUE or FALSE.

    ^ if statement:
        - Executes code only if the condition is TRUE.

        Example:
            $age = 20;
            if ($age >= 18) {
                echo "You are an adult.";
            }

    ^ if...else statement:
        - if block runs when the condition is TRUE
        - else block runs when the condition is FALSE

        Example:
            $age = 15;
            if ($age >= 18) {
                echo "Adult";
            } else {
                echo "Minor";
            }

    ^ if...elseif...else:
        - Allows multiple conditions

        Example:
            $score = 75;

            if ($score >= 90) {
                echo "Excellent";
            } elseif ($score >= 70) {
                echo "Good";
            } else {
                echo "Needs improvement";
            }

    ^ switch statement:
        - Used when checking a variable against multiple fixed values
        - Cleaner than many if...elseif statements

        Example:
            $day = "Monday";

            switch ($day) {
                case "Monday":
                    echo "Start of the week";
                    break;
                case "Friday":
                    echo "Weekend is near!";
                    break;
                default:
                    echo "Just another day";
            }

    
    ? Comparison operators used in conditions:
        ==   : equal  
        ===  : identical (same value AND same type)  
        !=   : not equal  
        !==  : not identical  
        >    : greater than  
        <    : less than  
        >=   : greater or equal  
        <=   : less or equal  

    ? Logical operators:
        &&  : AND (both conditions must be TRUE)  
        ||  : OR (at least one condition is TRUE)  
        !   : NOT (negates the condition)

        Example:
            $age = 20;
            $hasID = true;

            if ($age >= 18 && $hasID) {
                echo "Access granted";
            }

    
    ? Summary:
        - if: check one condition  
        - if…else: choose between two outcomes  
        - elseif: multiple conditions  
        - switch: multiple fixed values  
        - Use comparison + logical operators to form conditions


