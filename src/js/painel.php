<script>
// Alterar SIDEBAR
var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}

// graficos

// grafico 1
var options = {
  series: [
    {
      name: "Vendas",
      data: [10, 41, 35, 51, 49, 62, 69, 91, 148],
    },
  ],
  chart: {
    height: 350,
    type: "line",
    zoom: {
      enabled: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "straight",
  },
  title: {
    align: "left",
  },
  grid: {
    row: {
      colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
      opacity: 0.5,
    },
  },
  xaxis: {
    categories: [
      "12/12",
      "13/12",
      "14/12",
      "15/12",
      "16/12",
      "17/12",
      "18/12",
      "19/12",
      "20/12",
      "22/12",
      "23/12",
    ],
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


// Grafico 2
var options2 = {
  series: [
    {
      data: [1380,1200,1100,690,580,540,470,448,430,400],
    },
  ],
  chart: {
    type: "bar",
    height: 350,
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      borderRadiusApplication: "end",
      horizontal: true,
    },
  },
  dataLabels: {
    enabled: false,
  },
  xaxis: {
    categories: [
      "Produto A",
      "Produto B",
      "Produto C",
      "Produto D",
      "Produto E",
    ],
  },
};
var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// grafico 3
      
var options3 = {
  series: [<?php echo $regiao_num['Centro-Oeste']?>, <?php echo $regiao_num['Nordeste']?>,<?php echo $regiao_num['Norte']?>,<?php echo $regiao_num['Sudeste']?>,<?php echo $regiao_num['Sul']?>],
  chart: {
  width: 380,
  type: 'polarArea'
},
labels: ['Centro-Oeste', 'Nordeste', 'Norte', 'Sudeste', 'Sul'],
fill: {
  opacity: 1
},
stroke: {
  width: 1,
  colors: undefined
},
yaxis: {
  show: false
},
legend: {
  position: 'bottom'
},
plotOptions: {
  polarArea: {
    rings: {
      strokeWidth: 0
    },
    spokes: {
      strokeWidth: 0
    },
  }
},
theme: {
  // monochrome: {
  //   enabled: true,
  //   shadeTo: 'light',
  //   shadeIntensity: 0.6
  // }
  palette: 'palette1' // Mudança de tema para o tema de paleta 3
}
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();


var urlAtual = window.location.href;
var urlClass = new URL(urlAtual);
var situacao = urlClass.searchParams.get("situacao");
console.log(situacao);
if (situacao == "cadastrado") {
  swal({
    icon: "success",
    title: "Cadastro realizado!",
    text: "Cadastro foi realizado com sucesso!",
  }).then((value) => {
    if (value) {
      form.reset();
    }
  });
}
if (situacao == "erro") {
  swal({
    icon: "error",
    title: "Erro ao efetuar cadastro!",
    text: "Por favor, tente novamente mais tarde.",
  }).then((value) => {
    if (value) {
      // Limpar os campos do formulário após o envio bem-sucedido
      form.reset();
    }
  });
}
</script>