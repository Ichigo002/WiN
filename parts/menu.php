
<body>
   <header class="header">
         <script><?php echo file_get_contents("menu-dropdown-script.js"); ?></script>

         <!--Artiffical fill of flex-->
         <div></div>

         <!--MENU-->
         <nav class="menu-nav">
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
      
   </header>
   <div style="margin-bottom: 35px;">
      ff
   </div>
