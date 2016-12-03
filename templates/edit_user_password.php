<form action="../actions/save_user_password.php" method="post" id="editProfile">
    
    <input type="hidden" name="username" value="<?=$user['username']?>">

    <label>Current Password:
        <input type="password" name="password">
    </label>

    <label>New Password:
        <input type="password" name="new_password">
    </label>

    <label>Confirm Password:
        <input type="password" name="confirm_password">
    </label>

     <input type="submit" name="submit" value="Save" id="buttonSave" >

</form>