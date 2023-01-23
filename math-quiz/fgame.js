/* -=-=-=- SETTINGS' GAME -=-=-=- */

var amount_question_per_lvl = 5;

// WARNING!
// Number of levels are specified by number of names_by_lvl

//LVL0: ["example", css_color]
//LVL1: ["example", css_color]
//...
var names_by_lvl = [
  ["Easy",   "green"],
  ["Medium", "orange"],
  ["Hard",   "red"],
  ["Insane", "purple"]
];

//LVL0: [min, max]
//LVL1: [min, max]
//...
var values_by_lvl = [
  [1, 14 ],
  [12, 25],
  [24, 50],
  [1, 10]
];

/*
@  -*+/ >> standard operators
@  ^    >> powder [2^3 = 8]
@  sqrt >> squirt [sqrt(9) = 3]
*/

//LVL0: ["op1", "op2"...]
//LVL1: ["op1", "op2"...]
//...
var operators_by_lvl = [
  ["-", "+"],
  ["*", "/", "-", "+"],
  ["*", "/"],
  ["sqrt", "^"]
];



/* -=-=-=- APPLICATION CODE BELOW -=-=-=- */

var correct_answer;

var no_good;

var lvl = 0;
var difficult = 3;

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

function init_start() {
  activeGame();
  askQuestion();
  lvl = 0;
}

function end_game() {
  alert("end!");
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
  setTimeout(askQuestion, 600);
}

function reset() {
  document.getElementById("fg-res-submit").disabled = false;
  document.getElementById("fg-res-input").disabled = false;
  document.getElementById("fg-correct").style.display = 'none';
  document.getElementById("fg-fail").style.display = 'none';
}

function generateQuestion() {

  let v1 = Math.round(Math.random() * values_by_lvl[difficult][1] + values_by_lvl[difficult][0]);
  let v2 = Math.round(Math.random() * values_by_lvl[difficult][1] + values_by_lvl[difficult][0]);
  
  let ff = Math.round(Math.random() * operators_by_lvl[difficult].length);
  if (ff >= operators_by_lvl[difficult].length) ff--;
  
  let op = operators_by_lvl[difficult][ff];

  let ans;
  let showntxt = undefined;
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
    case "^":
      let p = Math.round(Math.random() * 24 + 1) % 3 + 2;
      v2 = p;
      ans = Math.pow(v1, p);
      break;
    case "sqrt":
      ans = v1;
      let v = parseInt(v1) * parseInt(v1);
      showntxt = `√${v}`;
      break;
    default:
      console.error(`Unkonwn operator detected in Math Quiz: '${op}'`);
      break;
  }

  correct_answer = ans;
  if(showntxt == undefined)
    return `${v1} ${op} ${v2}`;
  else
    return showntxt;
}

function askQuestion() {
  reset();
  displayLvl();

  if(lvl >= amount_question_per_lvl) {
    difficult += 1;
    lvl = -1;
  }

  if(difficult >= names_by_lvl.length) {
    end_game();
  }

  document.getElementById("fg-res-input").value = '';
  document.getElementById("fg-eqt").innerHTML = "<h1>"+ generateQuestion() + "</h1>";
}

function displayLvl() {
  document.getElementById("fg-clvl").innerHTML = 
  `<h4>Level: ${lvl+1} | <span style='color:${names_by_lvl[difficult][1]};'>${names_by_lvl[difficult][0]}</span></h4>`;
}