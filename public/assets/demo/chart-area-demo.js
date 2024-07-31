// Prepare data for charts
var dates = data.map(item => item.tanggal_pendaftaran);
var counts = data.reduce((acc, curr) => {
    acc[curr.tanggal_pendaftaran] = (acc[curr.tanggal_pendaftaran] || 0) + 1;
    return acc;
}, {});

dates = [...new Set(dates)];
var countsArray = dates.map(date => counts[date]);
// Area Chart
var ctx = document.getElementById('myAreaChart').getContext('2d');
var myAreaChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dates,
        datasets: [{
            label: 'Jumlah Pendaftaran',
            data: countsArray,
            backgroundColor: 'rgba(2,117,216,0.2)',
            borderColor: 'rgba(2,117,216,1)',
            pointRadius: 5,
            pointBackgroundColor: 'rgba(2,117,216,1)',
            pointBorderColor: 'rgba(255,255,255,0.8)',
            pointHoverRadius: 5,
            pointHoverBackgroundColor: 'rgba(2,117,216,1)',
            pointHitRadius: 50,
            pointBorderWidth: 2,
            tension: 0.3
        }]
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'date'
                },
                gridLines: {
                    display: false
                },
                ticks: {
                    maxTicksLimit: 7
                }
            }],
            yAxes: [{
                ticks: {
                    min: 0,
                    max: Math.max.apply(null, countsArray) + 10,
                    maxTicksLimit: 5
                },
                gridLines: {
                    color: 'rgba(0, 0, 0, .125)'
                }
            }]
        },
        legend: {
            display: false
        }
    }
});

// Bar Chart
var ctx = document.getElementById('myBarChart').getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: dates,
        datasets: [{
            label:["January", "February", "March", "April", "May", "June"],
            backgroundColor: 'rgba(2,117,216,1)',
            borderColor: 'rgba(2,117,216,1)',
            data: countsArray
        }]
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'month'
                },
                gridLines: {
                    display: false
                },
                ticks: {
                    maxTicksLimit: 6
                }
            }],
            yAxes: [{
                ticks: {
                    min: 0,
                    max: Math.max.apply(null, countsArray) + 10,
                    maxTicksLimit: 5
                },
                gridLines: {
                    display: true
                }
            }]
        },
        legend: {
            display: false
        }
    }
});

// Pie Chart
var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['KK', 'KTP', 'Akta'],
        datasets: [{
            data: [data.filter(item => item.jenis_pendaftaran === 'KK').length, data.filter(item => item.jenis_pendaftaran === 'KTP').length, data.filter(item => item.jenis_pendaftaran === 'Akta').length],
            backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
        }]
    }
});
