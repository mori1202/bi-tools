@php
  $alt = null;
  $buttonIcon = null;
  if( $graphType == 'bar' ){
    $alt = '棒グラフ表示';
    $buttonIcon = '<i class="far fa-chart-bar"></i>';
  }
@endphp
<div style="text-align:right;">
  <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-primary active" data-toggle="tooltip" data-placement="top" title="{{$alt}}">
      <input type="radio" name="options" id="option1" autocomplete="off" checked>{!!$buttonIcon!!}
    </label>
    <label class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="データ表示">
      <input type="radio" name="options" id="option2" autocomplete="off"><i class="fas fa-th-list"></i></i>
    </label>
  </div>
  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="CSVエクスポート"><i class="far fa-file-alt"></i></button>
</div>
