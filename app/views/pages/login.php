<?php require APPROOT . '/views/inc/header.php'; ?>
<form method="POST" action="<?= URLROOT ?>/UserController/loginUser" enctype="multipart/form-data">
    <fieldset>
        <legend>Login</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Eamil</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Eamil input" name="email">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Password</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Password input" name="pass">
        </div>

        <button type="submit" name="login" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
<?php require APPROOT . '/views/inc/footer.php'; ?>