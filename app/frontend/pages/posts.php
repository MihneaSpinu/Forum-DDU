<div class="container mx-auto mt-4 posts">
    <div class="row">
        <div class="jumbotron text-center w-100" style="margin-bottom:0">
            <?php
            echo '<h1 class="text-dark">' . $post->title . '</h1>';
            echo '<p class="lead text-dark">Posted by: ' . $creator->username . '</p>';
            echo '<p class="lead text-dark">Posted on: ' . $post->created_at . '</p>';
            echo '<p class="lead text-dark">' . $post->content . '</p>';
            echo '<p class="text-dark">Votes: ' . $post->value . '</p>';
            //Write a comment
            if ($user->isLoggedIn()) {
                echo '<form action="" method="post">';
                echo '<p class="text-dark">Write a comment</p>';
                echo '<div class="form-group">';
                echo '<textarea class="form-control" id="content" name="content" rows="3"></textarea>';
                echo '</div>';
                //Post value

                echo '<button type="submit" name="submit" class="btn btn-primary">Submit</button>';
                echo '</form>';
            } else {
                echo '<div class="alert alert-danger"><strong></strong>You must be logged in to write a comment!</div>';
            }
            require_once BACKEND_AUTH . 'comments.php';
            require_once FRONTEND_PAGE . 'comments.php'; ?>
        </div>
    </div>
</div>