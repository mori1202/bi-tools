    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">アクション種別割合</div>
      <div class="card-body">
        <div style="text-align:right;">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-primary active" data-toggle="tooltip" data-placement="top" title="円グラフ表示">
              <input type="radio" name="options" id="option1" autocomplete="off" checked><i class="fas fa-chart-pie"></i>
            </label>
            <label class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="データ表示">
              <input type="radio" name="options" id="option2" autocomplete="off"><i class="fas fa-th-list"></i>
            </label>
          </div>
          <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <canvas id="myChart3"></canvas>
      </div>
      <div class="card-footer text-muted text-right">集計期間（2019-02-07 ～ 2019-03-08）</div>
    </div>
