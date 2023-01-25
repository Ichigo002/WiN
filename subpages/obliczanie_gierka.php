
<div class="frame-game">
      <div id="fg-main">
        <div class="fg-menu" id="fg-start">
          <input type="submit" value="START THIS!" onclick="init_start()"/>
        </div>
        <div class="fg-gameplay" id="fg-play">
          <div id="fg-clvl"></div>
          <h2 style="color:green; display: none;" id="fg-correct">Correct</h2>
          <h2 style="color:red; display: none;" id="fg-fail">Fail</h2>

          <div id="fg-eqt"></div>
          <div id="fg-res">
            <input type="number" id="fg-res-input" value=""/>
            <input type="submit" id="fg-res-submit" value="Check" onclick="send_answer()"/>
          </div>
        </div>
      </div>
      <link rel="stylesheet" href="math-quiz/style.css"/>
      <script src="math-quiz/fgame.js"></script>
    </div>


<a href=<?php mk_url("hp");?> class="back-button">Powrót</a>