/*
**These Require
**For Captcha
**<script src="https://www.google.com/recaptcha/api.js" async defer></script>
**For All pages that use analytics
**<script async src="https://www.googletagmanager.com/gtag/js?id=G-CFCNFKJV69"></script>
*/
function onSubmit(token) {
  document.getElementById("indexform").submit();
}

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-CFCNFKJV69');
