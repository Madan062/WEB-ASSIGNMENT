$(document).ready(function () {

  $("#regForm").on("submit", function (e) {
    let isValid = true;
    $("#error-msg").text("");

    $("input, textarea, select").removeClass("error");
    $(".field-error").text("");

    const name = $("#name").val().trim();
    const email = $("#email").val().trim();

    if (name === "") {
      setFieldError("#name", "Please enter your full name.");
      isValid = false;
    }

    if (email === "") {
      setFieldError("#email", "Please enter your email address.");
      isValid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
      setFieldError("#email", "Please enter a valid email address.");
      isValid = false;
    }

    if (!isValid) {
      e.preventDefault();
      $("#error-msg").text("Please correct the highlighted fields and try again.");
    }
  });

  function setFieldError(selector, message) {
    const input = $(selector);
    input.addClass("error");
    input.closest(".form-group").find(".field-error").text(message);
  }

});
