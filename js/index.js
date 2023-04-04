function open_hamburger() {
    document.querySelector(".phone_view_unorderlist").style.display = "block";
    document.querySelector(".hamburger_bar_icon").style.display = "none";
    document.querySelector(".close_hamburger_icon").style.display = "block";
}

function close_hamburger(){
    document.querySelector(".phone_view_unorderlist").style.display = "none";
    document.querySelector(".hamburger_bar_icon").style.display = "block";
    document.querySelector(".close_hamburger_icon").style.display = "none";
}

document.body.addEventListener('scroll', function() {
    // console.log(';{};');
    console.log("this is my")
} );

window.addEventListener("scroll", () => {
    if(window.scrollY > 0){
        document.querySelector(".desktop_view_navbar").style.background = "#2F4F4F"
    }
    else{
        document.querySelector(".desktop_view_navbar").style.background = "transparent"
    }
})