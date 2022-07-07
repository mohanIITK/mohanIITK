let jokeButton = document.getElementById("jokeBtn");
let joke = document.getElementById("jokeText");
let spinner = document.getElementById("spinner");
jokeButton.onclick = function() {
    spinner.classList.remove("d-none");
    joke.classList.add("d-none");
    let options = {
        method: "GET"
    };

    fetch("https://apis.ccbp.in/jokes/random", options)
        .then(function(response) {
            return response.json();
        })
        .then(function(jsonData) {
            spinner.classList.add("d-none");
            joke.classList.remove("d-none");
            joke.textContent = jsonData.value;
        });
}