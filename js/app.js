$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 33) {
      $("header .navbar").addClass("nav-fixed");
    } else {
      $("header .navbar").removeClass("nav-fixed");
    }
  });

  $(".navbar .toggler").click(function (event) {
    if (!event.detail || event.detail == 1) {
      //activate on first click only to avoid hiding again on double clicks
      $(".navbar").toggleClass("navbar-show-mobile");
      $(this).toggleClass("change");
      $("body, html").toggleClass("overlay");
      $(".navbar-collapse").toggleClass("show");
    }
    return false;
  });

  // when click in anywhere in document close the navbar menu and clear the overlay from the body
  $("body").on("click", function (e) {
    var $currEl = $(e.currentTarget);
    if (!$currEl.is(".navbar") && !$currEl.closest(".navbar").length) {
      $(".navbar .toggler").removeClass("change");
      $("html,body").removeClass("overlay");
      $(".navbar-collapse").removeClass("show");
      $(".navbar").removeClass("navbar-show-mobile");
    }
  });
  // stop propagation (closing navbar when click inside it) when click on navbar when the menu open in mobile screen
  $(".navbar").on("click", function (e) {
    e.stopPropagation();
  });

  $(".faq .dropdown-menu li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
    $(".tab-content > div").hide();
    $(".faq .dropdown .btn").text($(this).text());
    $($(this).data("content")).fadeIn();
  });

  document.querySelectorAll("input").forEach((input) => {
    input.addEventListener("keyup", function () {
      this.classList.toggle("blue", this.value.length > 0);
    });
  });

  var inputEmail = $("#emailInput");
  // function to validate the email
  function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
  }

  var emailError = true;
  var messageError = true;
  var fullNameError = true;
  var companyError = true;
  var phoneError = true;
  var businessError = true;

  inputEmail.on("blur", function () {
    if (!validateEmail(inputEmail.val()) || inputEmail.val() == "") {
      $(this).parent(".input-group").find(".custom-alert").fadeIn();
      $(this).css("border", "1px solid rgba(245, 117, 45, 0.6)");

      emailError = true;
    } else {
      $(this).parent(".input-group").find(".custom-alert").fadeOut();
      $(this).css("border", "1px solid rgba(45, 95, 245, 0.6)");
      emailError = false;
    }
  });

  // validation for the textarea
  $("textarea#msg").on("blur", function () {
    if ($(this).val() == "") {
      $(this).parent(".input-group").find(".custom-alert").fadeIn();
      $(this).css("border", "1px solid rgba(245, 117, 45, 0.6)");
      messageError = true;
    } else {
      $(this).parent(".input-group").find(".custom-alert").fadeOut();
      $(this).css("border", "1px solid rgba(45, 95, 245, 0.6)");
      messageError = false;
    }
  });

  // validation for the full name
  $("#fullName").on("blur", function () {
    if ($(this).val() == "") {
      $(this).parent(".input-group").find(".custom-alert").fadeIn();
      $(this).css("border", "1px solid rgba(245, 117, 45, 0.6)");
      fullNameError = true;
    } else {
      $(this).parent(".input-group").find(".custom-alert").fadeOut();
      $(this).css("border", "1px solid rgba(45, 95, 245, 0.6)");
      fullNameError = false;
    }
  });
  // validation for the company
  $("#company").on("blur", function () {
    if ($(this).val() == "") {
      $(this).parent(".input-group").find(".custom-alert").fadeIn();
      $(this).css("border", "1px solid rgba(245, 117, 45, 0.6)");
      companyError = true;
    } else {
      $(this).parent(".input-group").find(".custom-alert").fadeOut();
      $(this).css("border", "1px solid rgba(45, 95, 245, 0.6)");
      companyError = false;
    }
  });
  // validation for the phone
  $("#phone").on("blur", function () {
    if ($(this).val() == "") {
      $(this).parent(".input-group").find(".custom-alert").fadeIn();
      $(this).css("border", "1px solid rgba(245, 117, 45, 0.6)");
      phoneError = true;
    } else {
      $(this).parent(".input-group").find(".custom-alert").fadeOut();
      $(this).css("border", "1px solid rgba(45, 95, 245, 0.6)");
      phoneError = false;
    }
  });
  // validation for the business
  $("#business").on("blur", function () {
    if ($(this).val() == "") {
      $(this).parent(".input-group").find(".custom-alert").fadeIn();
      $(this).css("border", "1px solid rgba(245, 117, 45, 0.6)");
      businessError = true;
    } else {
      $(this).parent(".input-group").find(".custom-alert").fadeOut();
      $(this).css("border", "1px solid rgba(45, 95, 245, 0.6)");
      businessError = false;
    }
  });

  // submit form
  $(".contact-form").on("submit", function (e) {
    if (
      emailError == true ||
      messageError == true ||
      fullNameError == true ||
      companyError == true ||
      phoneError == true ||
      businessError == true
    ) {
      e.preventDefault();
      $("#emailInput, #msg, #company, #fullName, #phone, #business").blur();
    }
  });
  // smoothly scroll to element
  $(".navbar li a, a[data-scroll='contact']").click(function (e) {
    e.preventDefault();
    $(this).data("scroll");
    $("html, body").animate(
      {
        scrollTop: $("#" + $(this).data("scroll")).offset().top - 100
      },
      1000
    );
  });
});
