<div class="container">
    <br>
    <div class="card col-md-8 offset-2">
        <div class="card-header">
            Register User
        </div>
        <div class="card-body">
            <form method="POST" action="<?= $_SERVER['REQUEST_URI']?>">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <input type="submit" name="submit" value="Register" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
