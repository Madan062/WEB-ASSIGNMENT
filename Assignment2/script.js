$(document).ready(function () {

    $("#regForm").submit(function () {

        let phone = $("input[name='phone']").val();
        let regPhone = /^[0-9]{10}$/;

        if (!regPhone.test(phone)) {
            alert("Phone number must be 10 digits.");
            return false;
        }

        alert("Form submitted successfully!");
        return true;  
    });

});
