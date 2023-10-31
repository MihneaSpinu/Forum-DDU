<div class="container mx-auto mt-4 posts">
    <div class="row">
        <div class="jumbotron text-center w-100 bg-dark" style="margin-bottom:0">
            <?php
            echo '<h1 class="">' . $post->title . '</h1>';
            echo '<p class="lead ">Posted by: ' . $creator->username . '</p>';
            echo '<p class="lead ">Posted on: ' . $post->created_at . '</p>';
            echo '<p class="lead ">' . $post->content . '</p>';
            ?>
        </div>
    </div>
</div>