<form class="user" action="<?=BASE_URL?>/login/sign" method="POST">
        <div class="form-group">
                <input type="text" class="form-control form-control-user"id="usernameInput" placeholder="Enter your username" name="username" required>
        </div>
        <div class="form-group">
                <input type="password" class="form-control form-control-user"id="passwordInput" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
                <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
        </div>
        </div>
                <input type="submit" value="Login" name="submit" class="btn btn-primary btn-user btn-block">
</form>