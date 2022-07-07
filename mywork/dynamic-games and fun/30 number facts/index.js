let userInput = document.getElementById("userInput");
let fact = document.getElementById("fact");
let spinner = document.getElementById("spinner");

userInput.addEventListener("keydown", showOutput);

function showOutput(event) {
    if (event.key === "Enter") {
        if (userInput.value === "") {
            alert("please enter a number");
        } else {
            fetchResult();
        }
    }
}

function fetchResult() {
    let url = "https://apis.ccbp.in/numbers-fact?number=" + userInput.value;
    let options = {
        method: "GET"
    };
    fact.textContent = "";
    spinner.classList.remove("d-none");

    fetch(url, options)
        .then(function(response) {
            return response.json();
        })
        .then(function(jsonData) {
            spinner.classList.add("d-none");
            fact.textContent = jsonData.fact;
        });

}