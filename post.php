<?php
    require 'connect.php';
    // from the submit post
    $name = $_POST['name'];
    $status = $_POST['status'];	
    $result = null;
    if (has_value($status) &&$status!='status' && valid_chars($status, 0, 140) && has_value($name) && $name != 'name')
    {
        $status =  $db->real_escape_string($status);
        $name =  $db->real_escape_string($name);
        $sql = "INSERT INTO tweets(name, status) VALUES ('{$name}', '{$status}')";
        $result = $db->query($sql);	
    }

    /*
     * Function: has_value
     * Summary: Returns a boolean if a $key passed to it has a value
     * Parameters: $key - string 
     * Return: boolean
     *
     **/
	function has_value($key)
    {
            return isset($key) && $key != '';
    }
    /*
     * Function: valid_chars
     * Summary: Returns a boolean if a $key's length passed is in between of the minimum value and the maximum value
     * Parameters: $key - the text
     *             $min - the minimum amount
     *             $max - the maximum amount
     * Return: boolean
     *
     **/
    function valid_chars($key, $min, $max)
    {
            return strlen($key) > $min && strlen($key) <= $max;
    }
    


?>