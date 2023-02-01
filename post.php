<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

       $postId = $_GET['id'];
       $currentPost;
       
       foreach($posts as $post){

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
       }
    }
?> 
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nam corrupti sequi minima aspernatur repudiandae culpa aliquam consequatur cupiditate ab distinctio enim exercitationem, fuga, vero est quod deserunt quibusdam animi!
            Aspernatur impedit consectetur explicabo rerum quaerat eligendi aut ea, a est optio quae quasi quis atque itaque, praesentium similique omnis hic sequi necessitatibus. Deserunt dolore nemo, facere aliquid sint nihil!
            Repellat consequuntur iusto labore! Omnis, doloremque! Rerum dolorem officiis eaque molestias rem reprehenderit, labore veritatis libero distinctio nesciunt deleniti facere aliquam alias mollitia incidunt illum impedit a. Dolorem, voluptates at.
            Exercitationem illum ipsa iusto inventore tempora eveniet itaque molestiae impedit aspernatur quisquam vitae doloremque hic tempore libero adipisci labore, fugit eos sunt in minus? Veritatis deserunt eligendi necessitatibus quaerat fugit.
            Earum tenetur illo non dolorum et quibusdam nulla ratione saepe iure! Voluptates libero a, voluptatibus repellendus fugiat illum ea, atque veniam natus molestiae laudantium sed, labore eos eius amet rem.
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut nulla debitis asperiores sit, minima omnis error, vitae cumque id dolor, reiciendis incidunt? Molestiae, cum fugit. Deserunt tempora numquam quae omnis!
            Aliquam eum voluptates deserunt nobis qui sapiente earum expedita at nisi aliquid inventore veniam tempore aspernatur libero modi fugit vero cumque, sed ea dolor! Magnam vero quaerat porro sed eum!
            Quam voluptate, et id error ducimus tempora! Suscipit quisquam dolor esse! Inventore tenetur hic voluptas at non animi molestias dignissimos laborum voluptate, nisi facilis dolor esse provident. Quo, recusandae cupiditate.
            Eius aliquam, esse, unde nihil totam facere voluptatem labore commodi minima enim debitis asperiores sit officiis quibusdam doloribus ipsum id nemo odio sed quisquam dolore cupiditate incidunt porro? Similique, quibusdam?
            Laboriosam modi, blanditiis ex nemo autem commodi nulla molestiae iste asperiores in. Molestias quaerat possimus nihil repellat magni explicabo hic veniam quis recusandae et, nam doloremque impedit dolorum suscipit id.</p>
        </div>
            <aside id="nav-container">
                <h3 id="tags-title">Tags</h3>
                <ul id="tag-list">
                    <?php foreach($currentPost['tags'] as $tag):?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <h3 id="categories-title">Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category):?>
                        <li><a href="#"><?= $category?></a></li>
                    <?php endforeach;?>
                </ul>
            </aside>  
    </main>
<?php
    include_once("templates/footer.php")
?> 