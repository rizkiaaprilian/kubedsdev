<?=\View::forge('email/header');?>
<p>You must use the link provided within this email to login again.</p>
<p><a href="<?=$url;?>">Click here to create a new password.</a></p>
<p>If you cannot click on the link please copy and paste this link into your browsers address bar:</p>
<p><?=$url;?></p>
<p>If you have received this email and did not reset your password, please inform Kube DS at <a href="mailto:accounts@kubeds.com">this email</a>.</p>
<?=\View::forge('email/footer');?>