<form action="../actions/action_create_account.php" method="post">
    <h1><a>Create Account</a></h1>
    <p>
        <label> Username: 
            <input type="text" name="username" required> 
        </label>
    </p>
    <p class="info"></p>
    <p>
        <label> Name: 
            <input type="text" name="name" required> 
        </label>
    </p>
    <p>
        <label> Email: 
            <input type="text" name="email" required> 
        </label>
    </p>
    <p>
        <label> Country: 
            <input type="text" name="country" required> 
        </label>
    </p>
    <p>
        <label> Birthday: 
            <input type="date" name="birthday" required> 
        </label>
    </p>
    <p>
        <label> Password: 
            <input type="password" name="password" required> 
        </label>
    </p>
    <input type="submit" name="submit" value="Create" disabled>
</form>