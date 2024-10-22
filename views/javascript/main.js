
/**
 * @author Damien-Code
 * @description Deze functie zorgt ervoor dat er geswitched kan worden tussen twee CSS code blocks.
 * Door het internet ben ik erachter gekomen dat je door localStorage de darkmode functie kunt behouden na reload.
 * @return void
 */
function darkMode() {
    let isDark = document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
}

/**
 * @author Damien-COde
 * @description Hier wordt er eerst gekeken naar of alle HTML elementen zijn geladen
 * Hierna wordt er een class toegevoegd
 * @return void
 */
document.addEventListener('DOMContentLoaded', (event) => {
    if (localStorage.getItem('darkMode') === 'enabled') {
        document.body.classList.add('dark-mode');
    }
});

/**
 * @author Damien-Code
 * @description Een functie waar ik de display property van .sidebar verander in flex
 * Dit zorgt ervoor dat de sidebar te zien is bij een bepaalde schermgrootte
 * @return void
 */
function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex';
}

/**
 * @author Damien-Code
 * @description Een functie waar ik de display property van .sidebar verander in none
 * Dit zorgt ervoor dat de sidebar niet te zien is boven een bepaalde schermgrootte
 */
function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none';
}


// Rock paper scissors
// Een functie waar ik de input naar kleine letters verander, zodat het spel daar niet op kan vastlopen.
const getUserChoice = userInput => {
    userInput = userInput.toLowerCase();
    if (userInput === 'rock' || userInput === 'paper' || userInput === 'scissors' || userInput === 'bomb') {
        return userInput;
    } else {
        console.log('Error');
    }
}

// Een functie waar ik een random nummer koppel aan een bepaalde waarde. van 0 tot 2.
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

// Een nieuwe functie met vorige variabelen als parameters.
// Hier heb ik de opties gemaakt wanneer de computer zou winnen en wanneer user wint.
// Eerst had ik veel else if statements, maar Mischa heeft mij geholpen deze in te korten.
function determineWinner(userChoice, computerChoice) {
    if (userChoice == undefined) {
        return "error";
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

// Hier call ik de functie om het spel te spelen.
// De button heeft een onclick met deze functie

playGame();

// Een functie waar ik de inputs van het spel laat zien op de website.
// userChoice stel ik gelijk aan de functie getUserChoice met parameter X.
// Het resultaat wil ik in een div laten zien. Die heeft een ID van result.
// Daarna zeg ik wat er in moet komen te staan.
// Hetzelfde doe ik met de computerChoice en de functie met wie de winnaar is.
function playGame() {
    let x = document.getElementById('input').value;
    let userChoice = getUserChoice(x);
    let result = document.getElementById('result')
    result.innerText = `your choice: ${userChoice}\n`;
    let computerChoice = getComputerChoice();
    result.innerText += `computers choice: ${computerChoice}\n`;
    result.innerText += `result: ${determineWinner(userChoice, computerChoice)}`
}
