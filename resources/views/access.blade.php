  <h1 style="font-size: 1.8rem;margin: 20px 0 0 20px;">アクセス</h1>
  <div style="display:flex;flex-wrap:wrap;">
    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">時間別アクセス数</div>
      <div class="card-body">
        <div style="text-align:right;">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-primary active" data-toggle="tooltip" data-placement="top" title="折れ線グラフ表示">
              <input type="radio" name="options" id="option1" autocomplete="off" checked><i class="fas fa-chart-line"></i>
            </label>
            <label class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="データ表示">
              <input type="radio" name="options" id="option2" autocomplete="off"><i class="fas fa-th-list"></i>
            </label>
          </div>
          <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <canvas id="myChart5"></canvas>
      </div>
      <div class="card-footer text-muted text-right">集計期間（2019-03-08 0:00 ～ 24:00）</div>
    </div>

@php
  $today    = new \Carbon\Carbon('2019-03-08');
  $tempDate = new \Carbon\Carbon('2019-03-01');
  $skip = $tempDate->dayOfWeek;

  for($i = 0; $i < $skip; $i++) { $tempDate->subDay(); }
@endphp

    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">時間別アクセス数</div>
      <div class="card-body">
        <div style="text-align:right;margin-bottom:20px;">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-primary active" data-toggle="tooltip" data-placement="top" title="カレンダー表示">
              <input type="radio" name="options" id="option1" autocomplete="off" checked><i class="fas fa-calendar-alt"></i>
            </label>
            <label class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="データ表示">
              <input type="radio" name="options" id="option2" autocomplete="off"><i class="fas fa-th-list"></i>
            </label>
          </div>
          <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              @foreach (['日', '月', '火', '水', '木', '金', '土'] as $dayOfWeek)
              <th>{{ $dayOfWeek }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
@php
  do {
        echo '<tr>';
        for($i=0; $i < 7; $i++) {
            $class = "date"; 
            if($tempDate->month !== $today->month){$class .= " dark";}
            echo '<td class="'. $class . '" data-toggle="tooltip" data-placement="top" title="XXX件"><span>';
            echo $tempDate->month .'/'. $tempDate->day;
            echo '</span></td>';
            $tempDate->addDay();
        }
        echo '</tr>';

  }while($tempDate->month == $today->month);
@endphp
          </tbody>
         </table>
      </div>
      <div class="card-footer text-muted text-right">集計期間（2019-03-08 0:00 ～ 24:00）</div>
    </div>
  </div>


