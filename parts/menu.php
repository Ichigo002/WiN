
<body>
   <header class="header" id="header">
      <section class="wrapper container">
          <link rel="stylesheet" href="style.css">
           <link rel="stylesheet" href="script.js">
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
                  <span class="menu-link" data-toggle="submenu">Resource<i class="bx bx-chevron-down"></i></span>
                  <ul class="submenu">
                     <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">Resource Link</a></li>
                     <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">Resource Link</a></li>
                     <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">Resource Link</a></li>
                     <li class="submenu-item"><a href=<?php mk_url(""); ?> class="submenu-link">Resource Link</a></li>
                  </ul>
               </li>
               <form>
                  <input type="text" id="szukaj"> <input type="submit" value="Szukaj" id="wyslij">
                  </form>
         </nav>
      </section>
      
   </header>
   <div style="margin-bottom: 35px">.</div>