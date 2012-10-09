<?php
    require "connect.php";
    
    $sql = "SELECT * FROM tweets ORDER BY date DESC";
    $result = $db->query($sql);
?>
<?php require 'header.php'; ?>
<!--HEADER END-->
<!--HTML STARTS HERE-->
<script type="text/javascript">

$(function() {

    $("#submit_button").click(function() {
        $.post("post.php",
        $("#post_status").serialize(),
        function(html) { 
          $("#wrapper").append(html);        
        }
      );
    });
});


</script>

<header class="main_header">
        <h1>Twirra!</h1>
</header>
<section id="statuses">
    <section class="wrapper">
        <?php if (!$result || $result->num_rows < 1): ?>
        <article>
            <p>No tweets found</p>
        </article>
        <?php endif; ?>
        <?php while($row = $result->fetch_assoc()): ?>
        
            <article>
                <header class="name_header">
                    <p><?= $row['name']; ?></p>
                </header>
                <a href="status.php?id=<?=$row['id'] ;?>">
                    <p class="status_par"><?= $row['status']; ?></p>
                </a>
                <footer class="date_footer"><?= $row['date']; ?></footer>
            </article>
        
        <?php endwhile ; ?>
    </section>
</section>
<footer class="main_footer"></footer>
        
<section id="post_update">
    <form method="post" id="post_status">
        <table>
            <tr>
                <td id="name_col">
                    <input type="text" tabindex="1" name="name" id="name" value="name" onclick="clear_value('name');" onblur="clear_value('name');" />
                </td>
                <td id="status_col">
                    <div id="status_input">
                        <input type="submit" tabindex="3" id="submit_button" value="Post Status" />
                        <input id="counter" onblur="textCounter(this.form.recipients,this,140);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="140" name="counter">
                        <input name="status" id="status" tabindex="2" value="status" onkeyup="textCounter(this,this.form.counter,140);" onclick="clear_value('status')" onblur="clear_value('status')"/>
                            
                    </div>
                </td>
            </tr>
        </table>        
    </form>
</section>
<?php require 'footer.php'; ?>