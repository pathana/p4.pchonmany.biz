<div id="content">

    <h1>Login</h1><p>

        <form method='POST' action='/users/p_login'>

            Username:<br>
            <input type='text' name='username' size="50">

            <br><br>

            Password:<br>
            <input type='password' name='password' size="50">

            <br>

                <?php if(isset($error)): ?>
                    <div class='error'>
                        Login failed. Please check your username and password.
                    </div>
                    <br>
                <?php endif; ?>

            <button type='submit' class="submit">Log In</button>

        </form>

</div>