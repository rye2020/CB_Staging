<?php
/**
* Template Name: CBAgg_CDN2013
* Template Post Type: page
 *
 * This is the template that displays the 
 * table of CDN issuance from SQL for the year 2013.
 *
 *
 * @package WordPress
 * @subpackage Twenty_Eleven_Child
 * @ author J.R.Marlatt
 * version 1.0 February 7, 2016
 */

get_header('tables'); ?>

<?php
$like = " WHERE Region= 'Canada' AND Date LIKE '%2013%'";
?>
<div class="CBTable" id="BuildCBTable" style="width:100%;">
<div class="CBtable-center">
<p style="font-family:'Georgia';font-variant:small-caps; font-size:80%; font-weight:700; margin: 0 0 0 0;">Updated: 02/07/2016</p>
<h1 class="t1USDCB">Canadian Covered Bond Issuance 2013</h1>

<p class="jmsorter"; style="margin:0; text-align:center; color:red;"> (click on column header to sort)</p>


<table class="t1CanadianCBD sortable"; style="margin-left: 0; float:left;">
<!----------THIS IS A PRICING DATE TABLE------------------>
<!--***************************************************************************************-->
<!--*******************************AGGREGATE ISSUANCE DATA*********************************-->
<!--***************************************************************************************-->
<thead><tr >
<th><strong>Pricing</strong></th>
   <th><strong>Issuer</strong></th>
   <th><strong>Region</strong></th>
   <th><strong>Series</strong></th>
   <th><strong>Cur.</strong></th>
   <th><strong>(mm)</strong></th>
   <th><strong>Coupon</strong></th>
   <th><strong>Maturity</strong></th>
   <th><strong>Tenor</strong></th>
   <th><strong>Spread</strong></th>
   <th><strong>Type</strong></th>
</tr></thead>
<tbody>

<?php 
		jrm_get_table ('CBAggregate',$like,'no',0);
?>
</table>

</div></div>
<?php echo do_shortcode("[jpshare]"); ?>
<?php
get_footer();
?>     


   









             
  