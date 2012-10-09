<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Status Updates</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
            <script type="text/javascript">
                /*
                 * Function: textCounter
                 * Summary: Returns decrements the max value in the textfield
                 * Parameters: field - the main text field where text is entered
                 *             countfield - the counter field
                 *             maxlimit - the maximum limit
                 *
                 **/
                function textCounter( field, countfield, maxlimit ) 
                {
                        if ( field.value.length > maxlimit )
                        {
                        field.blur();
                        field.focus();
                        }
                        countfield.value = maxlimit - field.value.length;
                }
                    
                /*
                * Function: clear_value
                * Summary: Clears the textfield if the text field is equal to tag and also when clicked
                * Parameters: tag
                *
                **/
                function clear_value(tag)
                {
                    
                    var textfield = document.getElementById(tag);
                    
                    if (textfield.value == "")
                    {
                        textfield.value = tag;
                    }
                    else if (textfield.value == tag)
                    {
                        textfield.value = "";
                    }
                }
                
                
            </script>
		
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><img src="images/1.png" alt="search" /></li>
                    <li><img src="images/2.png" alt="twirra" /></li>
                    <li><img src="images/3.png" alt="message" /></li>
                    <li><img src="images/4.png" alt="settings" /></li>
                    <li><img src="images/5.png" alt="profile" /></li>
                </ul>
            </nav>
        </header>