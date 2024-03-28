 <div class="sidebar close">
     <div class="logo-details">
         <img src="assets/img/mynewgeswhite.png"></img>
         <span class="logo_name"></span>
     </div>
     <ul class="nav-links">
         <li>
             <a href="index.php?page=home">
                 <i class="fa-light fa-house"></i>
                 <span class="link_name">Tableau de bord</span>
             </a>
             <ul class="sub-menu blank">
                 <li><a class="link_name" href="index.php?page=home">Tableau de bord</a></li>
             </ul>
         </li>
         <li>
             <div class="iocn-link">
                 <a href="index.php?page=plannings">
                     <i class="fa-light fa-calendar-week"></i>
                     <span class="link_name">Plannings</span>
                 </a>
             </div>
             <ul class="sub-menu">
                 <li><a class="link_name" href="index.php?page=plannings">Plannings</a></li>
             </ul>
         </li>
         <li>
             <div class="iocn-link">
                 <a href="#">
                     <i class="fa-light fa-backpack"></i>
                     <span class="link_name">Scolarité</span>
                 </a>
                 <i class="fa-light fa-chevron-down arrow"></i>
             </div>
             <ul class="sub-menu">
                 <li><a class="link_name" href="#">Scolarité</a></li>
                 <li><a href="index.php?page=notes">Notes</a></li>
                 <li><a href="#">Support de Cours</a></li>
                 <li><a href="#">Offres de travail</a></li>
                 <li><a href="#">Documents</a></li>
                 <li><a href="#">Trombinoscope</a></li>
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
                 <li><a href="https://portal.academicsoftware.com/dashboard" target="_blank">Logiciels</a></li>
                 <li><a href="#">Ciriculum Vitae</a></li>
                 <li><a href="index.php?page=partenaires">Partenaires</a></li>
             </ul>
         </li>
         <li>
             <a id="mode-toggle" href="#">
                 <i class="fa-light fa-moon"></i>
                 <span class="link_name">Mode nuit</span>
             </a>
             <ul class="sub-menu blank">
                 <li><a class="link_name" href="#">Mode nuit</a></li>
             </ul>
         </li>
         <li>
             <div class="profile-details">
                 <div class="profile-content">
                     <img src="assets/img/DSC_0201.JPG" alt="profileImg" />
                 </div>
                 <div class="name-job">
                     <div class="profile_name"><?= $username ?></div>
                     <div class="job">ESGI</div>
                 </div>
                 <a href="index.php?logout"><i class="fa-regular fa-right-from-bracket"></i></a>

             </div>
         </li>
     </ul>
 </div>