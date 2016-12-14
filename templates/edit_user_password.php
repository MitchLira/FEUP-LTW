<form action="../actions/save_user_password.php" method="post" id="editPassword">
    <table>
        <input type="hidden" name="username" value="<?=$user['username']?>">

            <tr>
                <td align="right">Current password:</td>
                <td align="left"><input type="password" name="password" id="password" required  ></td>
                <tr>    
                    <td></td>
                    <td align="right"><p class="info"></p></td> 
                </tr>
            </tr>

            
            <tr>
                <td align="right">New password:</td>
                <td align="left"><input type="password" name="new_password" id="new_password" required ></td>

            </tr>

            <tr>
                <td align="right">Confirm password:</td>
                <td align="left"><input type="password" name="confirm_password" id="confirm_password" required ></td>
                <tr>    
                    <td></td>
                    <td><p></p></td> 
                </tr>
            </tr>

            <tr>
                <td align="right"></td>
                <td align="left"><input type="submit" name="submit" value="Save" id="buttonSave" disabled></td>
                <tr>    
                    <td></td>
                    <td><p></p></td> 
                </tr>
            </tr>
    </table>
</form>
