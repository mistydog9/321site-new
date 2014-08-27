<?php $pgID = "clients"; ?>
<?php $pgtitle="Website Design & Development Fort Collins - Case Studies - 321site.com"; ?>
<?php $pgdesc="Browse or website design and development projects gallery"; ?>
<?php $pgkw="Website Design & Devleopment Fort Collins - Case Studies, html, photoshop, website gallery, "; ?>
<?php require_once("top.php"); ?>
<h1>case studies</h1>
<?php sub tn(id,img,name,tipe)
	Response.Write("<div class=img><A HREF=""jim/web/default.php?src=1&id="+id+"""  onclick=""openIT('jim/web/default.php?src=1&id="+id+"'); return false""><IMG SRC=jim/images/"+img+" ALT="+name+" WIDTH=95 HEIGHT=95 BORDER=1><BR>"+name+"</A></div>")
	if tipe=2 then
		Response.Write("")
	end if 
end sub ?>

<SCRIPT LANGUAGE="JavaScript">
function openIT(theURL) {
	var wina;
	var ht=232;
	var wd=740; 
	var wint=(screen.height - ht) / 2; 
	var winl=(screen.width - wd) / 2;
	wina=window.open(theURL, 'samples', 'height=232,width=740,top='+wint+',left='+winl+'') 
if (parseInt(navigator.appVersion) >=4) 
	{ wina.window.focus(); } 
} 

function showit(div,nest){
	a.style.visibility = "hidden";
	b.style.visibility = "hidden";
	c.style.visibility = "hidden";
	d.style.visibility = "hidden";
	e.style.visibility = "hidden";
	f.style.visibility = "hidden";
	g.style.visibility = "hidden";
	h.style.visibility = "hidden";
	i.style.visibility = "hidden";
	j.style.visibility = "hidden";
	k.style.visibility = "hidden";
	l.style.visibility = "hidden";
	m.style.visibility = "hidden";
	aa.className = "imga";
	ab.className = "imga";
	ac.className = "imga";
	ad.className = "imga";
	ae.className = "imga";
	af.className = "imga";
	ag.className = "imga";
	ah.className = "imga";
	ai.className = "imga";
	aj.className = "imga";
	ak.className = "imga";
	al.className = "imga";
	am.className = "imga";
	
	obj=bw.dom?document.getElementById(div).style:bw.ie4?document.all[div].style:bw.ns4?nest?document[nest].document[div]:document[div]:0; 
	obj.visibility='visible'
	this.className="imgz";
}
</SCRIPT>
<div id="casediv">
	 <DIV ID="a" CLASS="case2"> 
<!--- arm, histo solar mk bcg garcin te hv uh care  al lt sw --->
<h2>Fortune 50 Websites</h2>
	 <?php call tn("an","tn_an.gif","AutoNation","0")
		call tn("bk","tn_bk.gif","Burger King",1)
		call tn("csfb","tn_csfb.gif","Credit Suisse",1)
		call tn("luf","tn_luf.gif","Lufthansa",1)
	    call tn("sony","tn_sony.gif","Sony",2) ?>
	</DIV> 
	 <DIV ID="b" CLASS="case"> 
<h2>Government Websites</h2>
	 <%	call tn("lott","tn-lott.jpg","LOTTWastewater",1) 
		call tn("wa","tn-wa.jpg","WA State CMS",2)
		call tn("myfla","tn-myfla.jpg","MyFlorida.com",1)
		call tn("state","tn-state.gif","StateStrategy",1)
		call tn("tsic","tn_tsic.gif","TSI Children",1)
?>
	</DIV> 
	 <DIV ID="c" CLASS="case"> 
<h2>Fort Collins Business Websites I</h2>
	 <?php call tn("arm","tn-arm.gif","Armstrong Hotel",0)
	 call tn("histo","tn-histo.gif","HistoPrep",0)
	call tn("mvs","tn_mvs.gif","Mountain View",1)
		call tn("rdb","tn-rdb.gif","RemoteBackups",2)
		call tn("spirae","tn-spirae.gif","Spirae",2)
?>
	 </DIV> 
	 <DIV ID="d" CLASS="case"> 
<h2>Fort Collins Business Websites II</h2>
	 <?php call tn("tree","tn-tree.jpg","ArborWorx",1)
		call tn("fs","tn-fs.gif","FindITSupport",1)
		call tn("atm","tn_atm.gif","Louis Publishing",1)
		call tn("solar","tn-solar.gif","SolarProServices",1)
		call tn("whq","tn_whq.gif","WebsHQ",2) 
?>
	</DIV> 
	 <DIV ID="e" CLASS="case"> 
<h2>Healthcare & Medical Websites</h2>
	 <?php call tn("md","tn_md.gif","Mercy MD",1)
	call tn("mk","tn-mk.gif","MK Technical",1)
		call tn("msn","tn_msn.gif","MSN Health",1) 
	call tn("sfc","tn-sfc.jpg","Scott Chiro",1)
		call tn("up","tn-up.gif","Upledger",2) 
 ?>
	</DIV> 
	 <DIV ID="f" CLASS="case"> 
<h2>Legal Websites</h2>
	 <?php 
		call tn("bcg","tn-bcg.gif","BerkshireCapital",1)
		call tn("garcin","tn-garcin.gif","GarcinLaw.com",1)
		call tn("pwl","tn-pwl.jpg","PW Law",1)
		call tn("sa","tn_sa.gif","Speer & Assoc.",2)
		call tn("te","tn_te.gif","Trading Edge",1)
		?>
	</DIV> 
	 <DIV ID="g" CLASS="case"> 
<h2>Fortune 500 Websites</h2>
	 <?php 
	 call tn("bd","tn_bd.gif","Blue Dot",0) 
	 call tn("gp","tn_gp.gif","Georgia Pacific",1)
		call tn("rf","tn_rf.gif","Royce Funds",1)
	    call tn("sc","tn_sc.gif","Southern Co.",1)
		call tn("rheem","tn-rheem.jpg","Rheem.com",1)
		?>
	</DIV> 
	<DIV ID="h" CLASS="case"> 
<h2>Multimedia & Flash Websites</h2>
	 <?php 
	 call tn("hv","tn-hv.gif","HotelView.com",0)
	 call tn("jasper","tn-jasper.jpg","JaspertheMule",0)
		call tn("pf","tn_pf.gif","Proudfoot",1) 
		call tn("rl","tn-rl.jpg","Reading LINKS",1)
		call tn("sm","tn-golf.jpg","SuperMath",1)
		?>
	</DIV> 
	<DIV ID="i" CLASS="case"> 
<h2>E-commerce Websites</h2>
	 <?php 
	call tn("bpl","tn_bpl.gif","BizProLink",0)
		call tn("cc","tn_cc.gif","CanadianCatalog",1)
		call tn("sophee","tn-sophee.jpg","Sophee.com",2)
		call tn("deco","tn_deco.gif","DecoGifts",1)
		call tn("uh","tn-uh.gif","UrbahHomestead",1)
?>
	</DIV> 
	<DIV ID="j" CLASS="case"> 
<h2>Science & Technology Websites</h2>
	 <?php 
	 	 	 call tn("care","tn-care.gif","Care Research",0)
		call tn("disc","tn-disc.jpg","Discovery.com",1)
	 call tn("inf","tn_in.gif","InfraSafe",0)
	 call tn("mods","tn-mods.gif","Museum of D&S",0)
		call tn("tsw","tn-tsw.gif","ScientificWorld",1)
?>
	</DIV> 

	<DIV ID="k" CLASS="case"> 
<h2>Information Technology Websites</h2>
	 <?php 
	 call tn("1wd","tn_1wd.gif","1WorlDesign",0)
 	 call tn("321","tn-321.jpg","321site.com",0)
	 call tn("fu","tn_fu.gif","Fusive.com",0)
	call tn("vd","tn_vd.gif","Visual Data",2)
	call tn("wyops","tn-wyops.jpg","WYOPS",2)
   ?>
	</DIV> 

	<DIV ID="l" CLASS="case"> 
<h2>Small Business Websites</h2>
	 <?php 
	call tn("don","tn-don.gif","DonVogl.com",1)
	call tn("fan","tn-fr.jpg","Fantasy Readers",1)
	 call tn("fort","tn-fort.gif","FortBackup",0)
	 call tn("mac","tn-mac.gif","MacBackups",0)
		call tn("tnt","tn_tnt.gif","TNT Rigging",2) 
   ?>
	</DIV> 
	<DIV ID="m" CLASS="case"> 
<h2>Demos / Comp Websites</h2>
	 <?php 
	call tn("acclaim","tn-acclaim.gif","Acclaim Legal",1)
	call tn("fan","tn-cmg.gif","CustomMediaGrp",1)
	 call tn("lt","tn-lt.gif","LeapTree",0)
	 call tn("radon","tn-radon.gif","Radon Control",0)
		call tn("smart","tn-smart.gif","SmartWatch",2) 
   ?>
	</DIV> 
	 
	</DIV> 
	
<div id="casedivnos">
<div class="imgz" id="aa" ONMOUSEOVER="showit('a');	this.className='imgz'"><a href="#" ONMOUSEOVER="showit('a');	aa.className='imgz'">1</a></div>
<div class="imga" id="ab"><a href="#" ONMOUSEOVER="showit('b');	ab.className='imgz'">2</a></div>
<div class="imga" id="ac" ONMOUSEOVER="showit('c');	this.className='imgz'"">3</div>
<div class="imga" id="ad" ONMOUSEOVER="showit('d');	this.className='imgz'"">4</div>
<div class="imga" id="ae" ONMOUSEOVER="showit('e');	this.className='imgz'"">5</div>
<div class="imga" id="af" ONMOUSEOVER="showit('f');	this.className='imgz'"">6</div>
<div class="imga" id="ag" ONMOUSEOVER="showit('g');	this.className='imgz'"">7</div>
<div class="imga" id="ah" ONMOUSEOVER="showit('h');	this.className='imgz'"">8</div>
<div class="imga" id="ai" ONMOUSEOVER="showit('i');	this.className='imgz'"">9</div>
<div class="imga" id="aj" ONMOUSEOVER="showit('j');	this.className='imgz'"">10</div>
<div class="imga" id="ak" ONMOUSEOVER="showit('k');	this.className='imgz'"">11</div>
<div class="imga" id="al" ONMOUSEOVER="showit('l');	this.className='imgz'"">12</div>
<div class="imga" id="am" ONMOUSEOVER="showit('m');	this.className='imgz'"">13</div>
<div class="imgb"><span CLASS="footer">&lt; Click for more. Click thumbs for details.</span></div>
</div>

 
<?php require_once("bot.php"); ?>						