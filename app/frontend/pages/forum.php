<div class="container-fluid px-0">
    <div class="row">
        <div class="col">
            <div class="sidebar h-100 mw-25 px-3 bg-dark" style="width: fit-content;">
                <div class="text-white text-decoration-none border-bottom pt-3">
                    <?php if ($forum_id == 1) {
                        echo '<h4>Finite Abys <br>Forum Discussion</h4>';
                    } else if ($forum_id == 2) {
                        echo '<h4>Mod Workshop <br>Forum Discussion</h4>';
                    }
                    ?>
                </div>
                <ul class="mt-3 nav nav-pills flex-column mb-auto">
                    <?php if ($user->data()->group_id == 2) {
                        echo '<a href="create-topic.php" class="btn btn-primary btn-block mb-2 font-weight-bold mx-auto text-white" style="white-space: normal;">Create Topic</a>';
                    } ?>
                    <?php if (count($topics) > 0) {
                        foreach ($topics as $topic) {
                            if ($topic->forum_id == $forum_id) {
                                $buttonClass = ($topic->topic_id == $topic_id) ? 'btn-primary' : 'btn-outline-primary';
                                echo '<a class="btn ' . $buttonClass . ' btn-block mb-2 font-weight-bold mx-auto text-white" style="white-space: normal;" href="forum.php?forum_id=' . $forum_id . '&topic_id=' . $topic->topic_id . '">' . $topic->name . '';
                                echo '<p class="font-italic font-weight-normal mx-auto" style="white-space: normal;">' . $topic->description . '</p>';
                                echo '</a>';
                            }
                        }
                    } else {
                        echo '<div class="alert alert-danger"><strong></strong>No topics found!</div>';
                    } ?>
                </ul>
            </div>
        </div>
        <div class="col py-3">
            <div class="row justify-content-center">
                <div class="jumbotron text-center posts" style="margin-bottom:0">
                    <?php
                    if (count($topics) > 0) {
                        foreach ($topics as $topic) {
                            if ($topic->topic_id == $topic_id) {
                                echo '<h1>Posts Overview in the ' . $topic->name . ' topic</h1>';
                                if (count($posts) > 0) {
                                    foreach ($posts as $p) {
                                        echo '<div class="card">';
                                        echo '<div class="card-body">';
                                        echo '<h4 class="card-title">' . $p->title . '</h4>';
                                        echo '<p class="card-text">' . $p->content . '</p>';
                                        echo '<a href="posts.php?post_id=' . $p->post_id . '" class="btn btn-primary">View Post</a>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-danger"><strong></strong>No posts found!</div>';
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
