<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- All the data of the tables -->
<?php require 'check-my-profile.php';?>

<!-- You have to be logged in to go on this page. -->
<?php 
    if (empty($_SESSION['user_id'])) {
        header('Location: /login');
    } 
?>

<!-- Header -->
<?php require 'partials/header-profile.php';?>

    <!-- Main -->
    <!-- 
        On this page I wanted to convey a profile in a simple but clean way. 
        I have created 2 sections, with aprofile photo on the left and the standard text on the right (name, function and buttons that navigate you to one of user's pages).
        For the profile photo section I chose to choose a standard profile photo if you have not uploaded anything yourself yet. Once you've done that through My Account, your uploaded profile photo will appear in the image tag.
        For the text section I use the user's database data that he/she set when creating the account or changing data in 'My Account'. I then put everything below each other and I also created a div in it so that the buttons can be next to each other. -->
    <main>
        <div class="main-container-portfolio">
            <section class="container-profile-picture">
                <?php
                    if ($profile['profile_image'] != NULL){
                        echo "<img src='data:image/jpeg;base64," . $profileImage . "' class='profile-picture' alt='profile Picture'>";
                    } else {
                        echo "<img src='images\Default_pfp.svg.png' alt='picture-of-me' class='profile-picture'>";
                    }
                ?>
            </section>  
            <section class="container-text">
                <?php echo "<h1 class='header-text-main'>Hello, I am <span>" . $profile['firstname'] . "!</span></h1>"?>
                <?php echo "<h3>". $profile['job_function'] . "</h3>";?>
                <div class="container-btn">
                    <button class="left-btn"><a class="<?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About Me</a></button>
                    <button class="right-btn"><a class="<?= ($_SERVER['REQUEST_URI'] == '/work' ? 'active' : ''); ?>" href="/work">See My Work</a></button>
                </div>
            </section>  
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>