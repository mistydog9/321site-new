<?php $pgID = "contact"; ?>
<?php $pgtitle=""; ?>
<?php $pgdesc=""; ?>
<?php $pgkw=""; ?>
<?php require_once("top.php"); ?>
<b class="h3">Request For Proposal Form</b><br>
To help us get started with your project, please provide as much information as possible in the form below. Skip sections not be applicable to your site.
<FORM ACTION="http://ns1.cgihosting.net/cgi-bin/FormHandler.cgi" METHOD="POST" ID="form1" NAME="form1">
<INPUT TYPE="HIDDEN" NAME="recipient" VALUE="info@321site.com"><INPUT TYPE="HIDDEN" NAME="env_report" VALUE="REMOTE_HOST,HTTP_USER_AGENT"> 
<INPUT TYPE="HIDDEN" NAME="return_link_url" VALUE="http://www.321site.com"><INPUT TYPE="HIDDEN" NAME="return_link_title" VALUE="return to 321site.com home"> 
<TABLE BORDER="0" CELLPADDING="1" CELLSPACING="0">
<TR>
	  <TD BGCOLOR="#333333"> <TABLE WIDTH="100%" BORDER="0" CELLPADDING="5" CELLSPACING="0" BGCOLOR="#E1E1E1">
			 <TR>
					<TD><TABLE WIDTH="430" BORDER="0" CELLPADDING="0" CELLSPACING="0">
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3"><B class="h3">Goals</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3"> Define the objectives you wish to establish with your site.<BR>Ex. Awareness of a particular expertise, e-commerce, customer service, etc. </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" WIDTH="120">&nbsp;</TD>
								 <TD COLSPAN="2"><TEXTAREA NAME="goals" ROWS="3" COLS="40" WRAP="SOFT"></TEXTAREA>
								 </TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Approach</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3"> Describe your site's intended audience, strategy, voice, tone, image &amp; personality </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"></TD>
								 <TD COLSPAN="2"><TEXTAREA NAME="approach" ROWS="3" COLS="40" WRAP="SOFT"></TEXTAREA>
								 </TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Reference URLs</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP">Top 5 Competitors</TD>
								 <TD COLSPAN="2"><TEXTAREA NAME="url_comp" ROWS="3" COLS="40" WRAP="SOFT"></TEXTAREA>
								 </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP">Top 5 sites you like <BR>
										&amp; why</TD>
								 <TD COLSPAN="2"><TEXTAREA NAME="url_fav" ROWS="3" COLS="40" WRAP="SOFT"></TEXTAREA>
								 </TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Colors</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"><A HREF="javascript:pick()">web-safe</A><BR>
										<A HREF="javascript:pick2()">javascript</A></TD>
								 <TD COLSPAN="2"><INPUT TYPE="TEXT" CLASS="form" NAME="color_primary" SIZE="7"> Primary<BR>
										<INPUT TYPE="TEXT" CLASS="form" NAME="color_secondary" SIZE="7"> Secondary<BR>
										<INPUT TYPE="TEXT" CLASS="form" NAME="color_background" SIZE="7"> Background<BR>
										<INPUT TYPE="TEXT" CLASS="form" NAME="color_text" SIZE="7"> Text </TD>
						  </TR>
<!--<TR>
  <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
	 <B class="h3">Fonts</B></TD>
</TR>
<TR>
  <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
</TR>
<TR>
  <TD VALIGN="TOP">size &amp; face</TD>
  <TD COLSPAN="2"><INPUT TYPE="TEXT" CLASS="form" NAME="font_head"> Headings<BR>
	 <INPUT TYPE="TEXT" CLASS="form" NAME="font_body"> Body Copy<BR>
	 <INPUT TYPE="TEXT" CLASS="form" NAME="font_logo"> Logo<BR>
  </TD>
</TR> -->
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Hosting</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"></TD>
								 <TD COLSPAN="2"><INPUT TYPE="RADIO" NAME="hosting" VALUE="Needed">Needed or <INPUT TYPE="RADIO" NAME="hosting" VALUE="Secured">Already Secured<BR>
										<INPUT TYPE="RADIO" NAME="server" VALUE="NT"> Windows NT Server or <INPUT TYPE="RADIO" NAME="server" VALUE="Unix"> Unix Server (cgi scripting)<BR>
										<INPUT TYPE="CHECKBOX" NAME="Secure Server" VALUE="needed"> Secure Server Access</TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Javascripts</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"></TD>
								 <TD> <INPUT TYPE="CHECKBOX" NAME="js" VALUE="animation"> animation<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="bookmark"> bookmark<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="browser detect"> browser detect<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="calculator"> calculator <BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="calendar"> calendar<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="color chooser"> color chooser<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="cookies"> cookies<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="graph"> dynamic graph<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="validation"> form validation<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="trails"> mouse trails<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="transitions"> page transitions<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="password"> password protection</TD>
								 <TD><INPUT TYPE="CHECKBOX" NAME="js" VALUE="popup menus"> popup menus<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="popup windows"> popup windows<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="pulldown menu"> pulldown menu<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="rollovers"> rollovers<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="quiz"> quiz<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="scrolling text"> scrolling text<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="shopping cart"> shopping cart<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="site search"> site search<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="slideshows"> slideshows<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="sound"> sound<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="survey"> survey<BR>
										<INPUT TYPE="CHECKBOX" NAME="js" VALUE="time/date">time/date</TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP">Explain javascript needs</TD>
								 <TD COLSPAN="2"><TEXTAREA NAME="js_needed" ROWS="3" COLS="40" WRAP="SOFT"></TEXTAREA>
								 </TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Development</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"></TD>
								 <TD COLSPAN="2"><INPUT TYPE="CHECKBOX" NAME="dev"> Active Server Page includes<BR>
										<INPUT TYPE="CHECKBOX" NAME="dev"> Dynamic database access Access SQL Server<BR>
										<INPUT TYPE="CHECKBOX" NAME="dev"> Form handlers<BR>
										<INPUT TYPE="CHECKBOX" NAME="dev"> E-commerce<BR>
										<INPUT TYPE="CHECKBOX" NAME="dev"> XML<BR>
										<INPUT TYPE="CHECKBOX" NAME="dev"> Java<BR>
										<INPUT TYPE="CHECKBOX" NAME="dev"> Other: <INPUT TYPE="TEXT" CLASS="form" NAME="js_other"> </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP">Explain development needs</TD>
								 <TD COLSPAN="2"><TEXTAREA NAME="dev_needs" ROWS="3" COLS="40" WRAP="SOFT"></TEXTAREA>
								 </TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Forms</B></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3"> List below name of form(s), fields (* denotes required), E-mail address(es) </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"></TD>
								 <TD COLSPAN="2"><TEXTAREA NAME="forms" ROWS="3" COLS="40" WRAP="SOFT"></TEXTAREA>
								 </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP">Other form features</TD>
								 <TD COLSPAN="2"> <INPUT TYPE="CHECKBOX" NAME="form_features" VALUE="response"> Auto response<BR>
										<INPUT TYPE="CHECKBOX" NAME="form_features" VALUE="database"> Written to Database: <INPUT TYPE="RADIO" NAME="database" VALUE="access">MS Access 
										<INPUT TYPE="RADIO" NAME="database" VALUE="access">Sequel Server</TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">E-Marketing</B> (META Tags)</TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"></TD>
								 <TD COLSPAN="2"><INPUT TYPE="CHECKBOX" NAME="emarketing"> Submit site to top search engines </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP"></TD>
								 <TD COLSPAN="2">If E-Marketing option is checked, please fill out <A HREF="meta.php">this form</A>. </TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="5"><BR>
										<B class="h3">Other materials we need from you</B> (where applicable)</TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP" COLSPAN="3" BGCOLOR="#000000"><IMG SRC="images/clear.gif" BORDER="0" WIDTH="1" HEIGHT="1"></TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP">&nbsp;</TD>
								 <TD COLSPAN="2">Please e-mail these to <A HREF="mailto:info@321site.com">info@321site.com</A> as attachments:<BR>
										Logo, Site Map, Content, Photography/Graphics<BR>
										graphics (.jpg, .gif, .psd, .bmp, .tiff, .eps)<BR>
										text (word, text, pdf) </TD>
						  </TR>
						  <TR>
								 <TD COLSPAN="3"><TABLE BORDER="0">
										<TR>
											  <TD COLSPAN="4"><B class="h3">Contact Information</B> (*=required fields)</TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">Company:</TD>
											  <TD COLSPAN="3"> <INPUT TYPE="TEXT" CLASS="form" NAME="company" SIZE="49">* </TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">Industry:</TD>
											  <TD COLSPAN="3"> <INPUT TYPE="TEXT" CLASS="form" NAME="bus_type" SIZE="49"> </TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">First Name:</TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="first_name" SIZE="15">*</TD>
											  <TD ALIGN="RIGHT">Last Name:</TD>
											  <TD><INPUT TYPE="TEXT" CLASS="form" NAME="last_name" SIZE="15">*</TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">Position:</TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="position" SIZE="15"></TD>
											  <TD ALIGN="RIGHT">E-mail: </TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="email" SIZE="15">*</TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">Day Phone: </TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="phone" SIZE="15"></TD>
											  <TD ALIGN="RIGHT">Eve Phone: </TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="eve_phone" SIZE="15"></TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">Address:</TD>
											  <TD><INPUT TYPE="TEXT" CLASS="form" NAME="address1" SIZE="15"></TD>
											  <TD ALIGN="RIGHT">Address 2:</TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="address2" SIZE="15"></TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">City: </TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="city" SIZE="15"></TD>
											  <TD ALIGN="RIGHT">State: </TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="state" SIZE="15"></TD>
										</TR>
										<TR>
											  <TD ALIGN="RIGHT" WIDTH="90">Zip: </TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="zip" SIZE="15"></TD>
											  <TD ALIGN="RIGHT">Country:</TD>
											  <TD> <INPUT TYPE="TEXT" CLASS="form" NAME="country" SIZE="15"></TD>
										</TR>
										<TR>
											  <TD ALIGN="CENTER" COLSPAN="4">Best way to contact me: <INPUT TYPE="RADIO" NAME="contact_by" VALUE="email" CLASS="grey">E-Mail 
													 <INPUT TYPE="RADIO" NAME="contact_by" VALUE="mail" CLASS="grey"> Mail <INPUT TYPE="RADIO" NAME="contact_by" VALUE="day_phone" CLASS="grey"> Day Phone
													 <INPUT TYPE="RADIO" NAME="contact_by" VALUE="eve_phone" CLASS="grey"> Eve Phone</TD>
										</TR>
										</TABLE>
								 </TD>
						  </TR>
						  <TR>
								 <TD VALIGN="TOP">&nbsp;</TD>
								 <TD COLSPAN="2"><INPUT TYPE="SUBMIT" NAME="Submit" VALUE="Submit" class="btn"> <INPUT TYPE="RESET" NAME="Reset1" class="btn"></TD>
						  </TR>
						  </TABLE>
					</TD>
			 </TR>
			 </TABLE>
	  </TD>
</TR>
</TABLE>
</FORM>

<?php require_once("bot.php"); ?> 