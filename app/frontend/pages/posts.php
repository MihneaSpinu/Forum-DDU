<div class="container mx-auto mt-4 posts">
    <div class="row">
        <div class="jumbotron text-center w-100" style="margin-bottom:0">
            <?php
<<<<<<< Updated upstream
            echo '<h1 class="text-dark">' . $post->title . '</h1>';
            echo '<p class="lead text-dark">Posted by: ' . $creator->username . '</p>';
            echo '<p class="lead text-dark">Posted on: ' . $post->created_at . '</p>';
            echo '<p class="lead text-dark">' . $post->content . '</p>';
=======
            echo '<a href="create-post.php?channel_id=' . $topic_id . '" class="btn btn-primary">Create Post</a>';

            if ($posts->count()) {
                foreach ($posts->results() as $p) {
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h4 class="card-title">' . $p->title . '</h4>';
                    echo '<p class="card-text">' . $p->content . '</p>';
                    echo '<a href="comments.php?post_id=' . $p->post_id . '" class="btn btn-primary">View Post</a>';
                    echo '</div>';
                    echo '</div>';
                    
                }
            } else {
                echo '<div class="alert alert-danger"><strong></strong>No posts found!</div>';
            }
>>>>>>> Stashed changes
            ?>
        </div>
    </div>
</div>