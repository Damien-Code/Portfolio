let a = 0
let b = 0
let c = 0

function changeColor() {
    let color = ["black", "white"];
    let textColor = ["white", "black"];
    let bColor = ["white", "black"];
    document.getElementById("body").style.backgroundColor = color[a];
    document.getElementById("body").style.color = textColor[b];
    document.getElementById("body").style.border = bColor[c];
    a++;
    b++;
    c++;
    if (a == color.length) a = 0;
    if(b == textColor.length) b = 0;
    if(c ==bColor.length) c = 0;
}

const getUserChoice = userInput => {
    userInput = userInput.toLowerCase();
    if (userInput === 'rock' || userInput === 'paper' || userInput === 'scissors' || userInput === 'bomb') {
        return userInput;
    } else {
        console.log('Error');
    }
}

console.log(getUserChoice('rock'));

function getComputerChoice() {
    const randomNumber = Math.floor(Math.random() * 3)
    if (randomNumber == 0) {
        return 'rock';
    } else if (randomNumber == 1) {
        return 'paper';
    } else if (randomNumber == 2) {
        return 'scissors';
    } else {
        console.log('error')
    }
}

function determineWinner(userChoice, computerChoice) {
    if (userChoice == undefined) {
        return "error"
    }
    if (userChoice == computerChoice) {
        return "The game was a tie";
    }
    if (
        (userChoice == "rock" && computerChoice == "paper") ||
        (userChoice == "paper" && computerChoice == "scissors") ||
        (userChoice == "scissors" && computerChoice == "rock")
    ) {
        return "Computer has won";
    }
    return "User has won";
}

playGame();

function playGame() {
    let x = document.getElementById('input').value;
    let userChoice = getUserChoice(x);
    let result = document.getElementById('result')
    result.innerText = `your choice: ${userChoice}\n`;
    let computerChoice = getComputerChoice();
    result.innerText += `computers choice: ${computerChoice}\n`;
    result.innerText += `result: ${determineWinner(userChoice, computerChoice)}`
}





// function changeTextColor() {
//     let textColor = ["white", "black"];
//     document.getElementById("body").style.color = textColor[b];
//     b++;
//     if (b == textColor.length) b = 0;
// }



