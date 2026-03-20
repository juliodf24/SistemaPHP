//Obtem o formulário
const form = document.querySelector("#form");
//Obtem os inputs do formulário
const username = document.querySelector("#username");
const telefoneUsu = document.querySelector("#telefone");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const passwordConfirmation = document.querySelector("#password-confirmation");

//  identifica o valor de cada INPUT
document.getElementById("username").value = "José Eduardo ";
document.getElementById("telefone").value = "61 99501-3535";
document.getElementById("email").value = "jose@gmail.com";
document.getElementById("password").value = "12345679";
document.getElementById("password-confirmation").value = password.value;

//Adiciona um evento quando o submit do formulário for clicado e passa uma função
form.addEventListener("submit", (e) => {
  // Não deixa a página ser recarregada quando o evento for acionado
  e.preventDefault();
  //Chama a função que verifica se os campos digitados são válidos
  checkInputs();
});

//Função que verifica se os campos são válidos
function checkInputs() {
  //Obtem os valores dos nos inputs
  const usernameValue = username.value;
  const telefoneUsuValue = telefoneUsu.value;
  const emailValue = email.value;
  const passwordValue = password.value;
  const passwordConfirmationValue = passwordConfirmation.value;

  //Verifica se usuário está válido
  if (usernameValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(username, "O nome de usuário é obrigatório.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(username);
  }

  //Verifica se o telefone está válido
  if (telefoneUsuValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(telefoneUsu, "O telefone é obrigatório.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(telefoneUsu);
  }

  //Verifica se email está válido
  if (emailValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(email, "O email é obrigatório.");
  } else if (!checkEmail(emailValue)) {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(email, "Insira um email válido.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(email);
  }

  //Verifica se a senha está válida
  if (passwordValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(password, "A senha é obrigatória.");
  } else if (passwordValue.length < 7) {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(password, "A senha precisa ter no mínimo 7 caracteres.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(password);
  }

  //Verifica se a confirmação da senha é igual a senha
  if (passwordConfirmationValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(passwordConfirmation, "A confirmação de senha é obrigatória.");
  } else if (passwordConfirmationValue !== passwordValue) {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(passwordConfirmation, "As senhas não conferem.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(passwordConfirmation);
  }

  //Obtem todos os elementos que tem a class .form-control
  const formControls = form.querySelectorAll(".form-control");
  //Coloca o formControls em uma lista, executa o método every para verificar se todos os elementos que tem a class .form-control também tem a class success
  const formIsValid = [...formControls].every((formControl) => {
    return formControl.className === "form-control success";
  });
  //Se o formulário for válido acione o modal
  if (formIsValid) {
    swal({
      icon: "success",
      title: "Cadastro realizado!",
      text: "Parabéns, o seu cadastro foi realizado com sucesso!",
    }).then((value) => {
      if (value) {
        // Limpar os campos do formulário após o envio bem-sucedido
        form.reset();
        // direcionar para index.php
        window.location.href = "perfil.php";
      }
    });
  }
}

// Função de erro
function setErrorFor(input, message) {
  //Obtem o formControl
  const formControl = input.parentElement;
  //Obtem o small
  const small = formControl.querySelector("small");
  //Adicionar a mensagem de erro
  small.innerText = message;
  //Adicionar classe de erro
  formControl.className = "form-control error";
}

function setSuccessFor(input, message) {
  //Obtem o formControl
  const formControl = input.parentElement;
  //Obtem o small
  const small = formControl.querySelector("small");
  //Caso o small tenha algum conteúdo
  if (small !== null) {
    //Retire o conteúdo do small
    small.innerText = "";
  }
  //Adicionar a classe de sucesso
  formControl.className = "form-control success";
}

// Função para verificar se o email é válido
function checkEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

// NÃO PODE NUMERO NO CAMPO DE NOME
const usernameInput = document.querySelector("#username");

usernameInput.addEventListener("keypress", function (e) {
  if (!checkCharUsername(e)) {
    e.preventDefault();
  }
});

function checkCharUsername(e) {
  const char = String.fromCharCode(e.keyCode);
  const pattern = /[a-zA-Z]/;

  if (!pattern.test(char)) {
    return false;
  }
  console.log(char);
  return true;
}

// TELEFONE

const telefoneUsuInput = document.querySelector('input[name="telefoneUsu"]');

telefoneUsuInput.addEventListener("keypress", function (e) {
  if (!checkCharTelefone(e)) {
    // Alteração aqui
    e.preventDefault();
  }
});

function checkCharTelefone(e) {
  // Alteração aqui
  const char = String.fromCharCode(e.keyCode);
  const pattern = /[0-9]/;

  if (char.match(pattern)) {
    console.log(char);
    return true;
  }
}

// MASCARA DO TELEFONE
const handlePhone = (event) => {
  let input = event.target;
  input.value = phoneMask(input.value);
};

const phoneMask = (value) => {
  if (!value) return "";
  value = value.replace(/\D/g, "");
  value = value.replace(/(\d{2})(\d)/, "($1) $2");
  value = value.replace(/(\d)(\d{4})$/, "$1-$2");
  return value;
};
