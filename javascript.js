
image_tracker = "tiger";

function change() {
    let pic = document.getElementById("picture");

    

    if (image_tracker=="tiger") {
        pic.src = "rose-tattoos-20180325_171114_22.jpg";
        image_tracker = "rose";
    } else if (image_tracker=="rose") {
        pic.src = "tattoo-masters-flash-collection-part1_6_web.jpg";
        image_tracker = "tiger";
    }
}
