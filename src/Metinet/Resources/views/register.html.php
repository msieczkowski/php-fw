<form class="form-signin" method="post">
    <h2 class="form-signin-heading">Please sign up</h2>
    <label for="firstname" class="sr-only">Firstname</label>
    <input type="text" name="firstname" id="inputFirstname" class="form-control" placeholder="Firstname" required autofocus value="<?= $_firstname ?>">
    <label for="lastname" class="sr-only">Lastname</label>
    <input type="text" name="lastname" id="inputLastname" class="form-control" placeholder="Lastname" required autofocus value="<?= $_lastname ?>">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?= $_email ?>">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
    <input type="password" name="confirmpassword" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
</form>