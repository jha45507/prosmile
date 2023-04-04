function open_hamburger() {
    document.querySelector(".phone_view_unorderlist").style.display = "block";
    document.querySelector(".hamburger_bar_icon").style.display = "none";
    document.querySelector(".close_hamburger_icon").style.display = "block";
}

function close_hamburger() {
    document.querySelector(".phone_view_unorderlist").style.display = "none";
    document.querySelector(".hamburger_bar_icon").style.display = "block";
    document.querySelector(".close_hamburger_icon").style.display = "none";
}

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        document.querySelector(".desktop_view_navbar").style.background = "rgb(44 73 73)"
    }
    else {
        document.querySelector(".desktop_view_navbar").style.background = "transparent"
    }
})

$(".phone-view-navigation-item").click(function(){
    if (document.querySelector(".phone_view_unorderlist").style.display = "block") {
        document.querySelector(".phone_view_unorderlist").style.display = "none";
        document.querySelector(".hamburger_bar_icon").style.display = "block";
        document.querySelector(".close_hamburger_icon").style.display = "none";
    }
});