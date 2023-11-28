<body>
    <header>
        <!-- We have chosen that the header consists of two parts: the logo and the nav (inline). The logo on the left and nav on the right if there is still enough space between the two. 
        If this is not the case, the nav will no longer be displayed, but a drop menu will appear in its place with all the nav links listed below each other if you click on the button.  -->
        <div class="logo-website">Underdogs</div>
        
        <!-- Normal NAV -->
        <nav class="navbar">    
            <ul class="nav-links">

                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profiles' ? 'active' : ''); ?>" href="/profiles">Profiles</a></li>


                <?php 
                    if (isset($_SESSION['user_id'])) {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/my-acount-general' ? 'active' : '')' href='/my-account-general'>My Account</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/contact' ? 'active' : '')' href='/contact'>Contact</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/logout' ? 'active' : '')' href='/logout'>Logout</a></li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/contact' ? 'active' : '')' href='/contact'>Contact</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/login' ? 'active' : '')' href='/login'>Login</a></li>";
                    }
                ?>

            </ul>
        </nav>
        
        <!-- Drop menu open/closed btn -->
        <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        
        <!-- Drop Menu -->
        <nav class="drop-menu">    
            <ul class="links-drop-menu">
                
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profiles' ? 'active' : ''); ?>" href="/profiles">Profiles</a></li>

                <?php 
                    if (isset($_SESSION['user_id'])) {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/my-acount-general' ? 'active' : '')' href='/my-account-general'>My Account</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/contact' ? 'active' : '')' href='/contact'>Contact</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/logout' ? 'active' : '')' href='/logout'>Logout</a></li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/contact' ? 'active' : '')' href='/contact'>Contact</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/login' ? 'active' : '')' href='/login'>Login</a></li>";
                    }
                ?>

            </ul>
        </nav>
    </header>