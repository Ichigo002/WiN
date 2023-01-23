var correct_answer;

var lvl = 0;
var difficult = 0;
var amount_question_per_lvl = 2;

var min_easy_no = 1;
var max_easy_no = 10;

var operators = ["*", "/", "-", "+"];


window.onload = init();

function init() {
  activeMenu();
}

/* Window handler */
function activeMenu() {
  document.getElementById("fg-start").style.display = 'block';
  document.getElementById("fg-play").style.display = 'none';
}

function activeGame() {
  document.getElementById("fg-play").style.display = 'block';
  document.getElementById("fg-start").style.display = 'none';
}

/* Events */
function init_start() {
  activeGame();
  askQuestion();
  lvl = 1;
}

function send_answer() {
  let answer = document.getElementById("fg-res-input").value;
  if(answer == correct_answer) {
    document.getElementById("fg-correct").style.display = 'block';
  }
  else {
    document.getElementById("fg-fail").style.display = 'block';
  }
  document.getElementById("fg-res-submit").disabled = true;
  document.getElementById("fg-res-input").disabled = true;
  lvl++;
  setTimeout(askQuestion, 1000);
}

function reset() {
  document.getElementById("fg-res-submit").disabled = false;
  document.getElementById("fg-res-input").disabled = false;
  document.getElementById("fg-correct").style.display = 'none';
  document.getElementById("fg-fail").style.display = 'none';
}

function generateQuestion() {
  let v1 = Math.round(Math.random() * max_easy_no + min_easy_no);
  let v2 = Math.round(Math.random() * max_easy_no + min_easy_no);
  let op = operators[Math.round(Math.random() * operators.length-1)];

  let ans;
  switch (op) {
    case "*":
      ans = v1 * v2;
      break;
    case "/":
      ans = v1 / v2;
      break;
    case "-":
      ans = v1 - v2;
      break;
    case "+":
      ans = v1 + v2;
      break;
    default:
      break;
  }

  console.log(op);
  correct_answer = ans;
  return v1 + " " + op + " " + v2;
}

/* Game Handling */
function askQuestion() {
  reset();
  displayLvl();

  if(lvl >= amount_question_per_lvl) {
    difficult += 1;
    lvl = -1;
  }

  document.getElementById("fg-res-input").value = '';
  document.getElementById("fg-eqt").innerHTML = "<h1>"+ generateQuestion() + "</h1>";
}

function displayLvl() {
  let diffname, color;

  switch(difficult) {
    case 0:
      diffname = "EASY";
      color = "green";
    break;
    case 1:
      diffname = "MEDIUM";
      color = "orange";
    break;
    case 2:
      diffname = "HARD";
      color = "red";
    break;
    case 3:
      diffname = "EXTREME";
      color = "white";
    break;
    default:
      diffname = "IMAGINATIVE DEATH";
      color = "purple";
  }

  document.getElementById("fg-clvl").innerHTML = 
  "<h4>Level: " + (lvl+1)+" | <span style='color:"+color+";'>"+ diffname + "</span></h4>";
}