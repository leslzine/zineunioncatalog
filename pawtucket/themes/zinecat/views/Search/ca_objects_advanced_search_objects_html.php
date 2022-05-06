<div class="container">
	<div class="row">
		<div class="col-sm-8 ">
			<h1>Zines Advanced Search</h1>

<?php
	print "<p>Enter your search terms in the fields below.</p>";
?>

{{{form}}}

	<div class='advancedContainer'>
		<div class="advancedSearchField">
			Title:<br/>
			{{{ca_objects.preferred_labels.name%width=220px}}}
		</div>
		<div class="advancedSearchField">
			Accession number:<br/>
			{{{ca_objects.idno%width=210px}}}
		</div>
		<div class="advancedSearchField">
			Keyword<br/>
			{{{_fulltext%width=200px&height=25px}}}
			{{{_fulltext:boolean}}}
		</div>
		<div class="advancedSearchField">
			Type:<br/>
			{{{ca_objects.type_id}}}
		</div>
		<div class="advancedSearchField">
			Date range <i>(e.g. 1970-1979)</i><br/>
			{{{ca_objects.dates.dates_value%width=200px&height=40px&useDatePicker=0}}}
		</div>

		<div class="advancedSearchField">
			Collection <br/>
			{{{ca_collections.preferred_labels%restrictToTypes=collection%width=200px&height=40px}}}
		</div>
	</div>

	<br style="clear: both;"/>

	<div style="float: right; margin-left: 20px;">{{{reset%label=Reset}}}</div>
	<div style="float: right;">{{{submit%label=Search}}}</div>
{{{/form}}}

		</div>
		<div class="col-sm-4" style='border-left:1px solid #ddd;'>
			<h1>Search Guide</h1>
			<br>
			<p>You can begin by searching for zines in the upper right hand corner.  The search is sophisticated enough that it should accept titles, creators, years, and locations. <br><br>
We've tried very hard to get the information associated with each zine (called an 'object' in this system) to conform to the emerging metadata standard. As a result, most of the metadata is clickable. <br><br>The idea is that if you're reading a zine that was published in Chicago (for example) that you would then be able to click on the link under Place Created and be shown all of the zines in QZAP that were created there.<br><br>
As we are still working on this, some of these may not be live links yet. All of the keywords should be searchable, too.
If you really get stuck, please contact us.</p>
            </p>

		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->