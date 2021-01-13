var ctx = document.getElementById('generatorChart').getContext('2d');
Chart.defaults.global.defaultFontSize = 10;
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'Freitag, 31.01.2020',
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 2000, 2000, 7000, 2000, 9700, 5800, 2000, 2000, 0, 0, 0],
            steppedLine: 'true',
            borderColor: 'blue',
            borderWidth: 1,
            backgroundColor: 'transparent'
        },
        {
            label: 'Samstag, 01.02.2020',
            data: [0, 2000, 2000, 2000, 7000, 2000, 9700, 5800, 2000, 2000, 0, 0, 0, 2000, 2000, 2000, 7000, 2000, 9700, 5800, 2000, 2000, 0, 0, 0],
            steppedLine: 'true',
            borderColor: 'fuchsia',
            borderWidth: 1,
            backgroundColor: 'transparent',
            hidden: true
        },
        {
            label: 'Sonntag, 02.02.2020',
            data: [0, 2000, 0, 0, 0, 0, 9700, 5800, 2000, 0, 0, 0, 0, 2000, 0, 2000, 0, 2000, 0, 0, 0, 2000, 0, 0, 0],
            steppedLine: 'true',
            borderColor: 'orange',
            borderWidth: 1,
            backgroundColor: 'transparent',
            hidden: true
        },
        {
            label: 'Freitag, 07.02.2020',
            data: [0, 0, 0, 0, 0, 2000, 5000, 5800, 2000, 2000, 9800, 0, 0, 0, 0, 5000, 0, 0, 0, 0, 2000, 2000, 0, 0, 0],
            steppedLine: 'true',
            borderColor: 'green',
            borderWidth: 1,
            backgroundColor: 'transparent',
            hidden: true
        },
        {
            label: 'Samstag, 08.02.2020',
            data: [0, 2000, 2000, 2000, 2000, 2000, 5000, 5800, 2000, 2000, 9800, 0, 0, 0, 0, 5000, 7000, 7000, 11800, 2000, 2000, 2000, 0, 0, 0],
            steppedLine: 'true',
            borderColor: 'purple',
            borderWidth: 1,
            backgroundColor: 'transparent',
            hidden: true
        },
        {
            label: 'Sonntag, 09.02.2020',
            data: [0, 3000, 3000, 3000, 3000, 0, 0, 0, 2000, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            steppedLine: 'true',
            borderColor: 'grey',
            borderWidth: 1,
            backgroundColor: 'transparent',
            hidden: true
        }],
        labels: ["10:30", "11:00", "11:30", "12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00", "16:30", "17:00",
                  "17:30", "18:00", "18:30", "19:00", "19:30", "20:00", "20:30", "21:00", "21:30", "22:00", "22:30"],
    },
    options: {
        title: {
            text: "Kumulierter Lastgang am Ausgang des Generators",
            display: true,
            fontSize: 14,
            fontColor: 'black',
            fontFamily: 'Arial'
        },
        legend: {
            position: 'bottom',
            labels: {
                fontColor: 'black',
                fontFamily: 'Arial',
                usePointStyle: true
            }
        },
        scales: {
            xAxes: [{
                ticks: {
                    min: '10:30',
                    max: '22:30'
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    fontSize: 14,
                    labelString: "Watt",
                },
                ticks: {
                    min: 0,
                    max: 12000
                }
            }]
        }, annotation: {
            annotations: [{
                type: 'box',
                drawTime: 'beforeDatasetsDraw',
                xMin: "10:30",
                xMax: "22:30",
                yMin: 10000,
                yMax: 12000,
                borderWidth: 2,
                borderColor: 'red',
                backgroundColor: 'rgba(255, 51, 51, 0.1)',
                xScaleID: 'x-axis-0',
                yScaleID: 'y-axis-0'
            },
            , {
              type: 'line',
              id: 'call-count-1',
              mode: 'vertical',
              scaleID: 'x-axis-0',
              value: "16:30",
              borderColor: 'transparent',
              label: {
                backgroundColor: 'transparent',
                fontSize: 12,
                fontStyle: 'italic',
                fontColor: 'red',
                position: 'top',
                enabled: true,
                content: 'Überlastbereich Notabschaltung'
              }
            }   ]
        }
    }
});