
<body>
   <header class="header" id="header">
      <section class="wrapper container">
           <script><?php echo file_get_contents("menu-dropdown-script.js"); ?></script>
         <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
         </div>
         <span class="overlay"></span>
         <nav class="navbar" id="navbar">
            <ul class="menu" id="menu">
               <li class="menu-item menu-dropdown">
                  <span class="menu-link" data-toggle="submenu">Podstawy<i class="bx bx-chevron-down"></i></span>
                  <ul class="submenu">
                     <li class="submenu-item"><a href=<?php mk_url("dodawanie"); ?> class="submenu-link">Dodawanie</a></li>
                     <li class="submenu-item"><a href=<?php mk_url("odejmowanie"); ?> class="submenu-link">Odejmowanie</a></li>
                  </ul>
               </li>
               <li class="menu-item menu-dropdown">
                  <span class="menu-link" data-toggle="submenu">Zaawansowane<i class="bx bx-chevron-down"></i></span>
                  <ul class="submenu">
                     <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">Link</a></li>
                  </ul>
               </li>
            </ul>
               <form>
                  <input type="text" id="szukaj"> <input type="submit" value="Szukaj" id="wyslij">
                  </form>
         </nav>
      </section>
      
   </header>
