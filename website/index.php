<?php include('includes/config.php');
include('includes/header.php');
?>


<main>
    <h1>This will be the content for my home page</h1>
    <!-- call out randomImage() -->
    <div class="mainContent">
        <?php

        $photos[0] = 'photo1';
        $photos[1] = 'photo2';
        $photos[2] = 'photo3';
        $photos[3] = 'photo4';
        $photos[4] = 'photo5';

        $i = rand(0, 4);

        $selectedImage = 'images/' . $photos[$i] . '.jpg';
        echo '<img src="' . $selectedImage . '" alt="' . $photos[$i] . '">';

        ?>
    </div>
</main>



<?php include('includes/footer.php');  ?>