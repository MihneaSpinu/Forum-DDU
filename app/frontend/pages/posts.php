<div class="container mx-auto mt-4">
    <div class="row">
        <div class="jumbotron text-center" style="margin-bottom:0">
            <?php
            //Print post user, title, content and date
            echo '<h1 class="text-dark">' . $post->title . '</h1>';
            echo '<p class="lead text-dark">By: ' . $data->username . '</p>';
            echo '<p class="lead text-dark">Posted on: ' . $post->created_at. '</p>';
            echo '<p class="lead text-dark">' . $post->content . '</p>';           
            ?>
        </div>
    </div>
</div>