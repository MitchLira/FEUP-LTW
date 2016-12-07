<form id="form_new_restaurant" action="../actions/add_restaurant.php" method="post" style="margin-top: 5em">
        <input type="hidden" name="username" value="<?=$_GET['username']?>"/>

        <fieldset>
            <legend>Restaurant</legend>
                    <table>

                        <tr>
                            <td align="right">Restaurant name:</td> 
                            <td align="left"><input type="text" name="name" id="restName" required></td>
                        </tr>
                        <tr>
                            <td align="right"></td> 
                            <td align="left"> <textarea name="description" rows="5" cols="40" placeholder="Write a description..."></textarea></td>
                        </tr>
                    </table>
        </fieldset>
        
        <fieldset>
            <legend>Location</legend>
                <table>         
                <tr>
                    <td align="right">Country:</td> 
                    <td align="left">
                        <select name="country" class="countries" id="countryId" required>
                            <option name="country" value="">Select Country</option>
                        </select>
                    </td>
                </tr>
                        
                <tr>
                    <td align="right">State:</td> 
                    <td align="left"><select name="state" class="states" id="stateId">
                        <option name="state" value="">Select State</option></select></td>
                </tr>
                        
                <tr>
                    <td align="right">City:</td> 
                    <td align="left"> <select name="city" class="cities" id="cityId">
                        <option value="">Select City</option></select></td>
                </tr>

                <tr>
                    <td align="right">Street:</td> 
                    <td align="left"> <input type="text" name="street" required></td>
                </tr>  

                <tr>
                    <td align="right">Zip Code:</td>     
                    <td align="left"> <input type="text" name="zipcode" required></td>  
                </tr>                  
            </table>
        </fieldset>

        <fieldset>
            <legend>Others</legend>
                <table>
                    <tr>
                        <td align="right">Price:</td>     
                        <td align="left"><input type="number" name="price" value="<?=$restaurant['price']?>" min="0" max="1000" step="0.01" required></td>  
                    </tr> 

                    <tr>
                        <td align="right">Opening Time:</td>     
                        <td align="left"><input type="time" name="open" value="<?=$restaurant['open']?>" required></td>  
                    </tr>

                    <tr>
                        <td align="right">Closing Time:</td>     
                        <td align="left"><input type="time" name="close" value="<?=$restaurant['close']?>" required></td>  
                    </tr>   
                </table>
        </fieldset>

        <input type="submit" name="submit" value="Add" id="btnAdd">
  
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://lab.iamrohit.in/js/location.js"></script>