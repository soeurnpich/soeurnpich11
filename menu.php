<!-- HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/Newlogo.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-search"></i>ស្វែងរក
                                    <span class="bot-line"></span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-female"></i>
                                    <span class="bot-line"></span>បទស្រី</a>
                            </li>
                            <li>
                                <a href="table.html">
                                    <i class="fas fa-male"></i>
                                    <span class="bot-line"></span>បទប្រុស</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>បទឆ្លងឆ្លើយ</a>  
                            </li>
                            <li class="has-sub">
                                <a href="manage-rhythm.php">
                                    <i class="fas fa-music"></i>
                                    <span class="bot-line"></span>ចង្វាក់</a>  
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-gear"></i>
                                    <span class="bot-line"></span>ការគ្រប់គ្រង</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="manage-rhythm.php">ចង្វាក់</a>
                                    </li>
                                    <li>
                                        <a href="manage_singer.php">អ្នកចម្រៀង</a>
                                    </li>
                                    <li>
                                        <a href="manage_song.php">បទចម្រៀង</a>
                                    </li>
                                    <li>
                                        <a href="card.html">ចាកចេញ</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool" style="color: white">
                        <?php
                        echo date('D,d-M-y');
                        ?>
                       
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/Newlogo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-search"></i>ស្វែងរក</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-female"></i>បទស្រី</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-male"></i>បទប្រុស</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="fas fa-user"></i>បទឆ្លងឆ្លើយ</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="fas fa-gears"></i>ការគ្រប់គ្រង</a>
                        </li>
                        <li>
                            <a href="manage-rhythm.php">
                                <i class="fas fa-music"></i>ចង្វាក់</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="bi bi-box-arrow-right"></i>ចាកចេញ</a>
                        </li>
                        </ul>
                </div>
            </nav>
        </header>