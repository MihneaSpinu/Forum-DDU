<div class="container">
    <div class="row">
        <div class="jumbotron text-center w-100" style="margin-bottom:0">
            <?php
            // Rest of the HTML and PHP code
            if (isset($comments) && count($comments) > 0) {
                foreach ($comments as $c) {
                    echo '<div class="card comments">';
                    echo '<div class="card-body justify-content-start">';
                    $creator = User::getUserById($c->user_id);
                    echo '<h4 class="card-title">' . $creator->username . '</h4>';
                    echo '<p class="card-text">' . $c->content . '</p>';
                    echo '<p class="card-text">' . $c->created_at . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="alert alert-danger"><strong></strong>No comments found!</div>';
            } ?>
        </div>
    </div>
</div>