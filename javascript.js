
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



function login() {

   
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
              return;
          }
        }
    }

    if (loginFailure == true) {
        console.log(loginFailureMessage);
    }
}


let objPeople = [
    {
        username: "Donald",
        password: "Duck"
    },
    {
        username: "Lucy",
        password: "Lu"
    },
    {
        username: "Cory",
        password: "Walker"
    }
]
function checkRegistration() {
    let registerUsername = $("username").value;
    let registerPassword = $("password").value;
    console.log(objPeople);
    let isValidPassword = false;

    if (registerPassword.length < 8) {
        console.log("Password must be at least 8 characters.");
    } else {
        isValidPassword = true;
    }

    if (isValidPassword) {
        console.log(objPeople.length);
        for ( let i = 0; i < objPeople.length; i++ ) {
            if (objPeople[i].username == registerUsername) { //check if username exists
                console.log("Username already exists. Try another one.");
                return;
            } else { // create a person object with the persons username and password
                let person = {
                    username: registerUsername,
                    password: registerPassword
                }
                
                console.log("Person object: " + person);
                objPeople.push = person; // push the person into the objPeople array
                console.log("Your account has been created"); // let user know their account has been created
                return;
            }
        }

    }
    console.log("hey");
}