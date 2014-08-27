<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<?php $gutter = "<TD BACKGROUND=images/bk_dotted_gry.gif><IMG SRC=images/clr.gif WIDTH=21 HEIGHT=1 BORDER=0></TD>"; 
$inmenu = "<TABLE WIDTH=100% BORDER=0 CELLPADDING=5 CELLSPACING=1><TR><TD BGCOLOR=#666666 COLSPAN=4 BACKGROUND=images/bk_bar.gif><B CLASS=h3><FONT COLOR=#FFFFFF>INsite: News & Views </FONT></B><SPAN CLASS=footer>(click a topic below for details)</SPAN></TD></TR><TR><TD BGCOLOR=#FFFFFF VALIGN=TOP NOWRAP><B><A HREF=insite.php>Overview</A></B></TD><TD BGCOLOR=#FFFFFF VALIGN=TOP NOWRAP><B><A HREF=web.php>Why a Web site?</A></B></TD><TD BGCOLOR=#FFFFFF VALIGN=TOP NOWRAP><B><A HREF=work.php>Does the Web work?</A></B></TD><TD WIDTH=100% > &nbsp;</TD></TR></TABLE><br>";
$h1bar="<h1>";
$h1barend="</h1>";
?>
<?php if($pgtitle == "") { 
$pgtitle="Web Design &amp; Development Fort Collins Colorado: 321site.com - innovative, efficient, affordable";
} ?>
<?php if ($pgdesc == "") { 
$pgdesc="321site.com is your 1-stop shop for innovative, interactive Web services at unbeatable rates.";
} ?>
<?php if ($pgkw == "") { 
$pgkw="web design development multimedia asp, cold fusion, javascript pictures innovative affordable efficient inexpensive, web page, web site, WEB SITE, internet developer, database, design, brochures, business cards, traffic, marketing, graphic design, redesign, development, documentation, programming, solutions, support, content management, digital streaming video, technology, Indiana Fort Collins Loveland Colorado Fort Lauderdale Florida Denver Greeley Palm Beach Miami South Bend, Indianapolis Cincinnati Columbus Pittsburgh, San Diego, Los Angeles, Philadelphia, Chicago, Portland, Milwaukee, San Francisco, Illinois, Houston,New York,Detroit,Dallas, Phoenix, San Antonio";
} ?>
 <head>
<title><?php echo $pgtitle; ?></title>
<link rel="stylesheet" href="scripts/321.css" type="text/css" />
	<META NAME="description" CONTENT="<?php response.write(pgkw) ?>">
	<META NAME="keywords" CONTENT="<?php response.write(pgkw) ?>">
<SCRIPT LANGUAGE="JavaScript" SRC="scripts/scripts.js"></SCRIPT>
<script type="text/javascript" src="dropdown.js"></script>

<?php if pgID = "home") { ?>
<script type="text/javascript" src="/scripts/jquery-1.5.js"></script>
<script type="text/javascript" src="/scripts/coin-slider.min.js"></script>
<link rel="stylesheet" href="/scripts/coin-slider-styles.css" type="text/css" />
<?php elseif ($pgID = "resources") { ?>
<link rel="stylesheet" href="/scripts/tabs.css" type="text/css" media="screen" />
<script type="text/javascript" src="/scripts/jquery-1.5.js"></script>
<script>
	  // When the document loads do everything inside here ...
	  $(document).ready(function(){
		// When a link is clicked
		$("a.tab").click(function () {
			// switch all tabs off
			$(".active").removeClass("active");
			// switch this tab on
			$(this).addClass("active");
			// slide all content up
			$(".content").slideUp();
			// slide this content up
			var content_show = $(this).attr("title");
			$("#"+content_show).slideDown();
		});
	  });
  </script>
<?php elseif ($pgID = "starter") { ?>
<script type="text/javascript" src="/scripts/jquery-1.5.js"></script>
   <script type="text/javascript" src="/scripts/mColorPicker.js"></script>
    <script type="text/javascript" charset="UTF-8">
      $(document).ready(function () {

        $('form#Form').bind('submit', function () {

          alert($(this).serialize());
          return false;
        });
        $('#color1').bind('change', function () {

          $('p').css('background-color', $(this).val());
        });
        $('#color2').bind('colorpicked', function () {
        });
        $('#green').bind('click', function () {

          $.fn.mColorPicker.addToSwatch('#315F15');
        });
		);
      });
    </script>

<?php } ?>

</head>
<body>
<center>

<div class="ntop">
<div class="ntop3"><div class="toplinks"><a href="index.php" class="footer">Home</a> | <a href="#" class="footer">Login</a> | <a href="contact.php" class="footer">Contact</a></div>
</div>
<div class="bknav">
<div class="navdiv"><dl class="dropdown"><dt id="zer-ddheader" onMouseOver="ddMenu('zer',1)" onMouseOut="ddMenu('zer',-1)"><a href="why.php">COMPANY</a></dt>
<dd id="zer-ddcontent" onMouseOver="cancelHide('zer')" onMouseOut="ddMenu('zer',-1)" style="width:130px;">
<ul>
<li><a href="why.php">why 321site?</a></li>
<li><a href="white.php">white papers</a></li>
<li><a href="insite.php">INsite news</a></li>
<li><a href="partners.php">our partners</a></li></ul></dd></dl>
<dl class="dropdown"><dt id="one-ddheader" onMouseOver="ddMenu('one',1)" onMouseOut="ddMenu('one',-1)"><a href="solutions.php">SERVICES</a></dt>
<dd id="one-ddcontent" onMouseOver="cancelHide('one')" onMouseOut="ddMenu('one',-1)" style="width:130px;">
<ul>
<li><a href="solutions.php">overview</a></li>
<li><a href="strategic.php">strategic solutions</a></li>
<li><a href="creative.php">creative solutions</a></li>
<li><a href="technical.php">technical solutions</a></li></ul></dd></dl>
<dl class="dropdown"><dt id="two-ddheader" onMouseOver="ddMenu('two',1)" onMouseOut="ddMenu('two',-1)"><a href="case.php">CLIENTS</a></dt>
<dd id="two-ddcontent" onMouseOver="cancelHide('two')" onMouseOut="ddMenu('two',-1)" style="width:130px;">
<ul>
<li><a href="case.php">case studies</a></li>
<li><a href="portfolio.php">Web gallery</a></li>
<li><a href="test.php">testimonials</a></li>
<li><a href="resources.php">resources</a></li></ul></dd></dl>
<dl class="dropdown"><dt id="thr-ddheader" onMouseOver="ddMenu('thr',1)" onMouseOut="ddMenu('thr',-1)"><a href="contact.php">CONTACT</a></dt>
<dd id="thr-ddcontent" onMouseOver="cancelHide('thr')" onMouseOut="ddMenu('thr',-1)" style="width:130px;">
<ul>
<li><a href="contact.php">contact form</a></li>
<li><a href="rfp.php">website starter form</a></li>
<li><a href="careers.php">careers</a></li></ul></dd></dl></span>
</div>
<div class="logo2"><a href="index.php"><img src="images/logo3.gif" width="297" height="38" alt="321site.com - innovative web solutions." border="0"></a></div>
</div>

<div class="maincol">
<div class="rightcol1"><IMG SRC="images/p_<%=$pgID?>.jpg" ALT="321site.com - <%=$pgID?>" WIDTH="172" HEIGHT="115" class="rtpic"><?php switch ($pgID): 
Case ("insite" || "why" || "white" || "partners"): ?>
<div  class=off id="linkaa" ONMOUSEOVER="linkaa.className='on'" ONMOUSEOUT="linkaa.className='off'"  ONCLICK="window.location='why.php';">why 321site.com</div>
<div class=off id="linkb" ONMOUSEOVER="linkb.className='on'" ONMOUSEOUT="linkb.className='off'"  ONCLICK="window.location='white.php';">white papers</div>
<div  class=off id="linkc" ONMOUSEOVER="linkc.className='on'" ONMOUSEOUT="linkc.className='off'"  ONCLICK="window.location='insite.php';">INsite news</div>
<div class=off id="linkd" ONMOUSEOVER="linkd.className='on'" ONMOUSEOUT="linkd.className='off'"  ONCLICK="window.location='partners.php';">our partners</div>
<?php break;
Case ("solutions" || "strategic" || "creative" || "technical"): ?>
<div class=off id="linka" ONMOUSEOVER="linka.className='on'" ONMOUSEOUT="linka.className='off'"  ONCLICK="window.location='solutions.php';">solutions overview</div>
<div class=off id="linkb" ONMOUSEOVER="linkb.className='on'" ONMOUSEOUT="linkb.className='off'"  ONCLICK="window.location='strategic.php';">strategic solutions</div>
<div class=off id="linkc" ONMOUSEOVER="linkc.className='on'" ONMOUSEOUT="linkc.className='off'"  ONCLICK="window.location='creative.php';">creative solutions</div>
<div class=off id="linkd" ONMOUSEOVER="linkd.className='on'" ONMOUSEOUT="linkd.className='off'"  ONCLICK="window.location='technical.php';">technical solutions</div>
<?php 
break;
Case ("clients" || "gallery" || "testimonials" || "resources"): ?>
<div class=off id="linka" ONMOUSEOVER="linka.className='on'" ONMOUSEOUT="linka.className='off'"  ONCLICK="window.location='case.php';">case studies</div>
<div class=off id="linkb" ONMOUSEOVER="linkb.className='on'" ONMOUSEOUT="linkb.className='off'"  ONCLICK="window.location='portfolio.php';">Web gallery</div>
<div class=off id="linkc" ONMOUSEOVER="linkc.className='on'" ONMOUSEOUT="linkc.className='off'"  ONCLICK="window.location='test.php';">testimonials</div>
<div class=off id="linkd" ONMOUSEOVER="linkd.className='on'" ONMOUSEOUT="linkd.className='off'"  ONCLICK="window.location='resources.php';">resources</div>
<?php break;
Case ("contact" || "starter" || "specials" || "careers" || "rfp"): ?>
<!--<div class=off id="linka" ONMOUSEOVER="linka.className='on'" ONMOUSEOUT="linka.className='off'"  ONCLICK="window.location='specials.php';">special deals</div-->
<div class=off id="linkb" ONMOUSEOVER="linkb.className='on'" ONMOUSEOUT="linkb.className='off'"  ONCLICK="window.location='contact.php';">contact form</div>
<div class=off id="linkc" ONMOUSEOVER="linkc.className='on'" ONMOUSEOUT="linkc.className='off'"  ONCLICK="window.location='rfp.php';">website starter form</div>
<div class=off id="linkd" ONMOUSEOVER="linkd.className='on'" ONMOUSEOUT="linkd.className='off'"  ONCLICK="window.location='careers.php';">careers</div>

<?php break;
Case ("home"): ?>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="172"> 
<TR> 
<TD COLSPAN="2" BGCOLOR="#454545"> 
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="172"> 
<TR> 
<TD WIDTH="16" NOWRAP="NOWRAP"><IMG SRC="images/grip.gif" WIDTH="10" HEIGHT="17" BORDER="0" HSPACE="2"></TD> 
<TD WIDTH="146" NOWRAP="NOWRAP" style="padding: 5px 0 5px 0">&nbsp;<B><A HREF="creative.php" CLASS="free" ONMOUSEOVER="arrow.className='full'" ONMOUSEOUT="arrow.className='dim'">Your
NET worth?</A></B></TD> 
<TD><IMG SRC="images/arrow-dn.gif" WIDTH="10" HEIGHT="10" BORDER="0" ID="arrow" CLASS="dim"></TD> 
</TR> 
</TABLE> </TD> 
</TR> 
<TR> 
<TD style="border-top: 1px solid #333; padding: 5px; background-color: #454545; color: #CCCCCC">Get a no cost, no
obligation<BR>analysis of your Web site.
<TABLE BORDER="0" CELLPADDING="2" CELLSPACING="0" style="margin-top: 10px; width: 99%"> 
<TR> 
<TD ALIGN="RIGHT"><FONT COLOR="#999999"><B>URL</B></FONT></TD> 
<TD>&nbsp;<INPUT TYPE="TEXT" NAME="URL" CLASS="fr" SIZE="12"></TD> 
</TR> 
<TR> 
<TD ALIGN="RIGHT"><FONT COLOR="#999999"><B>Email</B></FONT></TD> 
<TD>&nbsp;<INPUT TYPE="TEXT" NAME="email" CLASS="fr" SIZE="12"></TD> 
</TR> 
<TR> 
<TD ALIGN="RIGHT"><FONT COLOR="#999999"><B>Phone</B></FONT></TD> 
<TD>&nbsp;<INPUT TYPE="TEXT" NAME="Phone" CLASS="fr" SIZE="12"></TD> 
</TR> 
<TR> 
<TD COLSPAN="2"><IMG SRC="images/clr.gif" ALT="" WIDTH="1" HEIGHT="1" BORDER="0"></TD> 
</TR> 
<TR> 
<TD>&nbsp;</TD> 
<TD>&nbsp;<INPUT TYPE="SUBMIT" NAME="Submit" VALUE="Submit »" CLASS="btn"></TD>

</TR> 
</TABLE> </TD> 
</TR> 
</TABLE>
<?php break;
} ?>
</div>
<div class="leftcol1" <?php if ($pgID = "clients") { ?> style="height: 410px" <?php elseif ($pgID = "resources") { ?><?php elseif ($pgID = "testimonials") { ?><?php } ?>>

