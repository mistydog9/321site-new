<?php $pgID = "contact"; ?>
<?php $pgtitle="Fort Collins, CO Web Design & Internet Development Company - Contact 321site.com"; ?>
<?php $pgdesc=""; ?>
<?php $pgkw=""; ?>
<?php require_once("top.php"); ?>
<h1>contact us</h1>
<div style="float: left">
<div style="border: 1px solid #000; float: right; width: 300px; background-color: #fff; padding: 10px; margin-right: 20px;"><b>2213 Bronson Street<br>Fort Collins, CO 80526<br>970.402.2781 &middot; <A HREF="mailto:info@321site.com">info@321site.com</A></b></div>

<div style="float: left; width: 340px;" class="med" >Your online success is in sight with <B>321site.com</B>. Please fill out the form below or give us a call so we can get started right away!</div>
<h2 style="clear: both; margin-top: 20px">Contact Form</h2>
<FORM ACTION="contact_proc2.php" METHOD="post" ID="Form" NAME="Form" STYLE="margin-top: 0px">
<div id="cform">
<TABLE CELLPADDING="1" CELLSPACING="0" BORDER="0" style="width: 500px">
<TR>
      <TD class="caption" nowrap="nowrap"><B>Contact Name</B></TD>
      <TD WIDTH="50%"><INPUT TYPE="TEXT" NAME="contact_name" CLASS="gry"></TD>
      <TD class="caption" width="100" nowrap="nowrap"><B>Company</B></TD>
      <TD WIDTH="50%"><INPUT TYPE="TEXT" NAME="company" CLASS="gry"> </TD>
</TR>
<TR>
      <TD class="caption"><B>Phone</B> </TD>
      <TD> <INPUT TYPE="TEXT" NAME="phone" MAXLENGTH="15" CLASS="gry"></TD>
      <TD class="caption"><B>Email</B> </TD>
      <TD> <INPUT TYPE="TEXT" NAME="email" CLASS="gry"></TD>
</TR>
<TR>
      <TD class="caption"> <B>Message</B> </TD>
      <TD colspan="3"> <TEXTAREA NAME="message" ROWS="6" COLS="41" CLASS="gry" WRAP="SOFT"></TEXTAREA>
      </TD>
</TR>
<TR>
      <TD></TD>
      <TD COLSPAN="3"><INPUT TYPE="SUBMIT" NAME="Submit1" VALUE="Submit" CLASS="btn"> <INPUT TYPE="RESET" NAME="Reset1" CLASS="btn"></TD>
</TR>
</TABLE></FORM>
</div>
</div>						  
<?php require_once("bot.php"); ?>
		