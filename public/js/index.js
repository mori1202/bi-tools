console.log(Chart.defaults.global);
//Chart.plugins.unregister(labels);
var ctx = document.getElementById('myChart').getContext('2d');
ctx.canvas.height = 300;
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mar', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      label: '電話',
      data: [500, 450, 550, 700, 320, 300, 700, 850, 600, 500, 450, 999],
      backgroundColor: "rgba(153,255,51,0.4)"
    }, {
      label: 'Web',
      data: [300, 700, 850, 600, 500, 450, 999, 500, 450, 550, 700, 320],
      backgroundColor: "rgba(255,153,0,0.4)"
    }]
  },
  options: {
         scales: {
             xAxes: [{
                 stacked: true,
             }],
             yAxes: [{
                 stacked: true,
                 ticks: {
                     beginAtZero: true,
                     min: 0
                 }
             }]
         },
     }
});

var ctx2 = document.getElementById('myChart2').getContext('2d');
ctx2.canvas.height = 300;
var myChart2 = new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['2019-02-07','2019-02-08','2019-02-09','2019-02-10','2019-02-11','2019-02-12','2019-02-13','2019-02-14','2019-02-15','2019-02-16','2019-02-17','2019-02-18','2019-02-19','2019-02-20','2019-02-21','2019-02-22','2019-02-23','2019-02-24','2019-02-25','2019-02-26','2019-02-27','2019-02-28','2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06','2019-03-07','2019-03-08',],
    datasets: [{
      label: '電話',
      data: [50, 45, 55, 70, 32, 30, 70, 85, 60, 50, 45, 99,50, 45, 55, 70, 32, 30, 70, 85, 60, 50, 45, 99,50, 45, 55, 70, 32, 30 ],
      backgroundColor: "rgba(153,255,51,0.4)"
    }, {
      label: 'Web予約',
      data: [70, 32, 30, 70, 85, 60, 50, 45, 99,50, 45, 55, 70, 32, 30, 50, 45, 55, 70, 32, 30, 70, 85, 60, 50, 45, 99,50, 45, 55, ],
      backgroundColor: "rgba(255,153,0,0.4)"
    }]
  },
  options: {
         scales: {
             xAxes: [{
                 stacked: true,
             }],
             yAxes: [{
                 stacked: true,
                 ticks: {
                     beginAtZero: true,
                     min: 0
                 }
             }]
         },
     }
});

var ctx3 = document.getElementById('myChart3').getContext('2d');
ctx3.canvas.height = 300;
var myChart3 = new Chart(ctx3, {
  type: 'pie',
  data: {
    labels: [ '電話','Web'],
    datasets: [{
      data: [32933,2302], 
      backgroundColor: ["rgba(153,255,51,0.4)", "rgba(255,153,0,0.4)"]
    }]
  },
  options: {
    labels: {
      render: 'label'
    }
  } 
});


var ctx4 = document.getElementById('myChart4').getContext('2d');
ctx4.canvas.height = 300;
var myChart4 = new Chart(ctx4, {
  type: 'pie',
  data: {
    labels: [ 'プロフィール','写メ日記', '店舗トップ', '出勤情報', '料金システム', '女の子一覧', '即ヒメ', 'クーポン', 'イベント', 'ネット予約', 'フリースペース', '直送便', '地図/派遣エリア', 'メッセージ', 'お店情報', '動画', 'プラチナメール'],
    datasets: [{
      data: [805684, 658779,469041,365818, 103310, 87304,78693, 42019, 25838, 23464, 18634, 16302, 15403, 15001, 8001, 7561, 6666], 
      backgroundColor: ["rgba(153,255,51,0.4)", "rgba(255,153,0,0.4)", '#845a93','#0a0376','#76f696','#51989b','#17a4d7','#a4a805','#07b46a','#ce4f21','#fe0e6e','#8ab031','#56019a','#565a81']
    }]
  },
  options: {
        legend: {
            display: true,
            position: 'left',
        }
}
});







var ctx5 = document.getElementById('myChart5').getContext('2d');
ctx5.canvas.height = 300;
var myChart5 = new Chart(ctx5, {
  type: 'line',
  data: {
    labels: ['0:00', '1:00','2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
    datasets: [{
      label: '電話',
      data: [50, 45, 55, 70, 32, 30, 70, 85, 60, 50, 45, 99,50, 45, 55, 70, 32, 30, 70, 85, 60, 50, 45, 99 ],
      backgroundColor: "rgba(153,255,51,0.4)"
    }, {
      label: 'Web',
      data: [85, 60, 50, 45, 99,50, 45, 55, 70, 32, 30, 70, 85, 60, 50, 45, 99, 50, 45, 55, 70, 32, 30, 70 ],
      backgroundColor: "rgba(255,153,0,0.4)"
    }]
  },
  options: {
         scales: {
             xAxes: [{
                 stacked: true,
             }],
             yAxes: [{
                 stacked: true,
                 ticks: {
                     beginAtZero: true,
                     min: 0
                 }
             }]
         },
     }
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})
