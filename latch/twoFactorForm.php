<?php
/*
Latch SquirrelMail extension - Integrates Latch into the SquirrelMail authentication process.
Copyright (C) 2013 Eleven Paths

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public
License along with this library; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<html>
    <head>
        <style>
            .twoFactorContainer { display:block; width:300px; margin: 5% auto 0 auto; text-align: center; border: solid 1px rgb(184, 184, 184); border-radius:5px}
            .twoFactorHeader {float:left; background: #00b9be; color: #FFF; width:100%; border-top-left-radius: 5px; border-top-right-radius: 5px; font-family: sans-serif;}
            .twoFactorHeader img {width: 45px; height: auto; float:left; margin-top: 5px; margin-left:20px}
            .twoFactorHeader h3 {float: left; margin-left: 10px;}
            .twoFactorForm {clear:left; padding-top:10px;}
            input {margin-top:10px}
            input[type="submit"] {width:65px;}
        </style>
    </head>
    <body>
        <div class="twoFactorContainer">
            <div class="twoFactorHeader">
                <img src="../plugins/latch/symbol.png">
                <h3>One-time password</h3>
            </div>
            <div class="twoFactorForm">
                <form method="POST" action="redirect.php">
                <label for="nameTwoFactor">Insert your one-time password:</label>
                <input type="text" name="latchTwoFactor" id="latchTwoFactor">
                <input type="hidden" name="login_username" value="<?php echo htmlspecialchars($_POST['login_username']); ?>">
                <input type="hidden" name="secretkey" value="<?php echo htmlspecialchars($_POST['secretkey']); ?>">
                <input type="hidden" name="js_autodetect_results" value="<?php echo htmlspecialchars($_POST['js_autodetect_results']); ?>">
                <input type="hidden" name="just_logged_in" value="<?php echo htmlspecialchars($_POST['just_logged_in']); ?>">
                <button type="submit" name="Submit">Submit</button>
            </form>
            </div>
        </div>
    </body>
</html>

