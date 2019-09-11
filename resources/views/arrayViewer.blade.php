<h1 class="textcenter uppercase">{{ $title }}</h1>
<div class="dd" id="nestable">
	<table class="tableApp sortable margincenter dd-list"">
		<thead>
			<tr class="controls">
			</tr>
			<tr class="header"></tr>
		</thead>
		<tbody></tbody>
	</table>
</div>
<script>
	(function()
	{
		new TableApp($("table.tableApp"), "/api/parametres/{{ $url }}", {{ $foldable }});
	})();
</script>
