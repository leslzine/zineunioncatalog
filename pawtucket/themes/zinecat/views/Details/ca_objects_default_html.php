<?php

/* ----------------------------------------------------------------------
 * themes/default/views/bundles/ca_objects_default_html.php : 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 * ->collection display: {{{<unit relativeTo="ca_collections" delimiter="<br/>"><l>^ca_collections.preferred_labels.name</l></unit><ifcount min="1" code="ca_collections"> ➔ </ifcount>}}} 
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013-2015 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
 
	$t_object = 			$this->getVar("item");
	$va_comments = 			$this->getVar("comments");
	$va_tags = 				$this->getVar("tags_array");
	$vn_comments_enabled = 	$this->getVar("commentsEnabled");
	$vn_share_enabled = 	$this->getVar("shareEnabled");
	$vn_pdf_enabled = 		$this->getVar("pdfEnabled");
	$vn_id =				$t_object->get('ca_objects.object_id');
?>
<div class="row">
	<div class='col-xs-12 navTop'><!--- only shown at small screen size -->
		{{{previousLink}}}{{{resultsLink}}}{{{nextLink}}}
	</div><!-- end detailTop -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgLeft">
				{{{previousLink}}}{{{resultsLink}}}{{{nextLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
	<div class='col-xs-12 col-sm-10 col-md-10 col-lg-10'>
		<div class="container"><div class="row">
			<div class='col-sm-6 col-md-6 col-lg-5 col-lg-offset-1'>
				{{{representationViewer}}}
	
				
				<div id="detailAnnotations"></div>
		
				<?php print caObjectRepresentationThumbnails($this->request, $this->getVar("representation_id"), $t_object, array("returnAs" => "bsCols", "linkTo" => "carousel", "bsColClasses" => "smallpadding col-sm-3 col-md-3 col-xs-4", "primaryOnly" => $this->getVar('representationViewerPrimaryOnly') ? 1 : 0)); ?>
				
				<?php 
        $do_we_have_an_image =	caObjectRepresentationThumbnails($this->request, $this->getVar("representation_id"), $t_object, array("returnAs" => "bsCols", "linkTo" => "carousel", "bsColClasses" => "smallpadding col-sm-3 col-md-3 col-xs-4", "primaryOnly" => $this->getVar('representationViewerPrimaryOnly') ? 1 : 0));
        
        print_r($do_we_have_an_image);
        
        if (!isset($do_we_have_an_image)) {
        
      //    print "test 5";
          
          ##### setup array for random image selection 
          
          $random_images = array();

          $random_images[] = 'https://66.media.tumblr.com/a9adeaf4fdf0d2def7517f125959eec9/tumblr_p3n16fMqSg1s689z0o3_1280.jpg';
          $random_images[] = 'https://66.media.tumblr.com/f229dc0adf8eff8099ea4c827b019f03/tumblr_p3n16fMqSg1s689z0o2_1280.jpg';
          $random_images[] = 'https://66.media.tumblr.com/2cf47e13d06b06121e1dd2bb68f7c135/tumblr_p3lramrqkJ1s689z0o1_1280.jpg';
          $random_images[] = 'https://66.media.tumblr.com/93cf452f5e4217e32528fd9ecfd86135/tumblr_p25ecc3GVt1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/eadc46dea420ee52abb464a0a533f00a/tumblr_p25cgu6zfa1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/425efc9c2b132d41daca6314a6411405/tumblr_p25cgu6zfa1s689z0o2_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/78e8697b7230bad30f9ea376be2df759/tumblr_p25cgu6zfa1s689z0o3_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/a689d51e679bf64ce174a8ee2e614d0b/tumblr_otb4gmx4jz1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/97f39de7dc746da1b90e52d244e86a9f/tumblr_onaskrIWFJ1s689z0o1_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/c342c3a0abacba7ab472291c95b48800/tumblr_obc9btEf701s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/9ea965234e8aa9cf0cd6bcef0d467484/tumblr_obc907mB2I1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/eb2797893272aefaf8f2f1a3b69f63a0/tumblr_o2yfl3f3wl1utagr8o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/906829d6d52ce5dab404f4704dab71e1/tumblr_o6u2onncvt1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/de950548ff21720297fc531222308eea/tumblr_o6tjutkAqy1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/95163095b365db9ba1f9d9e675afe37c/tumblr_o5zy56OfVy1s689z0o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/aa5ff9e0571494f4bb451c40b3709fb7/tumblr_o5fqbhfq7R1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/1bf8e4197976f7b01c03994256c9a799/tumblr_o3w4c8wUpS1ramv0do1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/0be3e83f7b648e7a919206b137658d1c/tumblr_o3am43KHbz1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/fda70cdd3427bb2e8c4bb877dbd560d3/tumblr_o37uktmNT01s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/2f1ad293f3ad11f5479adf14e00e4fd3/tumblr_o26pq5sDnh1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/8aad4debcadb582c82502339e0eb2812/tumblr_nqof4fjbgx1rlofqto1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/9bca4c2f186add1ddcbb827cfd2364a0/tumblr_nx3f9mndo01s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/3e17e4fcf369260b69efb7cb0d7de73c/tumblr_nwsp7lBbHV1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/d8aa4f6a2317c9b24beb904ed6ff67c2/tumblr_nvv1pfMpUS1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/022eab9db93de94927d49236cab34072/tumblr_nvo8o8HuFQ1s689z0o1_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/879a92632c5faaf0d7714462a99efc66/tumblr_nvo8o8HuFQ1s689z0o2_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/b7a21c81dda54e0bbd77d22407e7c3d6/tumblr_nvo8o8HuFQ1s689z0o3_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/297e20b6f6ffa33db802c6d0530ba9c3/tumblr_nvo8o8HuFQ1s689z0o4_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/25d9e301ed7b5cd689d07101e7a48dff/tumblr_inline_pbtf83hQ1J1tdmyiq_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/4fec6c82ab74548be55c68d96cd2075b/tumblr_nuuycfKnZE1s689z0o1_400.jpg';
$random_images[] = 'https://66.media.tumblr.com/7c6361aadd6bf0f6ae40e777acb14b12/tumblr_nr1qo4rsWX1s689z0o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/2253c9cf8d1c1bc0bab447edcabe101b/tumblr_nql33q522E1s689z0o1_400.jpg';
$random_images[] = 'https://66.media.tumblr.com/4516a5224331f86969dfcc5a8eb9006b/tumblr_no07ecLDXl1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/04675bf46509c87744be537a131e235f/tumblr_nnwpetlnuE1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/2d828356c3582dbc83dd0622071e8232/tumblr_nnadcjnHkB1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/b5298d81c59f2afd1d676c386f7609eb/tumblr_msnz4auJWB1r98xdlo1_540.jpg';
$random_images[] = 'https://66.media.tumblr.com/416b2d068da9d2e1ba3c073c5020d26a/tumblr_nkwnouTjVl1s689z0o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/dd584260a54807e77b738a089b09bca2/tumblr_nkwnouTjVl1s689z0o4_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/8233a29e2fbed6b9d06bb0fe8dd0488d/tumblr_nk5bosEBlh1s689z0o3_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/ec25c99e6c65852a9422b77b2c8c5b7e/tumblr_nj1wa6rCSU1resfw8o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/041d2541267fe13f1ef40da9b1308eb7/tumblr_niy9w8otvf1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/c9d68ebef279b5a00c1472882a2c1871/tumblr_nirgtq3FTr1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/e50f7454a1bfc2295a6334be9075faca/tumblr_nd9hlfUC7x1qcmlh2o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/39bb150c93eca5bfa89784ff0dc5565e/tumblr_nhdl3vcLV21s689z0o1_640.png';
$random_images[] = 'https://66.media.tumblr.com/aad3406a2cc31cf8360bb32768c41952/tumblr_nhdkl1cYjx1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/4f0a495621fc246478775b6ca61a318b/tumblr_ngqy9mFboK1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/4d4e841957774b982511588df2a8e7f3/tumblr_ng8istK8DN1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/5dd226f77c5b39ecf02da8187d17aeb4/tumblr_ng68mmY24l1s689z0o1_1280.png';
$random_images[] = 'https://66.media.tumblr.com/6d673cb8509253a71ac77fe1cf26160d/tumblr_ng55ntdIs71s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/ff3d2dbef7828a26916136e5830183fa/tumblr_ng3c3r1ChJ1s689z0o1_640.png';
$random_images[] = 'https://66.media.tumblr.com/6dc2010700d7e01e877e0acdc59da8e1/tumblr_nf53k9lCt01qzrct3o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/53108eb0c24c69a32175da6a65bd8650/tumblr_nf1i35pRwN1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/6034bf9c1e4dddc27bda9ea6eca0b582/tumblr_neszqjrzEs1s689z0o1_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/3d3dffd28a046748460187419cc20df5/tumblr_ndkedmuvaH1qfb862o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/ef4d49ebfc3f2cbb1c934ebc013a5dff/tumblr_ncz9bszOHg1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/ac353a02696ceb873b354dfd33e24f07/tumblr_nckhp2Z23A1s689z0o3_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/c245cc9252df7a66f5c1b83243fd1496/tumblr_nc4kwnHS2s1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/ae2036205af791cff741d2c9fe062035/tumblr_naev24qfli1s689z0o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/2b98dc4fef7421121164a5c8c7306a12/tumblr_n9foclEUWx1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/a8602d7bf66c95e2ddcceab02526a2f7/tumblr_n5xg38nK9P1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/3fe180329dc430f58778981ce9bb52a1/tumblr_n5ur2iVojK1s689z0o1_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/ee099c249fe878b030ad12e5510c1d01/tumblr_n4upl5QGe21s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/c4d0fe5a2f4f20d8dc3c086eca0f7be8/tumblr_n4pvh443T71s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/bfc11d7e10f12fc0eaf3214ec906c5d2/tumblr_n4pu40EmkZ1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/0998e6082005e0d642c74d867038d214/tumblr_n4nzo00PON1s689z0o2_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/d800770c8488fea65edb648fc64fabaf/tumblr_n3ohaiBnwm1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/6fbd03371f96f21ef3471f7b7968b017/tumblr_n2oymlIRzz1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/632a26bb3b88e9384bd42c11730ec7d1/tumblr_n2orsv1Kfo1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/9e29081e30427df88b4fd966a5f010fa/tumblr_n2m0rrxzZR1qfb862o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/21e5e99d4e522b88c46104e5d5ad18c8/tumblr_n25fs9KUJS1qfb862o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/f4e6994a181e57b145d1dff30b0dc747/tumblr_n23nqb1zrO1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/fe0f8ff6cb006d505cac9171794305b0/tumblr_inline_mioxtvIWwz1qz4rgp.jpg';
$random_images[] = 'https://66.media.tumblr.com/3ea552429465f09725295e28f20478e2/tumblr_n0lenjSu8z1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/024eee1f0d807671cc360b47f2a967e4/tumblr_n069dl3J8Q1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/c03d5e3683c38c49d38d6596ade287d1/tumblr_mzvjeqVlOS1s689z0o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/9ac34a8b53755061aed0b3c4591e62fc/tumblr_mztn9l4VSA1s689z0o1_400.jpg';
$random_images[] = 'https://66.media.tumblr.com/164846e17f6afbc06b6792fa22cffa15/tumblr_myk10d29ZG1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/62943b2a1191beec406b517c565998ed/tumblr_mz2d7fUx8a1s689z0o1_500.jpg';
$random_images[] = 'https://66.media.tumblr.com/4e296ebf326456b49868761221384353/tumblr_mz1io4dW3U1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/e6a1d2c83b3d7c490b92a2d73b63d9d6/tumblr_mz1ikmcL4J1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/da5bc5415ab2d23099d96724f927a6c6/tumblr_mz1ihzY5uX1s689z0o1_1280.jpg';
$random_images[] = 'https://66.media.tumblr.com/0a001dfaef98bdf5e7858a0580c551b4/tumblr_myuuq9LK601s689z0o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/0a001dfaef98bdf5e7858a0580c551b4/tumblr_myuuq9LK601s689z0o1_640.jpg';
$random_images[] = 'https://66.media.tumblr.com/97a4ac6472275894cd7984c2ff338e6f/ca47e198866a6cc4-4e/s1280x1920/ed5548ed1f8c77c1d18b88807a1a527f71b68be4.jpg';
$random_images[] = 'https://66.media.tumblr.com/0483ca26d104aef6621ff50736a78f25/ca47e198866a6cc4-8d/s1280x1920/161bd6fcdb9a2d70d912d460bbd533c8edc888c3.jpg';
          
          $random_image_to_print = $random_images[array_rand($random_images)];
//          echo $array[array_rand($array, 1)];
         print '<b>The photo below is unrelated to this zine record. We do not have a cover to show you, and we thought you would at least like a zine cat to look at.</b><br><img src="'.$random_image_to_print.'" width="400px">';
          
          
          }
        
        ?>
				
<?php
				# Comment and Share Tools
				if ($vn_comments_enabled | $vn_share_enabled | $vn_pdf_enabled) {
						
					print '<div id="detailTools">';
					if ($vn_comments_enabled) {
?>				
						<div class="detailTool"><a href='#' onclick='jQuery("#detailComments").slideToggle(); return false;'><span class="glyphicon glyphicon-comment"></span>Comments and Tags (<?php print sizeof($va_comments) + sizeof($va_tags); ?>)</a></div><!-- end detailTool -->
						<div id='detailComments'><?php print $this->getVar("itemComments");?></div><!-- end itemComments -->
<?php				
					}
					if ($vn_share_enabled) {
						print '<div class="detailTool"><span class="glyphicon glyphicon-share-alt"></span>'.$this->getVar("shareLink").'</div><!-- end detailTool -->';
					}
					if ($vn_pdf_enabled) {
						print "<div class='detailTool'><span class='glyphicon glyphicon-file'></span>".caDetailLink($this->request, "Download as PDF", "faDownload", "ca_objects",  $vn_id, array('view' => 'pdf', 'export_format' => '_pdf_ca_objects_summary'))."</div>";
					}
					print '</div><!-- end detailTools -->';
				}		
//				print_r($t_object);		
?>
                {{{<ifdef code="ca_objects.description"><span class="x">^ca_objects.description
</span></ifdef>}}}
			</div><!-- end col -->
			
			<div class='col-sm-6 col-md-6 col-lg-5'>
				<H4>{{{<ifcount min="0" code="ca_entities"> ^ca_objects.preferred_labels.name  </ifcount><unit relativeTo="ca_objects_x_entities" delimiter="<br/>" restrictToRelationshipTypes="creator"><l>^ca_entities.preferred_labels</l> </unit>
				<unit relativeTo="ca_objects_x_entities" delimiter="<br/>" restrictToRelationshipTypes="publisher"><l>^ca_entities.preferred_labels</l> </unit>}}} </H4>
				<H6>{{{<unit>
				
	<?php
# --- Subjects / Replacing LCSH
//$va_subjects = $t_object->get("ca_list_items.preferred_labels.name_plural", array('returnAsArray' => true, 'returnAllLocales' => false));

$va_subjects = $t_object->get("ca_objects.type_id", array('returnAsArray' => true, 'returnAllLocales' => false, 'convertCodesToDisplayText' => true));
//print_r($va_subjects);
if(sizeof($va_subjects) > 0){
//print_r($va_subjects);
//print "<div class= 'unit'><h6>"._t("Keyword").((sizeof($va_subjects) > 1) ? "s" : "")." </h2>";
//print "<div>";
foreach($va_subjects as $va_subjects) {
// Regex to render the output searchable within CA
$string_for_output = caNavLink($this->request, $va_subjects['type_id'], '', '', 'Search', 'Index', array('search' => 'ca_objects.rights:'.$va_subjects['type_id'].''));

$string_for_output3 = " ".caNavLink($this->request, $va_subjects, '', '', 'MultiSearch', 'Index', array('search' => 'ca_objects.type_id:'.$va_subjects));

$string_part1 = preg_replace('/(^<a .*?>)(.*)/ms',"$1",$string_for_output);
$string_part1 = str_replace('--','+',$string_part1);
$string_part1 = str_replace('+++','+',$string_part1);
$string_part2 =  preg_replace('/(^<a .*?>)(.*)/',"$2",$string_for_output);

//print "--".$string_part1.$string_part2;
//print $string_for_output;

print "<h3>".$string_for_output3."</h3>";
print "";

 }
//print "</div>";
}
?>			
				
				
				</unit>}}}</H6>	
	
				<HR>
	{{{<ifdef code="ca_objects.source"><H6>Source:</H6><l>^ca_objects.source</l><br/></ifdef>}}}

	{{{<ifdef code="ca_objects.rights"><H6>Freedoms and Restrictions:</H6>
	<?php
# --- Subjects / Replacing LCSH
//$va_subjects = $t_object->get("ca_list_items.preferred_labels.name_plural", array('returnAsArray' => true, 'returnAllLocales' => false));

$va_subjects = $t_object->get("ca_objects.rights", array('returnAsArray' => true, 'returnAllLocales' => false, 'convertCodesToDisplayText' => false));
//print_r($va_subjects);
if(sizeof($va_subjects) > 0){
//print_r($va_subjects);
//print "<div class= 'unit'><h6>"._t("Keyword").((sizeof($va_subjects) > 1) ? "s" : "")." </h2>";
//print "<div>";
foreach($va_subjects as $va_subjects) {
// Regex to render the output searchable within CA
$string_for_output = caNavLink($this->request, $va_subjects['rights'], '', '', 'Search', 'Index', array('search' => 'ca_objects.rights:'.$va_subjects['rights'].''));

$string_for_output3 = "-- ".caNavLink($this->request, $va_subjects, '', '', 'MultiSearch', 'Index', array('search' => 'ca_objects.rights:'.$va_subjects));

$string_part1 = preg_replace('/(^<a .*?>)(.*)/ms',"$1",$string_for_output);
$string_part1 = str_replace('--','+',$string_part1);
$string_part1 = str_replace('+++','+',$string_part1);
$string_part2 =  preg_replace('/(^<a .*?>)(.*)/',"$2",$string_for_output);

//print "--".$string_part1.$string_part2;
//print $string_for_output;

print $string_for_output3;
print "<br \> ";

 }
//print "</div>";
}
?>
	
	
	
	
	
	</ifdef>}}}
	
	{{{<ifdef code="ca_objects.language"><H6>Language:</H6>
	
	

<?php
# --- Subjects / Replacing LCSH
//$va_subjects = $t_object->get("ca_list_items.preferred_labels.name_plural", array('returnAsArray' => true, 'returnAllLocales' => false));

$va_subjects = $t_object->get("ca_objects.language", array('returnAsArray' => true, 'returnAllLocales' => false, 'convertCodesToDisplayText' => true));
//print_r($va_subjects);
if(sizeof($va_subjects) > 0){
//print_r($va_subjects);
//print "<div class= 'unit'><h6>"._t("Keyword").((sizeof($va_subjects) > 1) ? "s" : "")." </h2>";
//print "<div>";
foreach($va_subjects as $va_subjects) {
// Regex to render the output searchable within CA
$string_for_output = caNavLink($this->request, $va_subjects['language'], '', '', 'Search', 'Index', array('search' => 'ca_objects.language:'.$va_subjects['language'].''));

$string_for_output3 = "-- ".caNavLink($this->request, $va_subjects, '', '', 'MultiSearch', 'Index', array('search' => 'ca_objects.language:'.$va_subjects));

$string_part1 = preg_replace('/(^<a .*?>)(.*)/ms',"$1",$string_for_output);
$string_part1 = str_replace('--','+',$string_part1);
$string_part1 = str_replace('+++','+',$string_part1);
$string_part2 =  preg_replace('/(^<a .*?>)(.*)/',"$2",$string_for_output);

//print "--".$string_part1.$string_part2;
//print $string_for_output;

print $string_for_output3;
print "<br \> ";

 }
//print "</div>";
}
?>
	
	
	
	</ifdef>}}}
	
	
	
	
	{{{<ifdef code="ca_objects.coverage"><H6>Coverage:</H6><l>^ca_objects.coverage<l><br/>
	
<?php
# --- Subjects / Replacing LCSH
//$va_subjects = $t_object->get("ca_list_items.preferred_labels.name_plural", array('returnAsArray' => true, 'returnAllLocales' => false));

$va_subjects = $t_object->get("ca_objects.coverage", array('returnAsArray' => true, 'returnAllLocales' => false, 'convertCodesToDisplayText' => true));
//print_r($va_subjects);
if(sizeof($va_subjects) > 0){
//print_r($va_subjects);
//print "<div class= 'unit'><h6>"._t("Keyword").((sizeof($va_subjects) > 1) ? "s" : "")." </h2>";
//print "<div>";
foreach($va_subjects as $va_subjects) {
// Regex to render the output searchable within CA
$string_for_output = caNavLink($this->request, $va_subjects['coverage'], '', '', 'Search', 'Index', array('search' => 'ca_objects.coverage:'.$va_subjects['coverage'].''));

$string_for_output3 = "-- ".caNavLink($this->request, $va_subjects, '', '', 'MultiSearch', 'Index', array('search' => 'ca_objects.coverage:'.$va_subjects));

$string_part1 = preg_replace('/(^<a .*?>)(.*)/ms',"$1",$string_for_output);
$string_part1 = str_replace('--','+',$string_part1);
$string_part1 = str_replace('+++','+',$string_part1);
$string_part2 =  preg_replace('/(^<a .*?>)(.*)/',"$2",$string_for_output);

//print "--".$string_part1.$string_part2;
//print $string_for_output;

print $string_for_output3;
print "<br \> ";

 }
//print "</div>";
}
?>
	
	
	</ifdef>}}}
	
	{{{<ifdef code="ca_objects.format_text"><H6>Format:</H6>^ca_objects.format_text<br/></ifdef>}}}
	{{{<ifdef code="ca_objects.format_text"><H6>Format:</H6>^ca_objects.format_text<br/></ifdef>}}}
				
				
				{{{<ifdef code="ca_objects.date.datetext"><H6>Created:</H6><i>Location: </i> 
				
				<?php



$va_places = $t_object->get("ca_places", array('returnAsArray' => true, 'returnAllLocales' => false, 'convertCodesToDisplayText' => true));
		//		print_r($va_places);
				if(sizeof($va_places) > 0){
          foreach($va_places as $va_place_info){
          
    //        print_r($va_place_info);
            
//            caNavLink($this->request, $va_place_info, '', 'Detail', 'Place', 'Show', array('place_id' => $va_place_info['place_id']))
            $string_for_output3 =" ".caNavLink($this->request, $va_place_info, '', '', 'MultiSearch', 'Index', array('search' => 'ca_places:'.$va_place_info));
            print $string_for_output3;
          }
        }			
		
				?>
							
				<br><i>Date: </i>
				
				
				<?php
# --- Subjects / Replacing LCSH
//$va_subjects = $t_object->get("ca_list_items.preferred_labels.name_plural", array('returnAsArray' => true, 'returnAllLocales' => false));

$va_subjects = $t_object->get("ca_objects.date.datetext", array('returnAsArray' => true, 'returnAllLocales' => false, 'convertCodesToDisplayText' => true));
//print_r($va_subjects);
if(sizeof($va_subjects) > 0){
//print_r($va_subjects);
//print "<div class= 'unit'><h6>"._t("Keyword").((sizeof($va_subjects) > 1) ? "s" : "")." </h2>";
//print "<div>";
foreach($va_subjects as $va_subjects) {
// Regex to render the output searchable within CA
$string_for_output = caNavLink($this->request, $va_subjects['coverage'], '', '', 'Search', 'Index', array('search' => 'ca_objects.date.datetext:'.$va_subjects['coverage'].''));

//caNavLink($this->request, $va_place_info['label'], '', 'Detail', 'Place', 'Show', array('place_id' => $va_place_info['place_id']))

$string_for_output3 = " ".caNavLink($this->request, $va_subjects, '', '', 'MultiSearch', 'Index', array('search' => 'ca_objects.date.datetext:'.$va_subjects));

$string_part1 = preg_replace('/(^<a .*?>)(.*)/ms',"$1",$string_for_output);
$string_part1 = str_replace('--','+',$string_part1);
$string_part1 = str_replace('+++','+',$string_part1);
$string_part2 =  preg_replace('/(^<a .*?>)(.*)/',"$2",$string_for_output);

//print "--".$string_part1.$string_part2;
//print $string_for_output;

print $string_for_output3;
print "<br \> ";

 }
//print "</div>";
}
?>
	
				
				
				
				
				
				
				
				
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dateSet.setDisplayValue"><H6>Date:</H6>^ca_objects.dateSet.setDisplayValue<br/></ifdev>}}}
				
				<hr></hr>
					<div class="row">
						<div class="col-sm-6">		


								{{{<ifcount code="ca_entities" min="1" max="1"><H6>Publisher:</H6></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H6>Publishers:</H6></ifcount>}}}

							{{{<unit relativeTo="ca_entities" delimiter="<br \>" restrictToRelationshipTypes="publisher"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels</l></unit> </unit>}}}


								{{{<ifcount code="ca_entities" min="1" max="1"><H6>Creator:</H6></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H6>Creators:</H6></ifcount>}}}

							{{{<unit relativeTo="ca_entities" delimiter="<br \>" restrictToRelationshipTypes="creator"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels</l></unit> </unit>}}}
							
								{{{<ifcount code="ca_entities" min="1" max="1"><H6>Contributor:</H6></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H6>Contributors:</H6></ifcount>}}}

							{{{<unit relativeTo="ca_entities" delimiter="<br \>" restrictToRelationshipTypes="contributor"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels</l></unit> </unit>}}}							
		
		
								{{{<ifcount code="ca_entities" min="1" max="1"><H6>Editor:</H6></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H6>Editors:</H6></ifcount>}}}

							{{{<unit relativeTo="ca_entities" delimiter="<br \>" restrictToRelationshipTypes="editor"><unit relativeTo="ca_entities"><l>^ca_entities.preferred_labels</l></unit> </unit>}}}

							
<hr>

  
  {{{<ifcount code="ca_objects.related" min="1"> 
  <H6>Related Zines</H6><unit relativeTo="ca_objects.related" delimiter="<br \>"> <l>^ca_object_representations.media.thumb</l><br/><l>^ca_objects.preferred_labels</l><br/></unit></ifcount>}}}




						
							{{{<ifcount code="ca_collections" min="1" max="1"><H6>Related Collections:</H6></ifcount>}}}
							{{{<ifcount code="ca_collections" min="2"><H6>Related Collection</H6></ifcount>}}}
							{{{<unit relativeTo="ca_collections" delimiter="<br/>"><l>^ca_collections.preferred_labels</l></unit>}}}
							
							{{{<unit relativeTo="ca_objects.external_link" delimiter="<br/>"><H6>Links:</H6>^ca_objects.external_link%returnAsLink=1</1></ifdef>}}}
							
							{{{<ifcount code="ca_objects.keywords" min="1" max="1"><H6>Keyword</H6></ifcount>}}}
							{{{<ifcount code="ca_objects.keywords" min="2"><H6>Keywords</H6></ifcount>}}}
<!--							{{{<unit relativeTo="ca_list_items" delimiter="<br/>"> <l>^ca_list_items.preferred_labels.name_plural</1></unit>}}} -->

							  



<?php
# --- Subjects / Replacing LCSH
//$va_subjects = $t_object->get("ca_list_items.preferred_labels.name_plural", array('returnAsArray' => true, 'returnAllLocales' => false));

$va_subjects = $t_object->get("ca_objects.subject", array('returnAsArray' => true, 'returnAllLocales' => false, 'convertCodesToDisplayText' => true));
//print_r($va_subjects);
//print "test<br>";
if(sizeof($va_subjects) > 0){
print "<div class= 'unit'><h6>"._t("Subject").((sizeof($va_subjects) > 1) ? "s" : "")." </h2>";
print "<div>";
foreach($va_subjects as $va_subjects) {
//print_r($va_subjects);
// Regex to render the output searchable within CA
$string_for_output = caNavLink($this->request, $va_subjects['subjects'], '', '', 'Search', 'Index', array('search' => 'ca_objects.keywords:'.$va_subjects['subject'].''));

$string_for_output3 = "-- ".caNavLink($this->request, $va_subjects, '', '', 'MultiSearch', 'Index', array('search' => 'ca_objects.subjects:'.$va_subjects));

$string_part1 = preg_replace('/(^<a .*?>)(.*)/ms',"$1","");
$string_part1 = str_replace('--','+',$string_part1);
$string_part1 = str_replace('+++','+',$string_part1);
$string_part2 =  preg_replace('/(^<a .*?>)(.*)/',"$2",$string_for_output);

//print "--".$string_part1.$string_part2;
//print $string_for_output;

print $string_for_output3;
print "<br \> ";

 }
print "</div>";
}
?>
							{{{<ifcount code="ca_objects.LcshTerms" min="1"><H6>LC Terms</H6></ifcount>}}}
							{{{<unit delimiter="<br/>"><l>^ca_objects.LcshTerms</l></unit>}}} 
												{{{<ifcount code="ca_objects.LcshTopical" min="1" max="1"><h3>Subject Heading:</h3>^ca_objects.LcshTopical</ifcount>}}}
					{{{<ifcount code="ca_objects.LcshTopical" min="2" max="30" delimiter=";">><h3>Subject Headings:</h3>^ca_objects.LcshTopical</ifcount>}}}

							<hr></hr>
							{{{<ifdef code="ca_objects.idno"><H6>ZineCat Identifer:</H6>^ca_objects.idno<br/></ifdef>}}}




							{{{<ifcount code="ca_places" min="1" max="1"><H6>Related place</H6></ifcount>}}}
							{{{<ifcount code="ca_places" min="2"><H6>Related places</H6></ifcount>}}}
							{{{<unit relativeTo="ca_objects_x_places" delimiter="<br/>"><unit relativeTo="ca_places"><l>^ca_places.preferred_labels</l></unit> (^relationship_typename)</unit>}}}
							
							{{{<ifcount code="ca_list_items" min="1" max="1"><H6>Related Term</H6></ifcount>}}}
							{{{<ifcount code="ca_list_items" min="2"><H6>Related Terms</H6></ifcount>}}}
							{{{<unit relativeTo="ca_objects_x_vocabulary_terms" delimiter="<br/>"><unit relativeTo="ca_list_items"><l>^ca_list_items.preferred_labels.name_plural</l></unit> (^relationship_typename)</unit>}}}
							
						</div><!-- end col -->				
						<div class="col-sm-6 colBorderLeft">
							{{{map}}}
						</div>
					</div><!-- end row -->
			</div><!-- end col -->
		</div><!-- end row --></div><!-- end container -->
	</div><!-- end col -->
	 <!--<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgRight">
			{{{nextLink}}}
		</div><!-- end detailNavBgLeft -->
	<!--</div><!-- end col -->
</div><!-- end row -->

<script type='text/javascript'>
	jQuery(document).ready(function() {
		$('.trimText').readmore({
		  speed: 75,
		  maxHeight: 120
		});
	});
</script>