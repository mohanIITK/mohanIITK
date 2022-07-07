let inputSearchEl = document.getElementById("searchInput");
let resultCon = document.getElementById("searchResults");
let noResultEl = document.getElementById("noResult");
let resultHeadingEl = document.getElementById("resultHeading");
let spinner = document.getElementById("spinner");

function searchResults() {
    if (event.key === "Enter") {
        add();
    }
}

function createAndAppendResult(results) {
    spinner.classList.add("d-none");
    if (results.length === 0) {
        noResultEl.classList.remove("d-none");
        resultHeadingEl.classList.add("d-none");
        resultCon.textContent = "";
    } else {
        noResultEl.classList.add("d-none");
        resultHeadingEl.classList.remove("d-none");
        for (let result of results) {
            let colEl = document.createElement("div");
            colEl.classList.add("bookCon", "mt-3", "mb-3");
            resultCon.appendChild(colEl);
            let imgEl = document.createElement("img");
            imgEl.src = result.imageLink;
            imgEl.classList.add("bookImage", "mb-3");
            colEl.appendChild(imgEl);
            let authorEl = document.createElement("p");
            authorEl.textContent = result.author;
            authorEl.style.fontSize = "20px";
            authorEl.style.color = "#323f4b";
            colEl.appendChild(authorEl);
        }
    }
}

function add() {
    let inputValue = inputSearchEl.value.toLowerCase();
    noResultEl.classList.add("d-none");
    resultHeadingEl.classList.add("d-none");
    resultCon.textContent = "";
    spinner.classList.remove("d-none");
    let options = {
        method: "GET"
    };
    fetch("https://apis.ccbp.in/book-store?" + "title=" + inputValue, options)
        .then(function(response) {
            return response.json();
        })
        .then(function(jsonData) {
            let searchResult = jsonData.search_results;
            let filteredResult = searchResult.filter(
                (searchResult) => searchResult.title.toLowerCase().includes(inputValue));
            createAndAppendResult(filteredResult);
        });
}
inputSearchEl.addEventListener("keydown", searchResults);
inputSearchEl.addEventListener("blur", add);