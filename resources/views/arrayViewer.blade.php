<h1 class="textcenter uppercase">{{ $title }}</h1>
<table class="tableApp sortable margincenter">
	<thead>
		<tr class="controls">
		</tr>
		<tr class="header"></tr>
	</thead>
	<tbody></tbody>
	<ul>
			<li><div>list 1</div></li>
			<li><div>list 2</div></li>
			<li><div>list 3</div></li>
			<li><div>list 4</div></li>
			<li><div>list 5</div></li>
			<li><div>list 6</div></li>
			<li><div>list 6</div></li>
			<li><div>list 7</div></li>
			<li><div>list 8</div></li>
			<li><div>list 9</div></li>
			<li><div>list 10</div></li>
			<li><div>list 11</div></li>
	</ul>
</table>
<script>
	(function()
	{
		new TableApp($("table.tableApp"), "/api/parametres/{{ $url }}", {{ $foldable }});
	})();
</script>
