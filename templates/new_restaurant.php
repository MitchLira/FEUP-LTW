<form id="form_new_restaurant" action="../actions/add_restaurant.php" method="post" style="margin-top: 5em">
    <input type="hidden" name="username" value="<?=$_GET['username']?>"/>

    <fieldset>
        <legend>Restaurant</legend>
        <input type="text" name="name"><br>
        <textarea name="description" rows="5" cols="40" placeholder="Write a description..."><?=$restaurant['description']?></textarea><br>
    </fieldset>
    
    <fieldset>
        <legend>Location</legend>
        <select name="country" class="countries" id="countryId">
            <option name="country" value="">Select Country</option>
        </select><br>
        <select name="state" class="states" id="stateId">
            <option name="state" value="">Select State</option>
        </select><br>
        <select name="city" class="cities" id="cityId">
            <option value="">Select City</option>
        </select><br>

        <label> Street:
            <input type="text" name="street">
        </label><br>

        <label> Zip Code:
            <input type="text" name="<zipcode">
        </label><br>
    </fieldset>

    <fieldset>
        <legend>Others</legend>
        <label>Price:
            <input type="number" name="price" value="<?=$restaurant['price']?>" min="0" max="1000" step="0.01">
        </label><br>

        <label>Opening Time:
            <input type="time" name="open" value="<?=$restaurant['open']?>" >
        </label><br>

        <label>Closing Time:
            <input type="time" name="close" value="<?=$restaurant['close']?>">
        </label><br>
    </fieldset>

    <input type="submit" name="submit" value="Add" id="btnAdd">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://lab.iamrohit.in/js/location.js"></script>