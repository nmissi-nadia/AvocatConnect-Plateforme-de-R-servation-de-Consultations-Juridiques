<!DOCTYPE html>
<html>

<head>
    <title>AVOCATCONNECT</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/userlogin.css">

</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="" id="form1">
                <h1>Créer un compte</h1>
                <div class="social-container">

                </div>
                <span> Use your email for registration</span>
                <input type="text" name="name" placeholder="Name" id="name" required>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="phone" name="phone" placeholder="Phone Number" id="phone" required>
                <input type="city" name="city" placeholder="City" id="city" required>
                <input type="age" name="age" placeholder="Age" id="age" required>


                <button id="button1">Inscrire</button>

                <!-- <input type="submit" value="Submit" id="button1"> -->
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" id="form2">
                <h1 id="head">Se connecter</h1>

                <span>Use your account</span>
                <input type="email" name="email" placeholder="Email" id="email-log" required>
                <input type="password" name="password" placeholder="Mot de passe" id="password-log" required>
                <select style="background-color: #ffffff;    width: 60px;" id="role">
                    <option value="user">Client</option>
                    <option value="lawer">Avocat</option>

                </select>

                <button id="button2">Connecter</button>
                <!-- <input type="submit" value="Submit" id="button2"> -->

            </form>

        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>

                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>

                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your details and start booking with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>

                    <a href="avocat/avocatreg.php">
                        <h3 class="rounded-[20px] border-[1px] border-[solid] border-[#20a87e] bg-[#20a87e] text-[#FFFFFF] text-[12px] font-bold px-[45px] py-[12px] tracking-[1px] uppercase [transition:transform_80ms_ease-in]" h>Inscription d'un avocat</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>



</body>

</html>

<script type="text/javascript" src="../assets/js/userloginscript.js">






</script>