<?php $name = $_SESSION['name'] ?>
<?php $surname = $_SESSION['surname'] ?>

<?php $pdp = $_SESSION['pdp'] ?>


<div class="sidebar close">
    <div class="logo-details">
        <img src="assets/img/mynewgeswhite.png"></img>
    </div>
    <ul class="nav-links">

        <li>

            <a href="index.php?page=admindash">
                <i class="fa-light fa-house"></i>
                <span class="link_name">Tableau de bord</span>
            </a>
            <ul class="sub-menu blank">
                <li>
                    <a class="link_name" href="index.php?page=admindash">Tableau de bord</a>
                </li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fa-light fa-id-card"></i>
                    <span class="link_name">Inscription</span>
                </a>
                <i class="fa-light fa-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Inscription</a></li>
                <li><a href="index.php?page=inscriptionstudent">Inscription d'élève</a></li>
                <li><a href="index.php?page=inscriptioninter">Inscription d'intervenant</a></li>
                <li><a href="index.php?page=inscription">Inscription d'admin</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fa-light fa-plug"></i>
                    <span class="link_name">Services</span>
                </a>
                <i class="fa-light fa-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Services</a></li>
                <li><a href="#">Photo Caroussel</a></li>
                <li><a href="https://portal.academicsoftware.com/dashboard" target="_blank">Logiciels</a></li>
                <li><a href="index.php?page=partenaires">Partenaires</a></li>
            </ul>
        </li>
        <li>
            <a id="darkModeBtn" href="#">
                <i class="fa-light fa-moon"></i>
                <span class="link_name">Mode nuit</span>
            </a>
            <ul class="sub-menu blank">
                <li id="darkModeBtn"><a class="link_name" href="#">Mode nuit</a>
                </li>
            </ul>
        </li>

        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="<?= $pdp ?>" alt="profileImg" />
                </div>
                <div class="name-job">
                    <div class="profile_name"><?= $name, " ", $surname ?></div>
                    <div class="job"><?php echo $_SESSION['grade']; ?> </div>
                </div>
                <a href="index.php?logout"><i class="fa-regular fa-right-from-bracket"></i></a>

            </div>
        </li>
    </ul>
</div>