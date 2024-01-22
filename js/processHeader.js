function page_cart() {
    location.assign("http://localhost/tnat/cart.php");
}
// --------------------------------------------------------
const header = document.querySelector("header")
window.addEventListener("scroll", function () {
    x = window.pageYOffset;
    console.log(x)
    if (x > 0) {
        header.classList.add("sticky")
    } else {
        header.classList.remove("sticky")
    }
})