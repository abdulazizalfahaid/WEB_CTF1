<link rel="stylesheet" type="text/css" href="style.css">
<title>Login Page</title>
<form class="box" action="flag.php" method="get">
    <h1> Come On We are not going to give it to you this is easily </h1>

    <a href="source.txt">Source code</a>

    <input type="password" name="passwd" placeholder="Password" value="TryHarder">
    <input type="submit" value="flag"  />
</form>

<comment Can you find the password ? >

<?php

if (isset($_GET['passwd'])) {

        if (hash("md5", $_GET['passwd']) == '3ccc8c56eff7de06ee9b597ae88b5df0')
        {
            echo "<h1>Corect password</h1>";
            echo "<h1>Can you access Admin page?</h1>";

            $flag = 'FLAG{CYS-club_Challenges2}';
            if(!isset($_COOKIE['jwt'])) {
                setcookie('jwt', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwicm9sZSI6InVzZXIifQ.FczQeudCLTHbFxFB9feQV8PJw0E9KSe1Y9qltMmlhoY',time()+3600);
                $_COOKIE['jwt'] = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwicm9sZSI6InVzZXIifQ.FczQeudCLTHbFxFB9feQV8PJw0E9KSe1Y9qltMmlhoY';
            }
            if ($_COOKIE['jwt'] ==='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwicm9sZSI6ImFkbWluIn0.oO-JzNoRi3nYcn5dy1_MH1FhDQFJdiAqBM2AFGMqZkY'){
                echo "<h1>FLAG : CYS{EoP_Is_@wS0me_W1tH_js0N_t0kEnZ}</h1>";

            }else echo "<h1>Check your c00kies </h1>";

        } else {
            echo "<h1>Alert ! : Intruder has been detected </h1>";
        }
}
?>