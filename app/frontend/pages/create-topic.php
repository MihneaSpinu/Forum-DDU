<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
    <?php 
    echo '<h2>Create Topic for ' . $forum_name . '</h2>';
    ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Title :</label>
            <input type="text" class="form-control" id="title" placeholder="Enter name for the topic" name="title" value="<?php echo escape(Input::get('title')); ?>">
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" id="content" placeholder="Enter a description" name="content" value="<?php echo escape(Input::get('content')); ?>">
        </div>
        <input type="submit" class="btn-register" value="Create a post">
        <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">
    </form>
</div>