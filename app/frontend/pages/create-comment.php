<div class="container mt-3">
    <form action="" method="post">
        <div class="form-group">
            <p for="comment">Write a comment:</p>
            <textarea class="form-control bg-dark text-white" rows="5" id="content" name="content"></textarea>
            <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">
            <input type="submit" class="btn-register" value="Create a comment">
        </div>
    </form>
</div>