require=function o(e,r,t){function a(s,i){if(!r[s]){if(!e[s]){var d="function"==typeof require&&require;if(!i&&d)return d(s,!0);if(n)return n(s,!0);var l=new Error("Cannot find module '"+s+"'");throw l.code="MODULE_NOT_FOUND",l}var c=r[s]={exports:{}};e[s][0].call(c.exports,function(o){var r=e[s][1][o];return a(r?r:o)},c,c.exports,o,e,r,t)}return r[s].exports}for(var n="function"==typeof require&&require,s=0;s<t.length;s++)a(t[s]);return a}({"translations/en_US/login":[function(o,e,r){e.exports={"login.title":"Log in to CloudFlare","login.forgot_password":"Forgot your password?","login.remember_me":"Remember me","login.two_factor.authy":"Authy Token","login.two_factor.title":"Two-Factor Authentication","login.two_factor.description":"Your token will be generated in the [Authy app](https://www.authy.com/).","login.two_factor.enter_token":"Enter your Authy token","login.two_factor.enable_description":"One of your organizations has required that you enable Two-Factor authentication. Please do so before you continue to sign in.","login.let_us_know_youre_human":"Let us know you're human","login.two_factor.remember_me":"Remember this computer","login.reset_password":"Reset Password","login.new_password":"New password","login.new_password_confirm":"Confirm password","login.reset_code":"Reset code","login.error.form_expired":"Form has expired. Please refresh and try again.","login.error.no_email":"Please enter your account e-mail address to log in.","login.error.invalid_email":"Please correct your e-mail address.","login.error.no_password":"Please enter your password to log in","login.error.two_factor.cookie_expired":"Two-factor authentication ticket is expired. Please log in again.","login.error.two_factor.invalid_password":"Two-factor ticket found, but your password is incorrect.","login.error.two_factor.invalid_token":"Invalid authentication token entered!\n\nOpen the Authy app on your phone, select the button in the top left corner, and select CloudFlare to see your authentication token.","login.error.two_factor.mismatch":"Mismatched email address and two-factor information. Please try again.","login.error.two_factor.invalid_email_token_combo":"Invalid two-factor ID and email address combination.","login.error.two_factor.no_token":"Missing two factor authentication token.","login.error.captcha.empty":"Please fill out the CAPTCHA and try again.","login.error.captcha.invalid":"The CAPTCHA entered was incorrect. Please try again.","login.error.email_password_mismatch":"Email address/password do not match.","login.error.beta_requirement":"Sorry, you must be part of the beta to log in!","forgot_password.title":"Forgot Your Password?","forgot_password.description":"Enter your email and a website you have on CloudFlare.","forgot_password.a_website":"One of your websites (if applicable)","forgot_password.error.no_account_found":"No account found with that email address and domain combination.","forgot_password.error.provide_a_domain":"Please provide a domain that you have signed up with in the past.","forgot_password.error.not_allowed":"Lost password retrieval is not allowed for that account.","forgot_password.error.unknown_error":"An unknown error has occurred and has been logged. We will fix this problem promptly and apologize for the inconvenience.","forgot_password.error.invalid_email":"Invalid email address","forgot_password.error.invalid_website":"Invalid website","forgot_password.info":"If you do not have any websites in your account, please leave the website field blank.","forgot_password.instructions":"We have sent a CloudFlare Password Assistance e-mail containing instructions on how to reset your lost password. Look for the subject line 'Instructions for changing your CloudFlare password' from address no-reply@cloudflare.com.","reset_password.title":"Reset Your Password","reset_password.description":"Check your email for the password reset code. Then click the link or enter the reset code below to reset your password.","reset_password.error.password_mismatch":"Passwords do not match","reset_password.error.invalid_code_format":"Invalid reset code","reset_password.error.invalid_code":"Invalid code entered. Did you typo or use an expired code?","reset_password.error.expired_code":"Code has expired. Please re-submit the forgot password form.","reset_password.error.weak_password":"Password is too weak. Please choose a stronger password.","reset_password.confirmation":"Your new password has been set. Welcome back!"}},{}]},{},[]);