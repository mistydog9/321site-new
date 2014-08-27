<?php $pgID = "starter"; ?>
<?php $pgtitle="website starter form - 321site.com"; ?>
<?php $pgdesc=""; ?>
<?php $pgkw=""; ?>
<?php require_once("top.php"); ?>
<h1>website starter form</h1>
<p>Please provide us with as much information as you can, so we can accurately and efficiently build you an informative, effective website that meets your high standards.
<p>Please email completed doc and any related helpful info as an attachment to: info@321site.com. 
<p>Questions? Please email or call us at 970.402.2781. </p>


	 <FORM ACTION="rfp_proc.php" METHOD="post" ID="Form" NAME="Form"
	  STYLE="margin-top: 0px"> 
		<DIV ID="cform"> 
		  <TABLE CELLPADDING="1" CELLSPACING="0" BORDER="0" STYLE="width: 550px">
			 
			 <TR> 
				<TD CLASS="caption" NOWRAP="nowrap"><B>Contact Name</B></TD> 
				<TD WIDTH="50%"><INPUT TYPE="TEXT" NAME="contact_name"
				  CLASS="gry"></TD> 
				<TD CLASS="caption" WIDTH="100" NOWRAP="nowrap"><B>Company</B></TD>
				
				<TD WIDTH="50%"><INPUT TYPE="TEXT" NAME="company" CLASS="gry">
				  </TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption"><B>Phone</B> </TD> 
				<TD> <INPUT TYPE="TEXT" NAME="phone" MAXLENGTH="15"
				  CLASS="gry"></TD> 
				<TD CLASS="caption"><B>Email</B> </TD> 
				<TD> <INPUT TYPE="TEXT" NAME="email" CLASS="gry"></TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption">Domain Name:</TD> 
				<TD><INPUT TYPE="TEXT" NAME="domain" CLASS="gry"></TD> 
				<TD CLASS="caption">Hosting?</TD> 
				<TD><INPUT TYPE="TEXT" NAME="hosting" CLASS="gry"></TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption" VALIGN="TOP"></TD> 
				<TD COLSPAN="3"><B CLASS="h3">Keywords</B><BR>List any words and
				  phrases your customers might use to find you on the Web - location, services,
				  products, etc. We can help build your list thru our industry &amp; competitor
				  research.<BR><TEXTAREA NAME="keywords" ROWS="4" COLS="41" CLASS="gry" WRAP="SOFT"></TEXTAREA></TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption"></TD> 
				<TD COLSPAN="3"><B CLASS="h3">Competitor Websites </B><BR>Please
				  list links to your top 5 competitors or similar practice.<BR><TEXTAREA NAME="competitors" ROWS="4" COLS="41" CLASS="gry" WRAP="SOFT"></TEXTAREA></TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption"></TD> 
				<TD COLSPAN="3"><B CLASS="h3">Top 5 Websites You Like, and
				  Why</B><BR><TEXTAREA NAME="top5" ROWS="4" COLS="41" CLASS="gry" WRAP="SOFT"></TEXTAREA></TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption">&nbsp;</TD> 
				<TD COLSPAN="3"><B CLASS="h3">Logo, Photos &amp; Graphic Files
				  </B><BR>Please check (X) the options below that apply to you. <BR><INPUT
				  TYPE="CHECKBOX" VALUE="have-logo" NAME="gr"> I have a digital logo to use.
				  Please email them to us as attachments. <BR> &nbsp;&nbsp; Accepted file formats
				  include jpg, gif, png, pdf, psd, ai, bmp, eps, tif.<BR><INPUT TYPE="CHECKBOX"
				  VALUE="hard-copy" NAME="gr"> I only have a hard copy. Please mail it to us and
				  we can scan it. <BR><INPUT TYPE="CHECKBOX" VALUE="create-logo" NAME="gr">
				  Please create a logo for me.<BR> &nbsp;&nbsp; Describe how you would like
				  it to look, or provide a sample from the web. <BR><TEXTAREA NAME="describe-logo" ROWS="3" COLS="41" CLASS="gry" WRAP="SOFT"></TEXTAREA><BR><BR><INPUT TYPE="CHECKBOX" VALUE="i-have-photos" NAME="gr"> I
				  own photos I wish to use. Please email them to us as attachments. <BR><INPUT
				  TYPE="CHECKBOX" VALUE="select-photos" NAME="gr"> Please select stock
				  photography for me. </TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption">&nbsp;</TD> 
				<TD COLSPAN="3"><B CLASS="h3">Preferred Colors</B> <BR>Please use
				  the color chooser to pick your preferred colors as accurately as
				  you can. If you provide us your logo
				  or collateral, we can just sample colors from that, or use our best
				  judgement.<div style="margin-top: 6px">
                Primary <input id="color1" type="color" name="color1" value="#006699" style="width: 70px;" class="color">
 Secondary <input id="color2" type="color" name="color2" value="#990000" data-hex="true" style="width: 70px;" class="color"> <br></div>
                  </TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption">&nbsp;</TD> 
				<TD COLSPAN="3"><br><B CLASS="h3">Your Website Content</B><BR>Please
				  provide as much information as you can under the headings below, or create your
				  own page headings. Use as much space as you need. Don't worry about formatting.
				  We can help improve the content, writing, organization and flow as needed, and
				  optimize for search engines.<BR>Home, Products, Services, About,
				  Testimonials, Clients, Partners, Contact<BR><TEXTAREA NAME="content" ROWS="6" COLS="41" CLASS="gry" WRAP="SOFT"></TEXTAREA></TD> 
			 </TR> 
			 <TR> 
				<TD CLASS="caption"> </TD> 
				<TD COLSPAN="3"> <B CLASS="h3">Additional Info</B><BR><TEXTAREA NAME="moreinfo" ROWS="6" COLS="41" CLASS="gry" WRAP="SOFT"></TEXTAREA> </TD> 
			 </TR> 
			 <TR> 
				<TD></TD> 
				<TD COLSPAN="3"><INPUT TYPE="SUBMIT" NAME="Submit1" VALUE="Submit"
				  CLASS="btn"> <INPUT TYPE="RESET" NAME="Reset1" CLASS="btn"></TD> 
			 </TR> 
		  </TABLE></DIV> </FORM>

<?php require_once("bot.php"); ?> 