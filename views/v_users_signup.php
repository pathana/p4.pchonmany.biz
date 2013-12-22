<script language="javascript">
    function signUp()
    {   
        if (document.forms[0].first_name.value == "")
        {
            alert("Please enter your first name");
            document.formSignUp.first_name.focus();
            return false;
        }

        if (document.forms[0].username.value == "")
        {
            alert("Please enter a username");
            document.formSignUp.username.focus();
            return false;
        }

        var x = document.forms[0].email.value;
        var atpos=x.indexOf("@");
        var dotpos=x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
        {
            alert("Please enter a valid email address");
            return false;
        }

        if (document.forms[0].password.value == "")
        {
            alert("Please enter a password");
            document.formSignUp.password.focus();
            return false;
        }

        return true;
    }
</script>



<div id="content">

    <h1>Register</h1><p>

        <form id="form0" name="formSignUp" method='POST' action='/users/p_signup' onsubmit="return signUp()">

            First Name*:<br>
            <input type='text' name='first_name' id="firstName" size="50" placeholder="John">
            <br><br>

            Last Name:<br>
            <input type='text' name='last_name' id="lastName" size="50" placeholder="Smith">
            <br><br>

            Username*:<br>
            <input type='text' name='username' id="username" size="50" placeholder="smith2250">
            <br><br>

            Email*:<br>
            <input type='text' name='email' id="email" size="50" placeholder="example@email.com">
            <br><br>

            Password*:<br>
            <input type='password' name='password' id="pass" size="50">
            <p>
            
            <button type='submit' class="submit">Sign Up</button>

        </form>
        
</div>