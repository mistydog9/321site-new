<?php $pgID = "contact"; ?>
<?php require_once("top.php"); ?>
<%=$h1bar."contact us".$h1barend?>
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="0" CELLSPACING="0">
<TR>
	  <TD WIDTH="50%" class="med" valign="top">Thank you for your form submission. We will be in touch with you shortly.

<%
'pos=InStr(1,Request.Form("comments"),txt,0)
'pass1=Request.Form("pass")
'if Len(pass1)=5 and pass1 = Request.Form("pass2") and pos=0 then
$ip=@$REMOTE_ADDR; 
thebody = "Name:			" + Request.Form("contact_name") + "<br>" 
thebody =thebody+  "Company:		" + Request.Form("company") + "<br>"
thebody =thebody+  "Email:		" + Request.Form("email") + "<br>"
thebody =thebody+  "Phone:		" + Request.Form("Phone") + "<br>"
thebody =thebody+  "IP:		 $ip" 

Set objMail = Server.CreateObject("CDO.Message")
'Set key properties 

objMail.From = "vogl07@msn.com;"  
objMail.To = "vogl07@msn.com;" 
objMail.Subject= "321site Contact Form " + Request.Form("contact_name") + " - " + Request.Form("company") 
objMail.TextBody = thebody
objMail.HTMLBody = thebody  
'Send the email 
objMail.Send 
'Clean-up 
Set objMail = Nothing
'end if 
?>

	  </TD>
	  <TD WIDTH="20" NOWRAP="NOWRAP">&nbsp;</TD>
	  <TD WIDTH="50%"><TABLE WIDTH="100%" BORDER="0" CELLPADDING="0" CELLSPACING="0">
			 <TR>
					<TD BGCOLOR="#333333" ALIGN="CENTER"><TABLE WIDTH="100%" BORDER="0" CELLPADDING="5" CELLSPACING="1">
			 <TR>
					<TD BGCOLOR="#999999" ALIGN="CENTER"><b>2213 Bronson Street &middot; Fort Collins, CO 80526<br>970.402.2781 &middot; <A HREF="mailto:info@321site.com" TARGET="">info@321site.com</A><br><A HREF="321site.vcf">get vCard</A> &middot; <a href="javascript:popup2('cal/index.htm')">virtual visit</a></b></TD>
			 </TR>
			 </TABLE></TD>
			 </TR>
			 </TABLE>


								 </TD>
						  </TR>
						  </TABLE>			 
			 <?php require_once("bot.php"); ?>
		