    <div class="card text-center" style="width:500px;height:640px;margin:30px;">
      <div class="card-header">{{$title}}</div>
      <div class="card-body">
        @include('common.card.button', ['graphType' => 'bar'])
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
