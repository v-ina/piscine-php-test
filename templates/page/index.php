<?php require_once("C:/xampp/htdocs/piscine-blog/templates/partials/header.php"); ?>

    <main>
        <h1>Le super blog de la piscine</h1>

        <section>
            <?php foreach($articles as $article) { ?>
                <p><?php echo $article['title'];?></p>
                <?php }?>
        </section>

    </main>
    <?php require_once('C:/xampp/htdocs/piscine-blog/templates/partials/footer.php');?>
