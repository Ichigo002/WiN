
<body>
   <header class="header">
           <script><?php echo file_get_contents("menu-dropdown-script.js"); ?></script>

           <!--MENU POTIONS-->
           <ul class="menu" id="menu">
               <!--MENU ^^ PODSTAWY -->
               <li class="menu-item menu-dropdown">
                  <span class="menu-link" data-toggle="submenu">Podstawy<i class="bx bx-chevron-down"></i></span>
                  <ul class="submenu">
                     <li class="submenu-item"><a href=<?php mk_url("dodawanie"); ?> class="submenu-link">Dodawanie</a></li>
                     <li class="submenu-item"><a href=<?php mk_url("odejmowanie"); ?> class="submenu-link">Odejmowanie</a></li>
                  </ul>
               </li>
               <!--MENU ^^ ZAAWANSOWANE -->
               <li class="menu-item menu-dropdown">
                  <span class="menu-link" data-toggle="submenu">Zaawansowane<i class="bx bx-chevron-down"></i></span>
                  <ul class="submenu">
                     <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">Link</a></li>
                  </ul>
               </li>
            </ul>
            <!--MENU KLAS-->
            <li><a href="#">Start</a></li>
    <li><a href="#">Portfolio</a>
    <ul>
    <li><a href="#">Strony www</a></li>
    </ul>
    </li>
    <li><a href="#">Artykuły</a></li>
    <li><a href="#">Informacje</a>
    <ul>
    <li><a href="#">O mnie</a></li>
    <li><a href="#">Aktualności</a></li>
    </ul>
    </li>
    <li><a href="#">Webdesign</a></li>
    <li><a href="#">Kontakt</a>
    <ul>
    <li><a href="#">Formularz kontaktowy</a></li>
    <li><a href="#">Pomoc</a></li>
    </ul>
    </li>
    <li><a href="#">Współpraca</a>
    <ul>
    <li><a href="#">Wymiana linkiem</a></li>
    </ul>
    </li>
</ul>
            
      
   </header>
