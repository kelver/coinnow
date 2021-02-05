var ctx = document.getElementById('myChart');

function getData() {
    //trás moeda padrão de acesso para gráfico
    $.ajax({
        url: "api/v1/fechamentoBySigla",
        type: "POST",
    }).done(function(data) {
        var dias = [];
        var valores = [];
        $.each(data, function (key, item) {
            dias.push(item.dia);
            valores.push(item.bid);
        });
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dias,
                datasets: [{
                    // Legenda
                    label: false,
                    // Define-se a cor da linha.
                    borderColor: 'rgb(163,13,132)',
                    backgroundColor: 'rgba(255,255,255,.5)',
                    // Dados a serem inseridos nas barras
                    data: valores,
                }]
            },
            options: {
                legend: {
                    display: false
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Evolução de fechamento semanal'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        });
    }).fail(function(jqXHR, textStatus ) {
        console.log("Request failed: " + textStatus);
    }).always(function() {
    });
}

getData();
