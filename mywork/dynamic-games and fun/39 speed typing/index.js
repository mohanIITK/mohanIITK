let timerEl = document.getElementById("timer2");
let resultEl = document.getElementById("result");
let displayEl = document.getElementById("quoteDisplay");
let spinnerEl = document.getElementById("spinner");
let submitButton = document.getElementById("submitBtn");
let startButton = document.getElementById("startBtn");
let resetButton = document.getElementById("resetBtn");
let inputText = document.getElementById("quoteInput");

let counter = 0;
let intervalId;
resultEl.textContent = "";

function counterNewText() {
    intervalId = setInterval(function() {
        timerEl.textContent = counter;
        counter += 1;
    }, 1000);
}

function getRandom() {
    spinnerEl.classList.remove("d-none");
    displayEl.classList.add("d-none");

    let options = {
        method: "GET"
    };

    fetch("https://apis.ccbp.in/random-quote", options)
        .then(function(response) {
            return response.json();
        })
        .then(function(jsonData) {
            spinnerEl.classList.add("d-none");
            displayEl.classList.remove("d-none");
            displayEl.textContent = jsonData.content;
        });
}
getRandom();

resetButton.addEventListener("click", function(event) {
    inputText.value = "";
    clearInterval(intervalId);
    counter = 0;
    timerEl.textContent = counter;
    getRandom();
    startButton.classList.remove("d-none"); 
    resultEl.textContent = "";

});
submitButton.addEventListener("click", function(event) {
    if (displayEl.textContent === inputText.value) {
        clearInterval(intervalId);
        resultEl.textContent = "You typed in " + counter + " seconds";
        inputText.value = "";
        clearInterval(intervalId);
        counter = 0;
        timerEl.textContent = counter;
        getRandom();
        startButton.classList.remove("d-none");
    } else {
        resultEl.textContent = "You typed incorrect sentence";
    }
});
startButton.addEventListener("click", function () {
    counterNewText();
    startButton.classList.add("d-none");
});
    