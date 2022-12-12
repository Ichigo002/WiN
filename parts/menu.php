
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
            <section> <!--MENU głowne-->
<nav>
<ul>
<li><a href="link">Przycisk 1</a></li>
<li><a href="link">Przycisk 2</a></li>
<li><a href="link">Przycisk 3</a></li>
<li><a href="link">Przycisk 4</a></li>
</ul>
</nav>
</section>
      
   </header>
