<div class="container">
    <br>
    <div class="card col-md-8 offset-2">
        <div class="card-header">
            Register User
        </div>
        <div class="card-body">
            <form method="POST" action="<?= $_SERVER['REQUEST_URI']?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                    <span id='message'></span>
                </div>

                <input type="submit" name="submit" value="Register" class="btn btn-primary">

            </form>
        </div>
    </div>
</div>


<script>
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('confirm_password');
    var messageDiv = document.getElementById('message');


    password.addEventListener('keyup', validatePassword);
    confirmPassword.addEventListener('keyup', validatePassword);

    function validatePassword(){
        if (password.value == confirmPassword.value){
            messageDiv.innerHTML = 'Matched';
            messageDiv.style.color = 'green';
        }
        else {
            messageDiv.innerHTML = 'Password Not Matched';
            messageDiv.style.color = 'red';
        }
    }

    // $('#password, #confirm_password').on('keyup', function () {
    //     if ($('#password').val() == $('#confirm_password').val()) {
    //         $('#message').html('Matching').css('color', 'green');
    //     } else
    //         $('#message').html('Not Matching').css('color', 'red');
    // });
</script>