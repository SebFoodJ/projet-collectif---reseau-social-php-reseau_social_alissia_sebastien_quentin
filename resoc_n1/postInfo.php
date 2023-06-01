<?php
    while ($post = $lesInformations->fetch_assoc())
    {

        echo "<pre>" . print_r($post, 1) . "</pre>";
        ?>
        <article>
            <h3>
                <time><?php echo $post['created'] ?></time>
            </h3>
            <address>par <a href="wall.php?user_id=<?php echo $post['id'] ?> "><?php echo $post['author_name'] ?></address>
            <div>
                <p><?php echo $post['content'] ?></p>
            </div>
            <footer>
                <small>♥ <?php echo $post['like_number'] ?></small>
                <a href="tags.php?tag_id=<?php echo $post['tag_id'] ?>">#<?php echo $post['taglist'] ?></a>,
            </footer>
        </article>
    <?php } ?>

