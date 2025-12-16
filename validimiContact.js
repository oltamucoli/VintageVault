function validateContact(event) {
    event.preventDefault();

    var name = document.getElementById('contact-name');
    var email = document.getElementById('contact-email');
    var phone = document.getElementById('contact-phone');
    var msg = document.getElementById('contact-msg');

    if (name.value === "") {
        alert("Please add your name.");
        name.focus();
        return false;
    }

    if (email.value === "") {
        alert("Please add your email.");
        email.focus();
        return false;
    }

    if (!emailValid(email.value)) {
        alert("Email is not valid.");
        email.focus();
        return false;
    }

    if (phone.value === "") {
        alert("Please add your phone number.");
        phone.focus();
        return false;
    }

    if (!phoneValid(phone.value)) {
        alert("Phone number must be 7-15 digits, numbers only.");
        phone.focus();
        return false;
    }

    if (msg.value === "") {
        alert("Please write a message.");
        msg.focus();
        return false;
    }

    if (msg.value.length < 10) {
        alert("Message must be at least 10 characters.");
        msg.focus();
        return false;
    }

    if (msg.value.length > 300) {
        alert("Message cannot exceed 300 characters.");
        msg.focus();
        return false;
    }

    alert("Message sent successfully!");
    return true;
}

document.getElementById('contact-btn').addEventListener('click', validateContact);
function emailValid(email) {
    var emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    return emailRegex.test(email.toLowerCase());
}
function phoneValid(phone) {
    var phoneRegex = /^[0-9]{7,15}$/;
    return phoneRegex.test(phone);
}