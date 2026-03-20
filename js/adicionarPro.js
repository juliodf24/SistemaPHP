//------------- mascara de campos
var moneyInput = document.getElementById("dinheiro");
var moneyMask = IMask(moneyInput, {
  mask: "R$ num",
  blocks: {
    num: {
      mask: Number,
      thousandsSeparator: ".",
      radix: ",",
    },
  },
});
var moneyInput2 = document.getElementById("dinheiro2");
var moneyMask = IMask(moneyInput2, {
  mask: "R$ num",
  blocks: {
    num: {
      mask: Number,
      thousandsSeparator: ".",
      radix: ",",
    },
  },
});

//------------- descrição
$("#trumbowyg").trumbowyg({
  btns: [
    // ['viewHTML'],
    ["undo", "redo"],
    // ['formatting'],
    ["strong", "em", "del"],
    ["superscript", "subscript"],
    ["link"],
    ["justifyLeft", "justifyCenter", "justifyRight", "justifyFull"],
    ["unorderedList", "orderedList"],
    ["horizontalRule"],
    ["removeformat"],
  ],
  autogrow: true,
  lang: "pt_br",
});

//------------- validação de campos
var nomePro = document.getElementById("nomePro");
var codigoPro = document.getElementById("codigoPro");
var valorCompraPro = document.getElementById("dinheiro");
var valorVendaPro = document.getElementById("dinheiro2");
var qtdEstoquePro = document.getElementById("qtdEstoquePro");
var formulario = document.getElementById("form");




nomePro.addEventListener('blur', function() {validarcampo(nomePro);});
codigoPro.addEventListener('blur', function() {validarcampo(codigoPro);});
valorCompraPro.addEventListener('blur', function() {validarcampo(valorCompraPro);});
valorVendaPro.addEventListener('blur', function() {validarcampo(valorVendaPro);});
qtdEstoquePro.addEventListener('blur', function() {validarcampo(qtdEstoquePro);});

function validarcampo(campo) {
  if (campo.value == '') {
    campo.style.border = "1px solid red";
  } else {
    campo.style.border = "1px solid green";
  }
}

function validateForm() {
  if (nomePro.value === '' || codigoPro.value === '' || valorCompraPro.value === '' || valorVendaPro.value === '' || qtdEstoquePro.value === ''){
    formulario.style.border = "1px solid red";
  } else {
    formulario.submit();
  }
}
