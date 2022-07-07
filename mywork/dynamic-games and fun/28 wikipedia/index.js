let resultContainer = document.getElementById("searchResults");
let userInput = document.getElementById("searchInput");
let spinner = document.getElementById("spinner");

function showResults(result) {
    let {
        link,
        title,
        description
    } = result;

    let resultItem = document.createElement("div");
    resultItem.classList.add("result-item");
    resultContainer.appendChild(resultItem);

    let titleEl = document.createElement("a");
    titleEl.href = link;
    titleEl.target = "_blank";
    titleEl.textContent = title;
    titleEl.classList.add("result-title");
    resultItem.appendChild(titleEl);

    let titleBreak = document.createElement("br");
    resultItem.appendChild(titleBreak);

    let urlEl = document.createElement("a");
    urlEl.classList.add("result-url");
    urlEl.href = link;
    urlEl.target = "_blank";
    urlEl.textContent = link;
    resultItem.appendChild(urlEl);

    let linkBreak = document.createElement("br");
    resultItem.appendChild(linkBreak);

    let descriptionEl = document.createElement("p");
    descriptionEl.classList.add("link-description");
    descriptionEl.textContent = description;
    resultItem.appendChild(descriptionEl);



}


function displayResults(searchResults) {
    spinner.classList.add("d-none");
    for (let result of searchResults) {
        showResults(result);
    }
}

userInput.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        let inputValue = userInput.value;
        userInput.value = "";
        resultContainer.textContent = "";
        spinner.classList.remove("d-none");
        let url = "https://apis.ccbp.in/wiki-search?search=" + inputValue;
        let options = {
            method: "GET"
        };
        fetch(url, options)
            .then(function(response) {
                return response.json();
            })
            .then(function(jsonData) {
                let {
                    search_results
                } = jsonData;
                displayResults(search_results);
            });
    }
});