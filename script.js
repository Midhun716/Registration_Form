document.getElementById("registrationForm").addEventListener("submit", function(event) {
    const fullname = document.getElementById("fullname").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    
    if (fullname === "" || email === "" || phone === "") {
        alert("Please fill out all the fields.");
        event.preventDefault();
    }
});
