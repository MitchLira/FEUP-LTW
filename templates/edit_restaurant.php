<form action="../actions/save_restaurant.php" method="post" id="editRestaurant">

    <input type="hidden" name="id" value="<?=$restaurant['id']?>">
   
    <label>Restaurant Name:
        <input type="text" name="name" value="<?=$restaurant['name']?>">
    </label>

    <label>Location:
        <input type="text" name="location" value="<?=$restaurant['location']?>">
    </label>
    
    <label>Price:
        <input type="number" name="price" value="<?=$restaurant['price']?>" min="0" max="1000" step="0.01">
    </label>

    <label>Category(ies):
        <textarea name="categories"><?=$restaurant['categories']?></textarea>
    </label>

    <label>Opening Time:
        <input type="time" name="open" value="<?=$restaurant['open']?>" >
    </label>

    <label>Closing Time:
        <input type="time" name="close" value="<?=$restaurant['close']?>">
    </label>

    <input type="submit" name="submit" value="Save" id="buttonSave">

</form>