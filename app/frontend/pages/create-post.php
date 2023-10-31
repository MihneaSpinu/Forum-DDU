<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
    <h2>Create Post Form</h2>
    <form action="" method="post">
        <!-- Choose topic within forum id -->
        <div class="form-group">
            <label for="topic_id">Topic :</label>
            <select class="form-control" id="topic_id" name="topic_id">
                <?php
                $topics = Topic::getTopics()->results();
                if (count($topics) > 0) {
                    foreach ($topics as $topic) {
                        if ($topic->forum_id == $forum_id) {
                            echo '<option value="' . $topic->topic_id . '">' . $topic->name . '</option>';
                        }
                    }
                }
                ?>
            </select>   
        <div class="form-group">
            <label for="name">Title :</label>
            <input type="text" class="form-control" id="title" placeholder="Enter name for the post" name="title" value="<?php echo escape(Input::get('title')); ?>">
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" id="content" placeholder="Enter a description" name="content" value="<?php echo escape(Input::get('content')); ?>">
        </div>
        <input type="submit" class="btn-register" value="Create a post">
        <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">
    </form>
</div>