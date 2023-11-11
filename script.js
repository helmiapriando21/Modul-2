document.addEventListener("DOMContentLoaded", function () {
    const board = document.getElementById("board");
    const cells = board.querySelectorAll(".cell");
    const status = document.getElementById("status");
    const resetButton = document.getElementById("reset");
    const toggleDarkModeButton = document.getElementById("toggleDarkMode");
    let currentPlayer = "X";
    let gameBoard = ["", "", "", "", "", "", "", "", ""];
    let isGameOver = false;
  
function checkGameOver() {
    for (let i = 0; i < 8; i++) {
      const winCombo = WINNING_COMBINATIONS[i];
      const a = gameBoard[winCombo[0]];
      const b = gameBoard[winCombo[1]];
      const c = gameBoard[winCombo[2]];
  
      if (a === "" || b === "" || c === "") {
        continue;
      }
  
      if (a === b && b === c) {
        isGameOver = true;
        if (a === "O") {
          status.textContent = "O wins!";
        } else if (a === "X") {
          status.textContent = "X wins!";
        }
        break;
      }
    }
  
    if (!gameBoard.includes("") && !isGameOver) {
      isGameOver = true;
      status.textContent = "It's a draw!";
    }
  }
  
    function handleCellClick(event) {
      const cell = event.target;
      const index = cell.getAttribute("data-index");
  
      if (gameBoard[index] === "" && !isGameOver) {
        gameBoard[index] = currentPlayer;
        cell.textContent = currentPlayer;
        cell.classList.add(currentPlayer);
        currentPlayer = currentPlayer === "X" ? "O" : "X";
        checkGameOver();
      }
    }
  
    function resetGame() {
      gameBoard = ["", "", "", "", "", "", "", "", ""];
      cells.forEach((cell) => {
        cell.textContent = "";
        cell.classList.remove("X", "O");
      });
      currentPlayer = "X";
      isGameOver = false;
      status.textContent = "";
    }

    cells.forEach((cell) => {
      cell.addEventListener("click", handleCellClick);
    });
  
    resetButton.addEventListener("click", resetGame);
  
    toggleDarkModeButton.addEventListener("click", () => {
      document.body.classList.toggle("dark-mode");
    });
  
    const WINNING_COMBINATIONS = [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8],
      [0, 4, 8],
      [2, 4, 6],
    ];
  });