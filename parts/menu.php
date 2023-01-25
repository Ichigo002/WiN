
<body>
   <header class="header">
         <script><?php echo file_get_contents("menu-dropdown-script.js"); ?></script>

         <!--Artiffical fill of flex-->
         <div></div>

         <!--MENU-->
         <nav class="menu-nav">
            <ul class="menu" id="menu">
                </li>
                <!--MENU ^^ PODSTAWY -->
                <li class="menu-item menu-dropdown">
                   <span class="menu-link" data-toggle="submenu">Gierki<i class="bx bx-chevron-down"></i></span>
                   <ul class="submenu">
                      <li class="submenu-item"><a href=<?php mk_url("obliczanie_gierka"); ?> class="submenu-link">Obliczanie</a></li>
                   </ul>
                </li>
                <!--MENU ^^ ZAAWANSOWANE -->
                <li class="menu-item menu-dropdown">
                   <span class="menu-link" data-toggle="submenu">O stronie<i class="bx bx-chevron-down"></i></span>
                   <ul class="submenu">
                      <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">Kontakt</a></li>
                      <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">O twórcach</a></li>
                      <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">O stronie</a></li>
                   </ul>
                </li>
            </ul>
         </nav>
      
      <div class="search-bar">
         <form>
            <input type="text", placeholder="Search . . ."/>
            <input type="submit" value="Search"/>
         </form>
      </div>
   </header>
   <div style="margin-bottom: 35px;">
      .
   </div>
