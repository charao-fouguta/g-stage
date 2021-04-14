  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ログアウトしますか？</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">ログアウトされる場合、以下の「ログアウト」ボタンを選択してください</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">キャンセル</button>

          <form action="{{ route('admin.logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">ログアウト</button>
          </form>
        </div>
      </div>
    </div>
  </div>