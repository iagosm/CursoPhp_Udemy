<?php

include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}


?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda maiores explicabo sunt reiciendis perspiciatis debitis, facere minus recusandae repellat eveniet illo quibusdam, corporis impedit corrupti commodi sapiente molestias rem? Blanditiis.
            Culpa a cum, possimus officia aliquam exercitationem explicabo alias, ullam in, vero fuga ratione et officiis aut qui perferendis porro sequi perspiciatis nihil quam tempora nemo laboriosam. Esse, laborum iure!
            Laboriosam aspernatur laborum nulla doloremque enim, optio porro voluptate, placeat ut reiciendis inventore adipisci. Modi amet quis repellendus numquam enim consectetur expedita itaque ducimus, quos, odit magnam voluptatem officiis tempore.
            Libero suscipit nemo natus delectus incidunt neque voluptas cumque! Odit, soluta iure corporis dolores ab hic quo impedit. Eaque, sunt est. Debitis sunt quisquam excepturi ea? Voluptatibus a eligendi architecto.
            Quos consectetur, odit, est sequi magni reprehenderit mollitia voluptatem maxime, officiis sed doloribus eveniet rerum! Eaque doloribus aliquam alias deserunt! Assumenda ea pariatur quos cupiditate ut ab esse reprehenderit quod!</p>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda maiores explicabo sunt reiciendis perspiciatis debitis, facere minus recusandae repellat eveniet illo quibusdam, corporis impedit corrupti commodi sapiente molestias rem? Blanditiis.
            Culpa a cum, possimus officia aliquam exercitationem explicabo alias, ullam in, vero fuga ratione et officiis aut qui perferendis porro sequi perspiciatis nihil quam tempora nemo laboriosam. Esse, laborum iure!
            Laboriosam aspernatur laborum nulla doloremque enim, optio porro voluptate, placeat ut reiciendis inventore adipisci. Modi amet quis repellendus numquam enim consectetur expedita itaque ducimus, quos, odit magnam voluptatem officiis tempore.
            Libero suscipit nemo natus delectus incidunt neque voluptas cumque! Odit, soluta iure corporis dolores ab hic quo impedit. Eaque, sunt est. Debitis sunt quisquam excepturi ea? Voluptatibus a eligendi architecto.
            Quos consectetur, odit, est sequi magni reprehenderit mollitia voluptatem maxime, officiis sed doloribus eveniet rerum! Eaque doloribus aliquam alias deserunt! Assumenda ea pariatur quos cupiditate ut ab esse reprehenderit quod!</p>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda maiores explicabo sunt reiciendis perspiciatis debitis, facere minus recusandae repellat eveniet illo quibusdam, corporis impedit corrupti commodi sapiente molestias rem? Blanditiis.
            Culpa a cum, possimus officia aliquam exercitationem explicabo alias, ullam in, vero fuga ratione et officiis aut qui perferendis porro sequi perspiciatis nihil quam tempora nemo laboriosam. Esse, laborum iure!
            Laboriosam aspernatur laborum nulla doloremque enim, optio porro voluptate, placeat ut reiciendis inventore adipisci. Modi amet quis repellendus numquam enim consectetur expedita itaque ducimus, quos, odit magnam voluptatem officiis tempore.
            Libero suscipit nemo natus delectus incidunt neque voluptas cumque! Odit, soluta iure corporis dolores ab hic quo impedit. Eaque, sunt est. Debitis sunt quisquam excepturi ea? Voluptatibus a eligendi architecto.
            Quos consectetur, odit, est sequi magni reprehenderit mollitia voluptatem maxime, officiis sed doloribus eveniet rerum! Eaque doloribus aliquam alias deserunt! Assumenda ea pariatur quos cupiditate ut ab esse reprehenderit quod!</p>

    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>




<?php
include_once("templates/footer.php");
?>