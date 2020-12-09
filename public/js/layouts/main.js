
function menuSlider()
{
    const dropdown_nav = document.querySelector('.dropdown-nav');
    let nav_display = dropdown_nav.style.display;

    if(nav_display == "flex")
        dropdown_nav.style.display = "none";
    else    
        dropdown_nav.style.display = "flex";
}