function emailSend() {
    var fullName = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    var messageBody = "Name: " + fullName +
        "<br/> Phone: " + phone +
        "<br/> Email: " + email +
        "<br/> Message: " + message;

    Email.send({
        Host: "smtp.elasticemail.com",
        Username: "wearycrystal123@gmail.com",
        Password: "6DD75319CCFD983195024282576469343891",
        To: "wearycrystal123@gmail.com",
        From: "wearycrystal123@gmail.com",
        Subject: "New Message",
        Body: messageBody
    }).then(
        function (message) {
            if (message === 'OK') {
                swal("Success", "Your message has been sent successfully!", "success");
            } else {
                swal("Error", "An error occurred while sending your message.", "error");
            }
        }
    );
}
