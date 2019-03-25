@if (session('info'))
<div class="card-action">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-success">
          {{ session('info') }}
        </div>
      </div>
    </div>
  </div>
  @endif
  @if(count($errors))
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@if (session('warning'))
<div class="card-action">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-danger">
          {{ session('warning') }}
        </div>
      </div>
    </div>
  </div>
</div>
@endif
