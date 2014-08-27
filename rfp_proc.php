<?php $pgID = "contact"; ?>
<?php require_once("top.php"); ?>
<h1>contact form submission</h1>
<p>Thank you for your form submission. We will be in touch with you shortly.

<%
'pos=InStr(1,Request.Form("comments"),txt,0)
'pass1=Request.Form("pass")
'if Len(pass1)=5 and pass1 = Request.Form("pass2") and pos=0 then
$ip=@$REMOTE_ADDR; 
thebody = "Name:			" + Request.Form("contact_name") + "<br>" 
thebody =thebody+  "Company:		" + Request.Form("company") + "<br>"
thebody =thebody+  "Email:		" + Request.Form("email") + "<br>"
thebody =thebody+  "Domain:		" + Request.Form("domain") + "<br>"
thebody =thebody+  "Hosting:		" + Request.Form("hosting") + "<br>"
thebody =thebody+  "Keywords:		" + Request.Form("keywords") + "<br>"
thebody =thebody+  "Competitors:		" + Request.Form("competitors") + "<br>"
thebody =thebody+  "Top 5 Sites:		" + Request.Form("top5") + "<br>"
thebody =thebody+  "Colors:		" + Request.Form("color1") + " & " + Request.Form("color2") + "<br>"
thebody =thebody+  "Graphics:		" + Request.Form("gr") + "<br>"
thebody =thebody+  "Describe logo:		" + Request.Form("describe-logo") + "<br>"
thebody =thebody+  "Content:		" + Request.Form("content") + "<br>"
thebody =thebody+  "More Info:		" + Request.Form("moreinfo") + "<br>"
thebody =thebody+  "IP:		 $ip" 
Set objMail = Server.CreateObject("CDO.Message")
'Set key properties 

objMail.From = "vogl07@msn.com;"  
objMail.To = "vogl07@msn.com;" 
objMail.Subject= "321site RFP Form " + Request.Form("contact_name") + " - " + Request.Form("company") 
objMail.TextBody = thebody
objMail.HTMLBody = thebody  
'Send the email 
objMail.Send 
'Clean-up 
Set objMail = Nothing
'end if 
?>
<div style="border: 1px solid #000; float: right; width: 300px; background-color: #fff; padding: 10px; margin-right: 20px;"><b>2213 Bronson Street<br>Fort Collins, CO 80526<br>970.402.2781 &middot; <A HREF="mailto:info@321site.com">info@321site.com</A></b></div>
<?php require_once("bot.php"); ?>
		