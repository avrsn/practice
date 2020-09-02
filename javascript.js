
function $(x) {
    return document.getElementById(x);
}


image_tracker = "tiger";
function change() {
    let pic = $("picture");

    

    if (image_tracker=="tiger") {
        pic.src = "rose-tattoos-20180325_171114_22.jpg";
        image_tracker = "rose";
    } else if (image_tracker=="rose") {
        pic.src = "tattoo-masters-flash-collection-part1_6_web.jpg";
        image_tracker = "tiger";
    }
}





function getInfo() {

   
    let logins = [];

    logins.push(["Lucy", "Lu"]);
    logins.push(["Donald", "Duck"]);
    logins.push(["Cory", "Walker"]);


    let username = $("username").value;
    let password = $("password").value;
    let loginFailureMessage = "Sorry, your First and Last name cannot be found.";
    let loginFailure = true;

    console.log("Your username is: " + username + "\n" + "Your password is: " + password + "\n");
    
    for (let i = 0; i < logins.length; i++) {
        
        if (logins[i][0] == username) {
          if (logins[i][1] == password) {
              console.log("Login found.");
              loginFailure = false;
          }
        }
    }

    if (loginFailure == true) {
        console.log(loginFailureMessage);
    }
}