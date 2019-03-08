<h1 style="font-size: 1.8rem;margin: 20px 0 0 20px;">アクション(電話クリック+WEB予約)</h1>
<div class="action"> 
  <div style="display:flex;flex-wrap:wrap;">
    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">月別アクション総数</div>
      <div class="card-body">
        <div style="text-align:right;">
          <button type="button" class="btn btn-primary active" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
          <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
          <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <canvas id="myChart"></canvas>
      </div>
      <div class="card-footer text-muted text-right">
        集計期間
        <div class="dropdown" style="display:inline;">
          <button type="button" class="btn-sm btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-width:0;">2018-01</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">2018-02</a>
            <a class="dropdown-item" href="#">2018-03</a>
            <a class="dropdown-item" href="#">2018-04</a>
            <a class="dropdown-item" href="#">2018-05</a>
            <a class="dropdown-item" href="#">2018-06</a>
            <a class="dropdown-item" href="#">2018-07</a>
            <a class="dropdown-item" href="#">2018-08</a>
            <a class="dropdown-item" href="#">2018-09</a>
            <a class="dropdown-item" href="#">2018-10</a>
            <a class="dropdown-item" href="#">2018-11</a>
            <a class="dropdown-item" href="#">2018-12</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">その他リンク</a>
          </div>
          から 1年
        </div>
      </div>
    </div>
    
    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">日別アクション総数</div>
      <div class="card-body">
        <div style="text-align:right;">
          <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
          <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
          <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <canvas id="myChart2"></canvas>
      </div>
      <div class="card-footer text-muted text-right">集計期間（2019-02-07 ～ 2019-03-08）</div>
    </div>
    
    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">アクション種別割合</div>
      <div class="card-body">
        <div style="text-align:right;">
          <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
          <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
          <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <canvas id="myChart3"></canvas>
      </div>
      <div class="card-footer text-muted text-right">集計期間（2019-02-07 ～ 2019-03-08）</div>
    </div>
    
    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">コンテンツ別電話クリック割合</div>
      <div class="card-body">
        <div style="text-align:right;">
          <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
          <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
          <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <canvas id="myChart4"></canvas>
      </div>
      <div class="card-footer text-muted text-right">集計期間（2019-02-07 ～ 2019-03-08）</div>
    </div>
  </div>
</div>

  <h1 style="font-size: 1.8rem;margin: 20px 0 0 20px;">アクセス</h1>
  <div style="display:flex;flex-wrap:wrap;">
    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">時間別アクセス数</div>
      <div class="card-body">
        <div style="text-align:right;">
          <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="グラフ表示"><i class="far fa-chart-bar"></i></button>
          <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="データ表示"><i class="fas fa-chart-pie"></i></button>
          <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <canvas id="myChart5"></canvas>
      </div>
      <div class="card-footer text-muted text-right">集計期間（2019-03-08 0:00 ～ 24:00）</div>
    </div>
  </div>

