<form method="get"action="">
    @csrf
    <div class="form-group">
        <label>キーワード:</label>
        <input type="text"name="keyword"class="form-control">
    </div>
    <div class="form-group">
        <button type="submit"class="btn btn-outline-primary">検索</button>
        <a href="{{route('article.list')}}">クリア</a>
    </div>
</form>
