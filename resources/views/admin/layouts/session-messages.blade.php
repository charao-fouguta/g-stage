<div>
  @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif

  @if (session('primary'))
    <div class="alert alert-primary" role="alert">
        {{ session('primary') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
</div>