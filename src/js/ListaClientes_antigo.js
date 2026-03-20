const modal = document.querySelector('.modal-container')
const tbody = document.querySelector('tbody')
const sNome = document.querySelector('#m-nome')
const sEmail = document.querySelector('#m-email')
const sTelefone = document.querySelector('#m-telefone')
const sFuncao = document.querySelector('#m-funcao')
const sStatus = document.querySelector('#m-status')
const btnSalvar = document.querySelector('#btnSalvar')


// mascara telefone

// sTelefone.addEventListener('input', handlePhone);
// function handlePhone(event) {
//   let input = event.target;
//   input.value = phoneMask(input.value);
// };
var mascaraTelefone = IMask(sTelefone, {
  mask: "+55 (00) 90000-0000",
});

function phoneMask(value) {
  if (!value) return "";
  value = value.replace(/\D/g, "");
  value = value.replace(/(\d{2})(\d)/, "($1) $2");
  value = value.replace(/(\d)(\d{4})$/, "$1-$2");
  // Limitar para 15 caracteres
  return value.slice(0, 15);
};


// ***********************


let itens
let id

function openModal(edit = false, index = 0) {
  modal.classList.add('active')

  modal.onclick = e => {
    if (e.target.className.indexOf('modal-container') !== -1) {
      modal.classList.remove('active')
    }
  }

  if (edit) {
    sNome.value = itens[index].nome
    sNome.value = itens[index].nome
    sEmail.value = itens[index].email
    sTelefone.value = itens[index].telefone
    sFuncao.value = itens[index].funcao
    sStatus.value = itens[index].status
    id = index
  } else {
    sNome.value = ''
    sEmail.value = ''
    sTelefone.value = ''
    sFuncao.value = ''
    sStatus.value = ''
  }
  
}

function editItem(index) {

  openModal(true, index)
}

function deleteItem(index) {
  itens.splice(index, 1)
  setItensBD()
  loadItens()
}

function insertItem(item, index) {
  let tr = document.createElement('tr')

  tr.innerHTML = `
    <td>${item.nome}</td>
    <td>${item.email}</td>
    <td>${item.telefone}</td>
    <td>${item.funcao}</td>
    <td> ${item.status}</td>
    <td class="acao">
      <button onclick="editItem(${index})"><i class='bx bx-edit' ></i></button>
    </td>
    <td class="acao">
      <button onclick="deleteItem(${index})"><i class='bx bx-trash'></i></button>
    </td>
  `
  tbody.appendChild(tr)
}

btnSalvar.onclick = e => {
  
  if (sNome.value == '' || sEmail.value == '' || sTelefone.value == ''|| sFuncao.value == ''|| sStatus.value == '') {
    return
  }

  e.preventDefault();

  if (id !== undefined) {
    itens[id].nome = sNome.value
    itens[id].email = sEmail.value
    itens[id].telefone = sTelefone.value
    itens[id].funcao = sFuncao.value
    itens[id].status = sStatus.value
  } else {
    itens.push({'nome': sNome.value, 'email': sEmail.value,'telefone': sTelefone.value,'funcao': sFuncao.value, 'status': sStatus.value})
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


  setItensBD()

  modal.classList.remove('active')
  loadItens()
  id = undefined
}

function loadItens() {
  itens = getItensBD()
  tbody.innerHTML = ''
  itens.forEach((item, index) => {
    insertItem(item, index)
  })

}

const getItensBD = () => JSON.parse(localStorage.getItem('dbfunc')) ?? []
const setItensBD = () => localStorage.setItem('dbfunc', JSON.stringify(itens))

loadItens()



