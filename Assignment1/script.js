
// jQuery code for theme toggle and simple card animation
$(document).ready(function () {
  // Toggle dark / light theme
  $("#toggle-theme-btn").on("click", function () {
    $("body").toggleClass("dark");
  });

  // Fade-in animation for cards
  $(".card").each(function (index) {
    const card = $(this);
    setTimeout(function () {
      card.addClass("visible");
    }, 150 * index); // staggered delay
  });
});
