<?php 
    $pwAddr = "../pages/edit_user_password.php?username=" . $_GET['username'];
    $dataAddr = "../pages/edit_user_data.php?username=" . $_GET['username'];
    $photoAddr = "../pages/upload_photo_user.php?username=" . $_GET['username'];
?>

<div id="editProfileform">
    <table>
    <form id="formpasswordEdit" action="<?=$pwAddr?>" method="post">
        
            <tr>
                <td align="right">Change your password:</td>
                <td align="left"><input id="passwordEdit" type="submit" value="Edit" /></td>
            </tr>
        </form>

        <form id="formdataEdit" action="<?=$dataAddr?>" method="post">
                <tr>
                    <td align="right">Change your data:</td>
                    <td align="left"><input id="dataEdit" type="submit" value="Edit" /></td>
                </tr>
        </form>

        <form id="formPhoto" action="<?=$photoAddr?>" method="post">

                <tr>
                    <td align="right">Change your photo:</td>
                    <td align="left"><input id="upload" type="submit" value="Change" /></td>
                </tr>

        </form>
    </table>
</div>



