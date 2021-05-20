// JavaScript Document
//Variable and Constants 
var userScore = 0;
var compScore = 0;
const userScore_span = document.getElementById("user-score");
const compScore_span = document.getElementById("comp-score");
const score_div = document.querySelector(".score");
const result_div = document.querySelector(".result > p");
const paper_div = document.getElementById("p");
const rock_div = document.getElementById("r");
const scissors_div = document.getElementById("s");


function action() {
    //Event listners
    rock_div.addEventListener('click', function() {
        game("rock")
    })

    paper_div.addEventListener('click', function() {
        game("paper")
    })

    scissors_div.addEventListener('click', function() {
        game("scissors")
    })
}
action();

//computer choice
function getCompChoice() {
    const choices = ['rock', 'paper', 'scissors'];
    const randNum = Math.floor(Math.random() * 3);
    return choices[randNum];
}

function game(userChoice) {
    const compChoice = getCompChoice();
    switch (userChoice + compChoice) {
        case "rockscissors":
        case "paperrock":
        case "scissorspaper":
            win(userChoice, compChoice);
            break;
        case "rockpaper":
        case "paperscissors":
        case "scissorsrock":
            lose(userChoice, compChoice);
            break;
        case "rockrock":
        case "paperpaper":
        case "scissorsscissors":
            draw(userChoice, compChoice);
            break;
    }
}

function win(user, comp) {
    userScore++;
    userScore_span.innerHTML = userScore;
    compScore_span.innerHTML = compScore;
    result_div.innerHTML = user + " beats " + comp + ", you WIN! Nice : )";

}

function lose(user, comp) {
    compScore++;
    userScore_span.innerHTML = userScore;
    compScore_span.innerHTML = compScore;
    result_div.innerHTML = comp + " beats " + user + ", you LOST! Awh : (";

}

function draw(user, comp) {
    result_div.innerHTML = user + " ties " + comp + ", its a DRAW! :/";
}