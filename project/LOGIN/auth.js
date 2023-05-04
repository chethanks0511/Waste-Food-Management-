function auth(event) {
    event.preventDefault();
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    console.log(email);
    console.log(password);

    if (email == "chethankrishna0511@gmail.com" && password == "chethan123") {
        window.location.replace("./admin.php");
    } else {
        alert("Invalid information");
    }

}
