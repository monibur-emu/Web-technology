const cells = document.querySelectorAll(".cell");
const statusText = document.getElementById("status");
const resetBtn = document.getElementById("reset");

let currentPlayer = "X";
let board = ["", "", "", "", "", "", "", "", ""];
let gameActive = true;

const winPatterns = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

cells.forEach((cell, index) => {
    cell.addEventListener("click", function () {
        if (board[index] !== "" || !gameActive) {
            return;
        }

        board[index] = currentPlayer;
        cell.textContent = currentPlayer;

        checkWinner();
    });
});

function checkWinner() {

    let winner = false;

    winPatterns.forEach(pattern => {

        let a = board[pattern[0]];
        let b = board[pattern[1]];
        let c = board[pattern[2]];

        if (a && a === b && b === c) {
            winner = true;

            cells[pattern[0]].classList.add("win");
            cells[pattern[1]].classList.add("win");
            cells[pattern[2]].classList.add("win");
        }
    });

    if (winner) {
        statusText.textContent = "Winner: " + currentPlayer;
        gameActive = false;
        return;
    }

    if (!board.includes("")) {
        statusText.textContent = "It's a Draw!";
        gameActive = false;
        return;
    }
    if (currentPlayer === "X") {
        currentPlayer = "O";
    }
    else {
        currentPlayer = "X";
    }

    statusText.textContent = "Current Player: " + currentPlayer;
}

resetBtn.addEventListener("click", function () {

    board = ["", "", "", "", "", "", "", "", ""];
    gameActive = true;
    currentPlayer = "X";

    cells.forEach(cell => {
        cell.textContent = "";
        cell.classList.remove("win");
    });

    statusText.textContent = "Current Player: X";
});