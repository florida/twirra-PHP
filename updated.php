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
    
    header('Refresh: 3; URL=index.php');


?>

<?php require 'header.php'; ?>
    <header class="main_header">
            <h1>Twirra</h1>
    </header>
    <section id="updates">
        <section class="wrapper">
            <article>
                <?php if(isset($result)): ?> 
                    <p>
                            Status Update Posted <br />
                    </p>
                <?php endif; ?>
                
                <?php if(!has_value($name) || $name == 'name'): ?> 
                    <p>
                            please enter your <strong>NAME</strong> 
                    </p>
                <?php endif; ?>
                
                <?php if(!has_value($status) || $status == 'status'): ?> 
                    <p>
                            please enter the <strong>status</strong>  
                    </p>
                <?php endif; ?>
                
                <?php if(!valid_chars($status, 0, 140)): ?> 
                    <p>
                            Could only enter <strong>140 characters.</strong>  
                    </p>
                <?php endif; ?>
                
                <p>You will automatically be redirected to the main page</p>
                <a href="index.php">Go to Twirra now</a>
            </article>
        </section>
    </section>
    <footer class="main_footer"></footer>
	
<?php require 'footer.php'; ?>