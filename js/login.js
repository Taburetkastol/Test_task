$(".btn-outline-success").click(function(e) {
  e.preventDefault();
  let email = $("#email").val().trim();
  let password = $("#password").val().trim();

   if(email == ""){
    $("#errorMess").text("Введите Email");
    return false;
  } else if(email.indexOf('@') < 0 || email.indexOf('.') < 0 || email.indexOf('.') == email.length - 1){
    $("#email").addClass("text-danger");
    $("#errorMess").text("Некорретный адрес");
    return false;
  } else if(password == ""){
    $("#email").removeClass("text-danger");
    $("#errorMess").text("Введите пароль");
    return false;
  }

  $.ajax({
    type: 'POST',
    url: '../php/checkAuth.php',
    dataType: 'json',
    data: {
      email: email,
      password: password,
    },
    success(data){
      if(data.authorized == false){
        $("#errorMess").text("Пользователя не существует");
      } else if(data.fail == 1){
        $("#errorMess").text("Неверный адрес");
      } else if(data.fail == 2){
        $("#errorMess").text("Неверный адрес");
      } else if(data.fail == 3){
        $("#errorMess").text("Неверный пароль");
      } else {
        document.location.href = "../logged_in.php";
      }
    },
  });

  $("#email").removeClass("text-danger");
  $("#errorMess").text("");

});
