//---------------------- Usuario ----------------------------
var cpfcorreto = false;
var telefonecorreto = false;
var senhacorreto = false;
var nomecorreto = false;
var emailcorreto = false;
var datacorreto = false;

//------ validar nome
var nome = document.getElementById("nome");
//ouvinte de evento 'input'
nome.addEventListener("input", function () {
  //substitui todos os caracteres não alfabéticos por uma string vazia
  this.value = this.value.replace(/[^a-zA-Z\s]/g, "");
});
function ValidarNome() {
  var nome = document.getElementById("nome");
  if (nome.value.length <= 8) {
    nome.style.border = "1px solid red";
    nomecorreto = false;
    console.log("nome invalido");
  } else {
    nome.style.border = "1px solid green";
    nomecorreto = true;
    console.log("nome valido");
  }
}
//------ Fim validar nome

//------ validar data de nascimento
IMask(document.getElementById("data"), {
  mask: Date,
  min: new Date(1980, 0, 1),
  max: new Date(2020, 0, 1),
  lazy: false,
});
function maiorDeIdade(dataNascimento) {
  // Divide a data de nascimento em dia, mês e ano
  var partes = dataNascimento.split(".");
  // Cria um objeto Date com a data de nascimento
  var dataNasc = new Date(partes[2], partes[1] - 1, partes[0]);
  // Obtém a data atual
  var hoje = new Date();
  // Calcula a diferença de anos entre a data atual e a data de nascimento
  var idade = hoje.getFullYear() - dataNasc.getFullYear();
  // Calcula a diferença de meses entre a data atual e a data de nascimento
  var m = hoje.getMonth() - dataNasc.getMonth();
  // Se o mês atual é antes do mês de nascimento, ou se estamos no mês de nascimento mas o dia atual é antes do dia de nascimento, subtrai um ano da idade
  if (m < 0 || (m === 0 && hoje.getDate() < dataNasc.getDate())) {
    idade--;
  }
  // Retorna true se a idade for maior ou igual a 18, caso contrário retorna false
  return idade >= 18;
}
function validaridade() {
  var dataNascimento = document.getElementById("data").value;
  // Se a função retornar true (a pessoa tem 18 anos ou mais), imprime uma mensagem no console
  if (maiorDeIdade(dataNascimento)) {
    data.style.border = "1px solid green";
    datacorreto = true;
    console.log("idade valida");
  } else {
    // Se a função retornar false (a pessoa tem menos de 18 anos), imprime uma mensagem diferente no console
    data.style.border = "1px solid red";
    datacorreto = false;
    console.log("idade invalida");
  }
}
//------ fim validar data de nascimento

//------ validar CPF
var cpf = document.getElementById("cpf");
var mascaraCartao = IMask(cpf, {
  mask: "000.000.000-00",
});

function TestaCPF(strCPF) {
  var Soma;
  var Resto;
  Soma = 0;
  if (strCPF == "00000000000") return false;

  for (var i = 1; i <= 9; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(strCPF.substring(9, 10))) return false;

  Soma = 0;
  for (var i = 1; i <= 10; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(strCPF.substring(10, 11))) return false;
  return true;
}

function validarCPF() {
  var cpf = document.getElementById("cpf");
  var cpfMask = cpf.value;
  var strCPF = cpfMask.replace(/\D/g, "");
  if (TestaCPF(strCPF) == false) {
    cpf.style.border = "1px solid red";
    cpfcorreto = false;
    console.log("cpf invalido");
  } else {
    cpf.style.border = "1px solid green";
    cpfcorreto = true;
    console.log("cpf valido");
  }
}
//------ Fim validar CPF

//------ validar telefone
var telefone = document.getElementById("telefone");
var mascaraTelefone = IMask(telefone, {
  mask: "+55 (00) 90000-0000",
});
function ValidarTelefone() {
  var telefoneMask = document.getElementById("telefone");
  var telefoneSemMask = telefoneMask.value.replace(/\D/g, "");
  var telefone = telefoneSemMask.length;
  if (telefone > 13 || telefone < 13) {
    telefoneMask.style.border = "1px solid red";
    telefonecorreto = false;
    console.log("telefone invalido");
  } else {
    telefoneMask.style.border = "1px solid green";
    telefonecorreto = true;
    console.log("telefone valido");
  }
}
//------ Fim validar telefone

//------ validar email
function ValidarEmail() {
  var email = document.getElementById("email");
  if (email.value.length <= 4) {
    email.style.border = "1px solid red";
    emailcorreto = false;
  } else if (email.value.includes(".") && email.value.includes("@")) {
    email.style.border = "1px solid green";
    emailcorreto = true;
    console.log("email valido");
  } else {
    email.style.border = "1px solid red";
    emailcorreto = false;
    console.log("email invalido");
  }
}
//------ Fim validar email

//------ validar senha
function verificarForcaDaSenha() {
  var senha = document.getElementById("senha").value;
  var resultado = document.getElementById("resultado");
  if (senha.length > 20) {
    // Corte o valor para os primeiros 20 caracteres
    senha = senha.slice(0, 20);
  }
  var forcaDaSenha = passwordStrength(senha).value;

  var texto;
  var cor;
  switch (forcaDaSenha) {
    case "Too weak":
      texto = "Muito fraca";
      cor = "red";
      break;
    case "Weak":
      texto = "Fraca";
      cor = "orange";
      break;
    case "Medium":
      texto = "Média";
      cor = "yellow";
      break;
    case "Strong":
      texto = "Forte";
      cor = "green";
      break;
  }

  resultado.textContent = texto;
  resultado.style.color = cor;
  if (texto == "Muito fraca" || texto == "Fraca") {
    ValidarSenha(false);
  } else {
    ValidarSenha(true);
  }
}

function ValidarSenha(forca) {
  var senha = document.getElementById("senha");
  if (forca) {
    senha.style.border = "1px solid green";
    senhacorreto = true;
    console.log("senha valida");
  } else {
    senha.style.border = "1px solid red";
    senhacorreto = false;
    console.log("senha errada");
  }
}
//------ Fim validar senha

function ValidarformUser() {
  var formEndereco = document.getElementById("formEndereco");
  var formUser = document.getElementById("formUser");
  var formulario = document.getElementById("formulario");
  if (
    cpfcorreto &&
    telefonecorreto &&
    senhacorreto &&
    nomecorreto &&
    emailcorreto &&
    datacorreto
  ) {
    formUser.style.display = "none";
    formEndereco.style.display = "flex";
    formulario.style.border = "none";
  } else {
    formulario.style.border = "1px solid red";
  }
}

//------------------- Fim Usuario ----------------------------

//---------------------- endereco ----------------------------
var cepCorreto = false;
var enderecoCorreto = false;
var numeroCorreto = false;
var bairroCorreto = false;
var cidadeCorreto = false;
var ufCorreto = false;

// -------- validar cep
// var complementoInput = document.getElementById('complemento');
var cepInput = document.getElementById("cep");
var mascaraCep = IMask(cepInput, {
  mask: "00000-000",
});
cepInput.addEventListener("blur", function () {
  var cepValue = cepInput.value.replace(/\D/g, "");

  if (cepValue.length !== 8) {
    cepInput.style.border = "1px solid red";
    cepCorreto = false;
    return;
  }

  fetch(`https://viacep.com.br/ws/${cepValue}/json/`)
    .then((response) => response.json())
    .then((data) => {
      if (!data.erro) {
        enderecoInput.value = data.logradouro;
        bairroInput.value = data.bairro;
        cidadeInput.value = data.localidade;
        ufInput.value = data.uf;
        // complementoInput.focus();
        numeroInput.focus();
        cepInput.style.border = "1px solid green";
        enderecoInput.style.border = "1px solid green";
        bairroInput.style.border = "1px solid green";
        cidadeInput.style.border = "1px solid green";
        ufInput.style.border = "1px solid green";
        cepCorreto = true;
        enderecoCorreto = true;
        bairroCorreto = true;
        cidadeCorreto = true;
        ufCorreto = true;
        console.log("cep valido");
        console.log("endereco valido");
        console.log("bairro valido");
        console.log("cidade valido");
      } else {
        cepInput.style.border = "1px solid red";
        console.log("cep invalido");
        cepCorreto = false;
      }
    })
    .catch((error) => {
      console.error("Erro ao buscar CEP:", error);
    });
});
// --------fim validar cep

// -------- numero
var numeroInput = document.getElementById("numero");
numeroInput.addEventListener("input", function () {
  this.value = this.value.replace(/\D/g, "");
});
numeroInput.addEventListener("blur", function () {
  if (numeroInput.value.length < 1) {
    numeroInput.style.border = "1px solid red";
    console.log("numero invalido");
    numeroCorretoCorreto = false;
  } else {
    numeroInput.style.border = "1px solid green";
    numeroCorreto = true;
  }
});
// -------- fim numero

// -------- validar endereco
var enderecoInput = document.getElementById("endereco");
enderecoInput.addEventListener("blur", function () {
  if (enderecoInput.value.length > 5) {
    enderecoInput.style.border = "1px solid green";
    enderecoCorreto = true;
  } else {
    enderecoInput.style.border = "1px solid red";
    console.log("endereco invalido");
    enderecoCorreto = false;
  }
});
// -------- FIm validar endereco

// -------- validar bairro
var bairroInput = document.getElementById("bairro");
bairroInput.addEventListener("blur", function () {
  if (bairro.value.length > 5) {
    bairro.style.border = "1px solid green";
    bairroCorreto = true;
  } else {
    bairro.style.border = "1px solid red";
    console.log("bairro invalido");
    bairroCorreto = false;
  }
});
// -------- FIm validar bairro

// -------- validar cidade
var cidadeInput = document.getElementById("cidade");
cidadeInput.addEventListener("blur", function () {
  if (cidade.value.length > 5) {
    cidade.style.border = "1px solid green";
    cidadeCorreto = true;
  } else {
    cidade.style.border = "1px solid red";
    cidadeCorreto = false;
    console.log("cidade invalido");
  }
});
// -------- FIm validar cidade

// ------ validar uf
var ufInput = document.getElementById("uf");
ufInput.addEventListener("blur", function () {
  if (ufInput.value == "") {
    ufInput.style.border = "1px solid red";
    console.log("uf invalido");
    ufCorreto = false;
  } else {
    ufInput.style.border = "1px solid green";
    ufCorreto = true;
  }
});
// ------- fim validar uf

function ValidarformEndereco() {
  var formulario = document.getElementById("formulario");
  if (
    cepCorreto &&
    enderecoCorreto &&
    numeroCorreto &&
    bairroCorreto &&
    cidadeCorreto &&
    ufCorreto
  ) {
    formulario.submit();
  } else {
    formulario.style.border = "1px solid red";
  }
}
//------------------- Fim endereco ----------------------------
var urlAtual = window.location.href;
var urlClass = new URL(urlAtual);
var situacao = urlClass.searchParams.get("situacao");
console.log(situacao);
if (situacao == "cadastrado") {
  swal({
    icon: "success",
    title: "Cadastro realizado!",
    text: "Parabéns, o seu cadastro foi realizado com sucesso!",
  }).then((value) => {
    if (value) {
      // direcionar para index.php
      window.location.href = "login.php";
      // Limpar os campos do formulário após o envio bem-sucedido
      form.reset();
    }
  });
}
if (situacao == "erro") {
  swal({
    icon: "error",
    title: "Erro ao efetuar cadastro!",
    text: "Por favor, tente novamente.",
  }).then((value) => {
    if (value) {
      // Limpar os campos do formulário após o envio bem-sucedido
    }
  });
}
