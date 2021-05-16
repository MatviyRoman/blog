$("#exit").click(function(event) {
  event.preventDefault();
  console.log("click #exit");

  $.ajax({
    url: "/ajax/exit",
    type: "POST",
    cache: false,
    data: {},
    dataType: "html",
    // beforeSend: function() {

    // },
    success: function(data) {
      document.location.reload(true);
    }
  });
});

$("#success").click(function() {
  // event.preventDefault();
  $(this)
    .text("You Registration")
    .addClass("success");
  console.log("click #success");
});

$("#reg_user").click(function() {
  const name = $("#username").val();
  const email = $("#email").val();
  const login = $("#login").val();
  const pass = $("#password").val();
  console.log("click #reg_user");

  $.ajax({
    url: "/ajax/reg",
    type: "POST",
    cache: false,
    data: {
      username: name,
      email: email,
      login: login,
      password: pass
    },
    dataType: "html",
    // beforeSend: function() {

    // },
    success: function(data) {
      if (data == "OK") {
        $("#reg_user").show(function() {
          event.preventDefault();
          $(this)
            .text("You Registration")
            .addClass("success")
            .attr("id", "success");
          // .prop("id", "success");
        });
        $("#error").hide();
      } else {
        $("#error").show(function() {
          const $arr = $(this).text(data);
          console.log("error");
          console.log($arr);
        });
      }
    },
    success: toTextContainer
  });
});

$("#auth_user").click(function() {
  const login = $("#login").val();
  const pass = $("#password").val();
  console.log("click #auth_user");

  $.ajax({
    url: "/ajax/auth",
    type: "POST",
    cache: false,
    data: {
      login: login,
      password: pass
    },
    dataType: "html",
    // beforeSend: function() {

    // },
    success: function(data) {
      if (data == "OK") {
        $("#auth_user").show(function() {
          $(this).text("You Authorization");
          $(this).addClass("success");
        });
        $("#error").hide();
        console.log("ok");
        document.location.reload(true);
      } else {
        $("#error").show(function() {
          $(this).text(data);
          console.log("error");
        });
      }
    }
  });
});

$("#blogpost_add").click(function() {
  const title = $("#blogpost_title").val();
  const intro = $("#blogpost_intro").val();
  const text = $("#blogpost_text").val();
  console.log("click #blogpost_add");

  $.ajax({
    url: "/ajax/blogpost_add",
    type: "POST",
    cache: false,
    data: {
      blogpost_title: title,
      blogpost_intro: intro,
      blogpost_text: text
    },
    dataType: "html",
    // beforeSend: function() {

    // },
    success: function(data) {
      if (data == "OK") {
        $("#blogpost_add").show(function() {
          //   event.preventDefault();
          $(this)
            .text("You add blogpost. Thank you.")
            .addClass("success")
            .attr("id", "success");
          // .prop("id", "success");
        });
        $("#error").hide();
      } else {
        $("#error").show(function() {
          $(this).text(data);
          console.log("error");
        });
      }
    }
  });
});

$("#send_email").click(function() {
  const name = $("#name").val();
  const email = $("#email").val();
  const message = $("#message").val();
  console.log("click #send_email");

  $.ajax({
    url: "/ajax/mail",
    type: "POST",
    cache: false,
    data: {
      name: name,
      email: email,
      message: message
    },
    dataType: "html",
    // beforeSend: function() {

    // },
    success: function(data) {
      if (data == "OK") {
        $("#send_email").show(function() {
          event.preventDefault();
          $(this)
            .text("You send message")
            .addClass("success")
            .attr("id", "success");
          // .prop("id", "success");
        });
        $("#name").val("");
        $("#email").val("");
        $("#message").val("");
        $("#error").hide();
      } else {
        $("#error").show(function() {
          $(this).text(data);
          console.log("error");
        });
      }
    }
  });
});
