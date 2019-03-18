<h1 style="font-size: 1.8rem;margin: 75px 0 0 20px;">アクション(電話クリック+WEB予約)</h1>
@include('common.errors')
<div class="action">
  <div style="display:flex;flex-wrap:wrap;" class="sortable">
    @include('action.monthly')
    @include('action.daily')
    @include('action.type')
    @include('action.contents')
  </div>
</div>

