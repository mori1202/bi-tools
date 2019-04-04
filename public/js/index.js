const LABEL_LEGEND1 = '電話';
const LABEL_LEGEND2 = 'WEB予約';
const BGCOLOR_LEGEND1 = "rgba(153,255,51,0.4)";
const BGCOLOR_LEGEND2 = "rgba(255,153,0,0.4)";
const GRAPH_TYPE_BAR = 'bar';
const GRAPH_TYPE_PIE = 'pie';
const AJAX_URL_MAP = {
    'monthlyAction': '/action/monthly/{}.json', 
    'dailyAction'  : '/action/daily/{}.json',
    'typeAction'   : '/action/type/{}.json',
    'typeContents'   : '/action/type_contents/{}.json'
};

var labels = Chart.plugins.getAll().filter(function(p) {
  return p.id === 'labels';
})[0];
// 一旦すべてunload
Chart.plugins.unregister(labels);

// CSRFトークンをヘッダへ埋め込む
$.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});

// 月別アクション総数グラフ描画関数
var callbackMonthlyActionFunc = function drawMonthlyActionGraph(data){
  var ctx = document.getElementById('monthlyAction').getContext('2d');
  ctx.canvas.height = 300;
  var myChart = new Chart(ctx, {
    type: GRAPH_TYPE_BAR,
    data: {
      labels: data.label,
      datasets: [{
        label: LABEL_LEGEND1,
        data: data.tel,
        backgroundColor: BGCOLOR_LEGEND1
      }, {
        label: LABEL_LEGEND2,
        data: data.web,
        backgroundColor: BGCOLOR_LEGEND2
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
};

// 日別アクション総数グラフ描画関数
var callbackDailyActionFunc = function drawDailyActionGraph(data){
  var ctx = document.getElementById('dailyAction').getContext('2d');
  ctx.canvas.height = 300;
  var myChart2 = new Chart(ctx, {
    type: GRAPH_TYPE_BAR,
    data: {
      labels: data.label,
      datasets: [{
        label: LABEL_LEGEND1,
        data: data.tel,
        backgroundColor: BGCOLOR_LEGEND1
      }, {
        label: LABEL_LEGEND2,
        data: data.web,
        backgroundColor: BGCOLOR_LEGEND2
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
};

/* アクション種別割合（円グラフ）*/
var callbackTypeActionFunc = function drawTypeActionGraph(data){
var ctx = document.getElementById('typeAction').getContext('2d');
ctx.canvas.height = 300;
var myChart3 = new Chart(ctx, {
  type: GRAPH_TYPE_PIE,
  data: {
    labels: [LABEL_LEGEND1, LABEL_LEGEND2],
    datasets: [{
      data: [data.tel,data.web], 
      backgroundColor: [BGCOLOR_LEGEND1, BGCOLOR_LEGEND2]
    }]
  },
  options: {
    tooltips: { enabled: false }
  },
  plugins: [ labels ] 
});
};


/* コンテンツ別電話クリック割合（円グラフ）*/
var callbackTypeContentsFunc = function drawTypeContentdGraph(data){
var ctx = document.getElementById('typeContents').getContext('2d');
ctx.canvas.height = 300;
var myChart4 = new Chart(ctx, {
  type: GRAPH_TYPE_PIE,
  data: {
    labels: [ 'プロフィール','写メ日記', '店舗トップ', '出勤情報', '料金システム', '女の子一覧', '即ヒメ', 'クーポン', 'イベント', 'ネット予約', 'フリースペース', '直送便', '地図/派遣エリア', 'メッセージ', 'お店情報', '動画', 'プラチナメール'],
    datasets: [{
      data: data, 
      backgroundColor: ["rgba(153,255,51,0.4)", "rgba(255,153,0,0.4)", '#845a93','#0a0376','#76f696','#51989b','#17a4d7','#a4a805','#07b46a','#ce4f21','#fe0e6e','#8ab031','#56019a','#565a81']
    }]
  },
  options: {
    legend: {
      display: true,
      position: 'left',
    },
  },
  plugins: [ labels ]
});
};

/* 時間別アクセス数(折れ線グラフ)*/
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

/* ready */
$(function () {
  // tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // date-picker
  $('#datetimepicker1').datetimepicker({
    format: 'YYYY-MM',
    language: 'ja',
    viewMode: 'months',
    minDate: '2000-01-01',
    maxDate: '2099-12-31',
    buttons: {
      showToday: true
    },
    tooltips: {
      today: '今月を選択します',
    },
    defaultDate: moment().format('YYYY-MM'),
  });

  // 変更時にhiddenの値も更新する
  $('#datetimepicker1').on('change.datetimepicker', function(e) {
    $('#filter-month').val(e.date.format('YYYY-MM'));
  });

  yearMonth    = $('#filter-month').val();
  yearMonthDay = $('#filter-month').val() + '-01';

  ajaxAction('monthlyAction', callbackMonthlyActionFunc);
  ajaxAction('dailyAction',   callbackDailyActionFunc);
  ajaxAction('typeAction',    callbackTypeActionFunc);
  ajaxAction('typeContents',  callbackTypeContentsFunc);
})

function ajaxAction(cardId, callbackFunc){
  if($('#' + cardId).length){
    var url;
    if(cardId === 'dailyAction') { url = AJAX_URL_MAP[cardId].replace('{}', yearMonthDay); }  
    else { url = AJAX_URL_MAP[cardId].replace('{}', yearMonth); }

    $.ajax({
      type: 'GET',
      url: url,
      dataType: 'json',
    }).then(
      function(data){
        if(data.errorMsg){
          dispErrorMsg(cardId, data.errorMsg); 
        } else {
          callbackFunc(data);
          $('#' + cardId).css('display','block');
          $('.loading-container.' + cardId).css('display','none');
        }
      },
      function(data){
        console.log('通信に失敗しました');
      }
    ); 
  }
}


/* エラーカード表示関数  */
function dispErrorMsg(cardId, errors){
  $('.loading-container.' + cardId).css('display','none');
  var tmp = '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul style="margin-bottom:0;">';
  $.each(errors, function(idx, msg){
    tmp = tmp + '<li class="text-left">' + msg + '</li>';  
  });
  tmp = tmp + '</ul></div>';
  $('.loading-container.' + cardId).before(tmp);
}
