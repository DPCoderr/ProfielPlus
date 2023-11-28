<body>
    <header>
        <!-- We have chosen that the header consists of two parts: the logo and the nav (inline). The logo on the left and nav on the right if there is still enough space between the two. 
        If this is not the case, the nav will no longer be displayed, but a drop menu will appear in its place with all the nav links listed below each other if you click on the button. 
        This header has other nav-links than the other header file for only the profile page. -->
        <div class="logo-website">Underdogs</div>
        
        <!-- Normal NAV -->
        <nav class="navbar">    
            <ul class="nav-links">
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <?php echo"<li class='nav-item'><a class='nav-link' href='profiles.php?id=" . $_SESSION['profileUserId'] . "' >Profile</a></li>"?>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="/work">Work</a></li> -->
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''); ?>" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/logout' ? 'active' : ''); ?>" href="/logout">Logout</a></li>
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
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profile' ? 'active' : ''); ?>" href="/profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="/work">Work</a></li> -->
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''); ?>" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/logout' ? 'active' : ''); ?>" href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>