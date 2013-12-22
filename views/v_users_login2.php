<script language="javascript">
    function login()
    {   

        if (document.forms[0].username.value == "")
        {
            alert("Please enter your username");
            document.formLogin.username.focus();
            return false;
        }

        if (document.forms[0].password.value == "")
        {
            alert("Please enter your password");
            document.formLogin.password.focus();
            return false;
        }

        return true;
    }
</script>


<div id="content">

    <font color="yellow">*Successfully registered. You are now able to login.</font><p>

        <h1>Login</h1><p>

            <form id="form0" name="formLogin" method='POST' action='/users/p_login' onsubmit="return login()">

                Username:<br>
                <input type='text' name='username' id="username" size="50">

                <br><br>

                Password:<br>
                <input type='password' name='password' id="pass" size="50">

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