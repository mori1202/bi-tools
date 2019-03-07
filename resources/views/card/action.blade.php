<h1 style="font-size: 1.8rem;margin: 20px 0 0 20px;" onclick="$('.action').toggleClass('none');">アクション(電話クリック+WEB予約)</h1>
<div class="action"> 
<div style="display:flex;">

<div class="card text-center" style="width:500px;height:500px;margin:30px;">
  <div class="card-header">
    月別アクセス数
  </div>
  <div class="card-body">
<div style="text-align:right;">
  <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
  <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
</div>
  <canvas id="myChart"></canvas>
  </div>
  <div class="card-footer text-muted text-right">
    集計期間（2018-01 ～ 2018-12）
  </div>
</div>


<div class="card text-center" style="width:500px;height:500px;margin:30px;">
  <div class="card-header">
    日別アクセス数
  </div>
  <div class="card-body">
<div style="text-align:right;">
  <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
  <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
</div>
  <canvas id="myChart2"></canvas>
  </div>
  <div class="card-footer text-muted text-right">
    集計期間（2019-02-07 ～ 2019-03-08）
  </div>
</div>

<div class="card text-center" style="width:500px;height:500px;margin:30px;">
  <div class="card-header">
    時間別アクセス数
  </div>
  <div class="card-body">
<div style="text-align:right;">
  <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
  <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
</div>
  <canvas id="myChart3"></canvas>
  </div>
  <div class="card-footer text-muted text-right">
    集計期間（2019-03-08 0:00 ～ 24:00）
  </div>
</div>
</div>
</div>


