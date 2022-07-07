let bottomLinks = document.getElementById("bottomLinkContainer");
let threeBar = document.getElementById("threebar");
let crossBtn = document.getElementById("cross")


function extendNavbar() {
    threeBar.classList.toggle("nodisplay");
    crossBtn.classList.toggle("nodisplay");
    bottomLinks.classList.toggle("nodisplay");
    bottomLinks.classList.toggle("navlinkSmallCon");
}
threeBar.addEventListener("click", extendNavbar);
crossBtn.addEventListener("click", extendNavbar);