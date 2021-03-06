<style type="text/css">

/***************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/**************************************************************************************/

body
{
	<?php echo $body_font_family; ?>
	<?php echo $body_font_size; ?>
	<?php echo $body_font_color; ?>
}

a, #featured-row .mod-newsflash .item:hover h2
{
	<?php echo $link_font_color; ?>
}

a:hover,
a.selected
{
	<?php echo $hlink_font_color; ?>
}


/**************************************************************************************/
/*   Forms																			  */


input,
button,
select,
textarea
{
	<?php echo $body_font_family; ?>
}


/**************************************************************************************/
/*   Headings and Titles															  */


h1,
h2,
h3,
h4,
h5,
.call-us,
.item_header .item_title
{
    <?php echo $hfont_family; ?>
}

h1
{
	<?php echo $h1_font_size; ?>
	<?php echo $h1_line_height; ?>
}

h2
{
	<?php echo $h2_font_size; ?>
	<?php echo $h2_line_height; ?>
}

h3,
.item_header .item_title
{
	<?php echo $h3_font_size; ?>
	<?php echo $h3_line_height; ?>
}

h4
{
	<?php echo $h4_font_size; ?>
	<?php echo $h4_line_height; ?>	
}

h5
{
	<?php echo $h5_font_size; ?>
	<?php echo $h5_line_height; ?>	
}


/**************************************************************************************/
/*   Lists																			  */


.categories-module li a,
.archive-module li a
{
	<?php echo $link_font_color; ?>}

.categories-module li a:hover,
.archive-module li a:hover
{
	<?php echo $hlink_font_color; ?>
}


/**************************************************************************************/
/*   Buttons																		  */


a.btn,
.btn_info,
.btn-info,
.btn-group button.btn,
.btn-primary,
.btn_primary,
.contentpane .button
{
	<?php echo $btn_font_color; ?>
	<?php echo $btn_bgcolor; ?>	

	<?php  if($btn_gradient_topcolor && $btn_gradient_bottomcolor): ?>	
	background-image: -moz-linear-gradient(top, #<?php echo $btn_gradient_topcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
	background-image: -webkit-linear-gradient(top, #<?php echo $btn_gradient_topcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
	background-image: -o-linear-gradient(top, #<?php echo $btn_gradient_topcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
	background-image: linear-gradient(to bottom, #<?php echo $btn_gradient_topcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
 	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff<?php echo $btn_gradient_topcolor; ?>', endColorstr='#ff<?php echo $btn_gradient_bottomcolor; ?>', GradientType=0);
	<?php endif; ?>
}

a.btn:hover,
.btn_info:hover,
.btn-info:hover,
.btn_info:active,
.btn-info:active,
.btn_info.active,
.btn-info.active,
.btn_info.disabled,
.btn-info.disabled,
.btn_info[disabled],
.btn-info[disabled],
.btn-primary:hover,
.btn_primary:hover,
.btn-primary:active,
.btn_primary:active,
.btn-primary.active,
.btn_primary.active,
.btn-primary.disabled,
.btn_primary.disabled,
.btn-primary[disabled],
.btn_primary[disabled],
.contentpane .button:hover
{
	<?php echo $btn_hfont_color; ?>
	<?php echo $btn_bgcolor; ?>
	<?php  if($btn_gradient_topcolor && $btn_gradient_bottomcolor): ?>	
	background-image: -moz-linear-gradient(top, #<?php echo $btn_gradient_bottomcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
	background-image: -webkit-linear-gradient(top, #<?php echo $btn_gradient_bottomcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
	background-image: -o-linear-gradient(top, #<?php echo $btn_gradient_bottomcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
	background-image: linear-gradient(to bottom, #<?php echo $btn_gradient_bottomcolor; ?>, #<?php echo $btn_gradient_bottomcolor; ?>);
 	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff<?php echo $btn_gradient_bottomcolorcolor; ?>', endColorstr='#ff<?php echo $btn_gradient_bottomcolor; ?>', GradientType=0);
	<?php endif; ?>	
}


/**************************************************************************************/
/*   Logo Row		  																  */


#header-top-row .moduletable.call-now
{
	<?php echo $link_font_color; ?>
}

#header-top-row .moduletable.call-now div
{
    <?php echo $hfont_family; ?>
}

#header-top-row .logo,
#header-top-row .logo a,
#header-top-row .logo a:hover
{
	<?php echo $logo_font_family; ?>
	<?php echo $logo_font_size; ?>
	<?php echo $logo_font_style; ?>
	<?php echo $logo_font_weight; ?>
	<?php echo $logo_font_color	; ?>
}

#header-top-row .logo span.slogan
{
	<?php echo $slogan_font_family; ?>
	<?php echo $slogan_font_size; ?>
	<?php echo $slogan_font_style; ?>
	<?php echo $slogan_font_weight; ?>
	<?php echo $slogan_font_color	; ?>	
}


/**************************************************************************************/
/*   Footer
/**************************************************************************************/
/**************************************************************************************/


#footer-row ul.nav li a
{
	<?php echo $hlink_font_color; ?>
}

#footer-row ul.nav li a:hover
{
	<?php echo $link_font_color; ?>
}

#copyright-menu li a,
#copyright-menu li.current a,
#copyright-menu li.active a
{
	<?php echo $hlink_font_color; ?>
}

#copyright-menu li a:hover
{
	<?php echo $link_font_color; ?>
}


</style>