let wordCloud = ["Hello", "hii", "how", "what", "you", "yourself", "name", "victory", "food", "lovely", "beautiful", "written", "where", "who", "awesome"];

let addButton = document.getElementById("addBtn");
let inputValue = document.getElementById("userInput");
let errorMessage = document.getElementById("errorMsg");
let container = document.getElementById("wordsContainer");

addButton.onclick = function() {
    if (inputValue.value === "") {
        errorMessage.textContent = "please enter a word";
    } else {
        errorMessage.textContent = "";
        addWord(inputValue.value);
        inputValue.value = "";

    }
}

function addWord(words) {
    let word = document.createElement("span");
    let fontSize = (Math.ceil(Math.random() * 60));
    word.textContent = words;
    word.style.fontSize = fontSize + "px";
    word.classList.add("word_style");
    container.appendChild(word);
}
for (let words of wordCloud) {
    addWord(words);
}