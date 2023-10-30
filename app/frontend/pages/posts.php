<div class="container mx-auto mt-4 posts">
    <div class="row">
        <div class="jumbotron text-center w-100" style="margin-bottom:0">
            <?php
            echo '<h1 class="text-dark">' . $post->title . '</h1>';
            echo '<p class="lead text-dark">Posted by: ' . $creator->username . '</p>';
            echo '<p class="lead text-dark">Posted on: ' . $post->created_at . '</p>';
            echo '<p class="lead text-dark">' . $post->content . '</p>';
            ?>
        </div>
    </div>
</div>