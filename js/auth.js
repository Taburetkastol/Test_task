$(".btn-outline-success").click(function(e) {
  e.preventDefault();
  let name = $("#name").val().trim();
  let surname = $("#surname").val().trim();
  let email = $("#email").val().trim();
  let password = $("#password").val().trim();
  let confirm = $("#confirm").val().trim();

  if(name == ""){
    $("#errorMess").text("Введите имя");
    return false;
  } else if(surname == ""){
    $("#errorMess").text("Введите фамилию");
    return false;
  } else if(email == ""){
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
  } else if(confirm == ""){
    $("#errorMess").text("Подтвердите пароль");
    return false;
  }  else if(confirm != password){
    $("#errorMess").text("Пароли не совпадают");
    return false;
  }


  $.ajax({
    type: 'POST',
    url: '../php/checkReg.php',
    dataType: 'json',
    data: {
      name: name,
      surname: surname,
      email: email,
      password: password,
      confirm: confirm
    },
    success(data){
      if(data.authorized == true){
        $("#errorMess").text("Пользователь существует");
      } else if(data.fail == 1){
        $("#errorMess").text("Неверный адрес");
      } else if(data.fail == 2){
        $("#errorMess").text("Неверный адрес");
      } else if(data.fail == 3){
        $("#errorMess").text("Пароли не совпадают");
      } else {
        document.location.href = "../logged_in.php";
      }
    },
  });

  $("#email").removeClass("text-danger");
  $("#errorMess").text("");

});
