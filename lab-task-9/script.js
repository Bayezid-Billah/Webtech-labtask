function addtocart(food, quantity) {
    let item = [food, quantity];
    // file_put_contents("data.json", json_encode(item));
    const myObj = { name: "John", age: 31, city: "New York" };
    const myJSON = JSON.stringify(myObj);
    localStorage.setItem("testJSON", myJSON);

}

// function nameValidation() {
//     if (document.getElementById("u-name").value === "") {
//         document.getElementById("unameErr").innerHTML = "Username can't be blank";
//         document.getElementById("u-name").style.outlineColor = "red";
//     } else if (document.getElementById("u-name").value.length <= 2) {
//         document.getElementById("unameErr").innerHTML = "Username must have at least 2 characters";
//         document.getElementById("u-name").style.outlineColor = "red";
//     } else {
//         document.getElementById("unameErr").innerHTML = "";
//         document.getElementById("name").style.borderColor = "black";

//     }


//     function passwordValidation() {
//         if (document.getElementById("password").value == "") {
//             document.getElementById("passErr").innerHTML = "Password can't be blank";
//             document.getElementById("password").style.borderColor = "red";
//         } else {
//             document.getElementById("unameErr").innerHTML = "";
//             document.getElementById("name").style.borderColor = "black";

//         }
//     }
// }