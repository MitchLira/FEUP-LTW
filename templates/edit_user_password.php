<form action="../actions/save_user_password.php" method="post" id="editPassword">
    
    <input type="hidden" name="username" value="<?=$user['username']?>">

    <label>Current Password:
        <input type="password" name="password" id="password" required  >
    </label>
    <p class="info"></p>

    <label>New Password:
        <input type="password" name="new_password" id="new_password" required >
    </label>

    <label>Confirm Password:
        <input type="password" name="confirm_password" id="confirm_password" required >
    </label>

    <input type="submit" name="submit" value="Save" id="buttonSave" disabled>

</form>
