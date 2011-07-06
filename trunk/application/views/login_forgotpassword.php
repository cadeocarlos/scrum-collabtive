<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" type="image/ico" href="/images/favicon.ico" />
    <title>Scrumtive</title>
    <link href="<?php echo base_url();?>styles.css" type="text/css" media="screen" rel="stylesheet" />
    <style type="text/css">
        img, div { behavior: url(iepngfix.htc) }
    </style>
  </head>
  <body id="login">
    <div id="wrappertop"></div>

    <div id="wrapper">
      <div id="content">
        <div id="header">
            <h1><a href="http://www.freelancesuite.com/demo/"><img src="<?php echo base_url();?>images/logo.png" alt="FreelanceSuite"></a></h1>
        </div>
        <div id="darkbanner" class="banner320">
            <h2>Forgot Password</h2>
        </div>
        <div id="darkbannerwrap"></div>
        <form name="form1" method="post" action="forgot.php">
            <fieldset class="form">
              <p>Can't remember your password? No problem. Enter your e-mail address below and we will e-mail you a new password. You can change the temporary password later.</p><br>
              <p>
                <label for="user_name">E-Mail:</label>
                <input name="user_name" id="user_name" type="text" />
              </p>
              <button type="submit" class="positive" name="Submit">
                  <img src="<?php echo base_url();?>images/key.png" alt="Announcement"/>Request New Password
              </button>
           </fieldset>
        </form>
      </div>
    </div>

    <div id="wrapperbottom_branding">
        <div id="wrapperbottom_branding_text">By
            <a href="http://www.freelancesuite.com" style='text-decoration:none'>Freelance Suite</a>.
            <a href="http://www.freelancesuite.com" style='text-decoration:none'>Project, Client & Billing management</a>
        </div>
    </div>
  </body>
</html>