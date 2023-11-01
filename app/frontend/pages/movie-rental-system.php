<!DOCTYPE html>
<html>
<head>
    <!-- Style for showcasing elements -->
    <link rel="stylesheet" href="../../../../Movie Rental/style.css">
</head>

<body>
    <!-- Table to show current members -->
    <?php require_once 'list-membership.php'; ?>

    <!-- Table to show current rentable movies -->
    <?php require_once 'list-all-movies.php'; ?>

    <!-- Table to show current rented movies -->
    <?php require_once 'list-rented-movies.php'; ?>
 

    <!-- ADD MOVIE ---------------------------------->
    <div class="edit-form">
        <h2>Add Movie</h2>
        <form method='POST'>
            <label for='title'>Title:</label>
            <input type='text' name='title'><br>

            <label for='release_year'>Release Year:</label>
            <input type='number' name='release_year'><br>

            <label for='genre'>Genre:</label>
            <input type='text' name='genre'><br>

            <label for='rental_price'>Rental Price:</label>
            <input type='number' name='rental_price' step='0.01'><br>

            <input type='submit' name='submit_movie' value='Add Movie'>
        </form>
        <?php
        if (isset($_POST['submit_movie'])) {
            $title = $_POST['title'];
            $release_year = $_POST['release_year'];
            $genre = $_POST['genre'];
            $rental_price = $_POST['rental_price'];

            // Insert movie data into the database
            $insert_movie_query = "INSERT INTO movies (title, release_year, genre, rental_price)
                                    VALUES ('$title', $release_year, '$genre', $rental_price)";

            executeQuery($conn, $insert_movie_query);
        }
        ?>
    </div>

</body>

</html>