<div class="container">
    <br>
<div class="card col-md-8 offset-2">
    <div class="card-header">
        Share Something
    </div>
    <div class="card-body">
        <form method="POST" action="<?= $_SERVER['REQUEST_URI']?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" name="link" class="form-control">
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <a href="<?= ROOT_URL?>Shares" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
</div>