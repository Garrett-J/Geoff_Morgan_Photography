function toggleNav() {
    let navMobile = document.getElementsByClassName("menu-nav__item");
    for (var i=0; i<navMobile.length; i++) {
    navMobile[i].classList.toggle("open");
    console.log("hi");
    }
};
