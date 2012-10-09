<?php
    require "connect.php";
     $id = $_GET['id'];
    if (!is_numeric($id))
    {
        header('Location: index.php');
        die;
    }
    
    $sql = "SELECT * FROM tweets WHERE id = {$id}";
    $result = $db->query($sql);
    
    if (!$result || $result->num_rows != 1)
    {
        header('Location: index.php');
        die;
    }
    
    $status = $result->fetch_assoc();
?>

<?php require 'header.php'; ?>
    <header class="main_header"><h1><?= $status['name']; ?></h1></header>
    <section id="individual_status">
        <section class="wrapper">
            <article>
                <p class="status_par"><?= $status['status']; ?></p>
            </article>
        </section>
            
    </section>
    <footer class="main_footer"><p><?= $status['date']; ?></p></footer>	
<?php require 'footer.php'; ?>