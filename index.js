let bottomLinks = document.getElementById("bottomLinkContainer");
let threeBar = document.getElementById("threebar");
let crossBtn = document.getElementById("cross");
let time = document.getElementById("time");
let date = document.getElementById("date");
let date2 = document.getElementById("date2");
let date2_1 = document.getElementById("date2_1");
let wishText = document.getElementById("wishText");

let typingTimerEl = document.getElementById("typingTimer");
let typingResultEl = document.getElementById("typingResult");
let typingRandomQuoteEl = document.getElementById("typingQuote");
let typingSpinnerEl = document.getElementById("typingSpinner");
let typingSubmitButton = document.getElementById("typingSubmitBtn");
let typingStartButton = document.getElementById("typingStartBtn");
let typingResetButton = document.getElementById("typingResetBtn");
let typingInputText = document.getElementById("typingQuoteInput");
let typingCounter = 0;
let typingIntervalId;
typingResultEl.textContent = "";

let resultContainerWikipedia = document.getElementById("searchResultsWikipedia");
let userInputWikipedia = document.getElementById("searchInputWikipedia");
let spinnerWikipedia = document.getElementById("spinnerWikipedia");

let bookSearchInputEl = document.getElementById("searchInputBook");
let bookSearchResultCon = document.getElementById("bookSearchResults");
let bookSearchNoResultEl = document.getElementById("bookSearchNoResult");
let bookSearchResultHeadingEl = document.getElementById("bookSearchResultHeading");
let spinnerBook = document.getElementById("spinnerBookSearch");

function timething() {
    let datetime = new Date();
    let month = datetime.getMonth() + 1;
    let hour = datetime.getHours();
    let minutes = datetime.getMinutes();
    let ampm = "";
    let wish = "";

    if (minutes <= 9) {
        minutes = "0" + minutes;
    }

    if (hour >= 12) {
        hour = hour - 12;
        ampm = "PM";
    } else {
        ampm = "AM";
    }

    if (ampm === "AM") {
        wish = "Good Morning, Have a Good Day Ahead";
    } else {
        if (hour <5) {
            wish = "Good Afternoon , Enjoy your Lovely Day";
        } else if (hour <= 8 && hour >= 5) {
            wish = "Good Evening , Hope for Best !";
        } else {
            wish = "Good Night, Sweet Dreams";
        }
    }
    //time.textContent = hour + ":" + minutes + " "+  ampm;
    date.textContent = datetime.getDate() + "/" + month + "/" + datetime.getFullYear();
    date2.textContent = datetime.getDate() + "/" + month + "/" + datetime.getFullYear();
    date2_1.textContent = datetime.getDate() + "/" + month + "/" + datetime.getFullYear();
    wishText.textContent = wish;
}
timething();

function extendNavbar() {
    threeBar.classList.toggle("nodisplay");
    crossBtn.classList.toggle("nodisplay");
    bottomLinks.classList.toggle("nodisplay");
    bottomLinks.classList.toggle("navlinkSmallCon");
}

threeBar.addEventListener("click", extendNavbar);
crossBtn.addEventListener("click", extendNavbar);


function counterNewText() {
    typingIntervalId = setInterval(function () {
        typingTimerEl.textContent = typingCounter;
        typingCounter += 1;
    }, 1000);
}

function getRandomQuote() {
    typingSpinnerEl.classList.remove("d-none");
    typingRandomQuoteEl.classList.add("d-none");

    let options = {
        method: "GET"
    };

    fetch("https://apis.ccbp.in/random-quote", options)
        .then(function (response) {
            return response.json();
        })
        .then(function (jsonData) {
            typingSpinnerEl.classList.add("d-none");
            typingRandomQuoteEl.classList.remove("d-none");
            typingRandomQuoteEl.textContent = jsonData.content;
        });
}
getRandomQuote();

typingResetButton.addEventListener("click", function (event) {
    typingInputText.value = "";
    clearInterval(typingIntervalId);
    typingCounter = 0;
    typingTimerEl.textContent = typingCounter;
    getRandomQuote();
    typingStartButton.classList.remove("d-none");
    typingResultEl.textContent = "";

});
typingSubmitButton.addEventListener("click", function (event) {
    if (typingRandomQuoteEl.textContent === typingInputText.value) {
        clearInterval(typingIntervalId);
        typingResultEl.textContent = "You typed in " + typingCounter + " seconds";
        typingInputText.value = "";
        typingCounter = 0;
        typingTimerEl.textContent = typingCounter;
        getRandomQuote();
        typingStartButton.classList.remove("d-none");
    } else {
        typingResultEl.textContent = "You typed incorrect sentence";
    } 
});

typingStartButton.addEventListener("click", function () {
    counterNewText();
    typingStartButton.classList.add("d-none");
    typingResultEl.textContent = "";
});


function showResultsWikipedia(result) {
    let {
        link,
        title,
        description
    } = result;

    let resultItem = document.createElement("div");
    resultItem.classList.add("result-item");
    resultContainerWikipedia.appendChild(resultItem);

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


function displayResultsWikipedia(searchResults) {
    spinnerWikipedia.classList.add("d-none");
    for (let result of searchResults) {
        showResultsWikipedia(result);
    }
}

userInputWikipedia.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        let inputValueWikipedia = userInputWikipedia.value;
        userInputWikipedia.value = "";
        resultContainerWikipedia.textContent = "";
        spinnerWikipedia.classList.remove("d-none");
        let url = "https://apis.ccbp.in/wiki-search?search=" + inputValueWikipedia ;
        let options = {
            method: "GET"
        };
        fetch(url, options)
            .then(function (response) {
                return response.json();
            })
            .then(function (jsonData) {
                let {
                    search_results
                } = jsonData;
                displayResultsWikipedia(search_results);
            });
    }
});


function createAndAppendResult(results) {
    spinnerBook.classList.add("d-none");
    if (results.length === 0) {
        bookSearchNoResultEl.classList.remove("d-none");
        bookSearchResultHeadingEl.classList.add("d-none");
        bookSearchResultCon.textContent = "";
    } else {
        bookSearchNoResultEl.classList.add("d-none");
        bookSearchResultHeadingEl.classList.remove("d-none");
        for (let result of results) {
            let colEl = document.createElement("div");
            colEl.classList.add("bookCon");
            bookSearchResultCon.appendChild(colEl);
            let imgEl = document.createElement("img");
            imgEl.src = result.imageLink;
            imgEl.classList.add("bookImage");
            colEl.appendChild(imgEl);
            let authorEl = document.createElement("p");
            authorEl.textContent = result.author;
            authorEl.classList.add("authorText");
            colEl.appendChild(authorEl);
        }
    }
}

function searchBookAdd() {
    let inputValueBook = bookSearchInputEl.value.toLowerCase();
    bookSearchNoResultEl.classList.add("d-none");
    bookSearchResultHeadingEl.classList.add("d-none");
    bookSearchResultCon.textContent = "";
    spinnerBook.classList.remove("d-none");
    let options = {
        method: "GET"
    };
    fetch("https://apis.ccbp.in/book-store?" + "title=" + inputValueBook, options)
        .then(function (response) {
            return response.json();
        })
        .then(function (jsonData) {
            let searchResult = jsonData.search_results;
            let filteredResult = searchResult.filter(
                (searchResult) => searchResult.title.toLowerCase().includes(inputValueBook));
            createAndAppendResult(filteredResult);
        });
}
searchBookAdd();

function searchBookResults() {
    if (event.key === "Enter") {
        searchBookAdd();
    }
}

bookSearchInputEl.addEventListener("keydown", searchBookResults);
bookSearchInputEl.addEventListener("blur", searchBookAdd);


let wordCloud = ["Hello", "how", "what", "word", "cloud", "name", "victory","hii", "food", "lovely", "beautiful", "written", "where", "awesome"];

let wordsaddButton = document.getElementById("wordsaddBtn");
let wordsinputValue = document.getElementById("wordsUserInput");
let wordserrorMessage = document.getElementById("wordserrorMsg");
let wordsContainerEl = document.getElementById("wordsContainer");

wordsaddButton.onclick = function () {
    if (wordsinputValue.value === "") {
        wordserrorMessage.textContent = "Please enter a word !!";
    } else {
        wordserrorMessage.textContent = "";
        addWordToCloud(wordsinputValue.value);
        wordsinputValue.value = "";
    }
}

function addWordToCloud(words) {
    let word = document.createElement("span");
    let fontSize = (Math.ceil(Math.random() * 50));
    word.textContent = words;
    word.style.fontSize = fontSize + "px";
    word.classList.add("word_style");
    wordsContainerEl.appendChild(word);
}
for (let words of wordCloud) {
    addWordToCloud(words);
}



let jokeButtonEl = document.getElementById("jokeBtn");
let jokeTextEl = document.getElementById("jokeText");
let spinnerjoke = document.getElementById("spinnerJoke");

jokeButtonEl.onclick = function () {
    spinnerJoke.classList.remove("d-none");
    jokeTextEl.classList.add("d-none");
    let options = {
        method: "GET"
    };

    fetch("https://apis.ccbp.in/jokes/random", options)
        .then(function (response) {
            return response.json();
        })
        .then(function (jsonData) {
            spinnerJoke.classList.add("d-none");
            jokeTextEl.classList.remove("d-none");
            jokeTextEl.textContent = jsonData.value;
        });
}


let userInputFacts = document.getElementById("userInputFacts");
let numberFactEl = document.getElementById("numberFact");
let spinnerFacts = document.getElementById("spinnerFacts");

function showOutputFacts(event) {
    if (event.key === "Enter") {
        if (userInputFacts.value === "") {
            alert("please enter a number");
        } else {
            fetchResultFacts();
        }
    }
}

function fetchResultFacts() {
    let url = "https://apis.ccbp.in/numbers-fact?number=" + userInputFacts.value;
    let options = {
        method: "GET"
    };
    numberFactEl.textContent = "";
    spinnerFacts.classList.remove("d-none");

    fetch(url, options)
        .then(function (response) {
            return response.json();
        })
        .then(function (jsonData) {
            spinnerFacts.classList.add("d-none");
            numberFactEl.textContent = jsonData.fact;
        });

}
userInputFacts.addEventListener("keydown", showOutputFacts);
userInputFacts.addEventListener("blur", fetchResultFacts);