@php
  $today    = new \Carbon\Carbon();
  $tempDate = $today->copy()->startOfMonth();
  $skip = $tempDate->dayOfWeek;

  for($i = 0; $i < $skip; $i++) { $tempDate->subDay(); }
@endphp

  <h1 style="font-size: 1.8rem;margin: 20px 0 0 20px;">コンテンツ活用</h1>
  <div style="display:flex;flex-wrap:wrap;">
    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">更新ボタン更新回数</div>
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
        $idx = 0;
  do {
        echo '<tr>';
        for($i=0; $i < 7; $i++) {
            $class = "date"; 
            $style = 100;
            if($tempDate->month !== $today->month){$class .= " dark";}else{$style=rand(30,90);}
            echo '<td class="'. $class . '" data-toggle="tooltip" data-placement="top" title="XXX件" style="background-color:hsl(270,100%,' . $style . '%);"><span>';
            echo '<span style="top:0;left:0;">' . $tempDate->month .'/'. $tempDate->day . '</span>';
            if(isset($result[$idx]) && $result[$idx][0] === $tempDate->format('Y-m-d')){
                echo $result[$idx][1];
                $idx++;
            }
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
