
var ctx = document.getElementById("chart1");

var data = {
        labels: ["Pregunta 1", "Pregunta 2", "Pregunta 3", "Pregunta 4", "Pregunta 5", "Pregunta 6",],
        datasets: [{
            label: 'Nivel de Satisfacción',
            data: [1, 2, 3, 4, 5],
            backgroundColor: ['#029a4d'],
            borderColor:  "#029a4d"  ,
            pointBackgroundColor: "#029a4d",
            borderWidth: 2,
            fill: false
        },
        ]
    };

var options = {
            maintainAspectRatio: true,
            spanGaps: false,
            elements: {
                line: {
                    tension: 0.01
                }
            }
    };

var chart1 = new Chart(ctx, {
    type: 'radar',
    data: data,
    options: options
});
