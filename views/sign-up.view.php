<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'partials/header.php'; ?>
    
    <?php 
        // Go back to the index page when you're logged in.
        if (isset($_SESSION['user_id'])) {
            header('Location: /first-page');
            exit();
        } 
        // Error messages.
        if (isset($_SESSION['error_message'])) {
            echo '<p class="session-message">' . $_SESSION['error_message'] . '</p>';
            unset($_SESSION['error_message']); 
        }
    ?>

    <!-- Main -->
    <!-- For the account creation form I used the same layout as for the login, where the white background makes the form easy to read and is divided into three parts. 
    The special (or confusing) thing about this page is that I used two sections on one page of which only one should be visible, which is done by clicking the previous 
    or next button to switch through the tabs. In that section there are three parts below each other (header text, four inputs and a div for the prev/next/submit button. 
    The reason why I put the buttons in a div is because I can then put them next to each other instead of below each other. -->
    <main>
        <div class="main-container-login">
            <form action="add-user.php" class="registration-form" method="post">
                <section class="tab1">
                    <h1 class="header-text-login">Create an Account (1/2)</h1>
                    <div class="registration-text">
                        <input type="text" id="first-name" name="firstname" placeholder="First Name" class="registration-text-style" required>
                        <input type="text" id="last-name" name="lastname" placeholder="Last Name" class="registration-text-style" required>
                        <input type="date" id="dob" name="dob" placeholder="Date of Birth" class="registration-text-style" required>
                        <input type="text" id="job-function" name="job-function" placeholder="Job Function" class="registration-text-style" required>
                    </div> 
                    <button class="next-btn" type="button" name="next-btn">Next</button>
                </section>
                <section class="tab2">
                    <h1 class="header-text-login">Create an Account (2/2)</h1>
                    <div class="registration-text">
                        <input type="text" id="username" name="username" placeholder="Username" class="registration-text-style" required>
                        <input type="email" id="user-mail" name="email" placeholder="Email" class="registration-text-style" required>
                        <input type="password" id="password" name="password" placeholder="Password" class="registration-text-style" minlength="8" required>
                        <input type="password" id="confirm-password" placeholder="Repeat Password" class="registration-text-style" minlength="8" required>
                    </div>
                    <div class="prev-next-btn">
                        <button class="prev-btn" type="button" name="prev-btn">Prev</button>
                        <button class="submit-btn" id="submit" type="submit" name="submit-btn">Submit</button>
                    </div>
                </section>
            </form> 
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>