<h1 class="textcenter uppercase">{{ $title }}</h1>
<table class="tableApp sortable margincenter">
	<thead>
		<tr class="controls">
		</tr>
		<tr class="header"></tr>
	</thead>
	<tbody></tbody>
	<ol class="sortable ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded">
			<li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_2">
			<div class="menuDiv">
				<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
				<span></span>
				</span>
				<span title="Click to show/hide item editor" data-id="2" class="expandEditor ui-icon ui-icon-triangle-1-n">
				<span></span>
				</span>
				<span>
				<span data-id="2" class="itemTitle">a</span>
				<span title="Click to delete item." data-id="2" class="deleteMenu ui-icon ui-icon-closethick">
				<span></span>
				</span>
				</span>
				<div id="menuEdit2" class="menuEdit hidden">
					<p>
						Content or form, or nothing here. Whatever you want.
					</p>
				</div>
			</div>
			<ol>
				<li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_4">
				<div class="menuDiv">
					<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
					<span></span>
					</span>
					<span title="Click to show/hide item editor" data-id="4" class="expandEditor ui-icon ui-icon-triangle-1-n">
					<span></span>
					</span>
					<span>
					<span data-id="4" class="itemTitle">c</span>
					<span title="Click to delete item." data-id="4" class="deleteMenu ui-icon ui-icon-closethick">
					<span></span>
					</span>
					</span>
					<div id="menuEdit4" class="menuEdit hidden">
						<p>
							Content or form, or nothing here. Whatever you want.
						</p>
					</div>
				</div>
				<ol>
					<li class="mjs-nestedSortable-leaf" id="menuItem_6">
					<div class="menuDiv">
						<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
						<span></span>
						</span>
						<span title="Click to show/hide item editor" data-id="6" class="expandEditor ui-icon ui-icon-triangle-1-n">
						<span></span>
						</span>
						<span>
						<span data-id="6" class="itemTitle">e</span>
						<span title="Click to delete item." data-id="6" class="deleteMenu ui-icon ui-icon-closethick">
						<span></span>
						</span>
						</span>
						<div id="menuEdit6" class="menuEdit hidden">
							<p>
								Content or form, or nothing here. Whatever you want.
							</p>
						</div>
					</div>
					</li>
				</ol>
				</li>
				<li style="display: list-item;" class="mjs-nestedSortable-leaf" id="menuItem_5">
				<div class="menuDiv">
					<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
					<span></span>
					</span>
					<span title="Click to show/hide item editor" data-id="5" class="expandEditor ui-icon ui-icon-triangle-1-n">
					<span></span>
					</span>
					<span>
					<span data-id="5" class="itemTitle">d</span>
					<span title="Click to delete item." data-id="5" class="deleteMenu ui-icon ui-icon-closethick">
					<span></span>
					</span>
					</span>
					<div id="menuEdit5" class="menuEdit hidden">
						<p>
							Content or form, or nothing here. Whatever you want.
						</p>
					</div>
				</div>
				</li>
			</ol>
			</li>
			<ol>
			</ol>
			<li style="display: list-item;" class="mjs-nestedSortable-leaf" id="menuItem_7">
			<div class="menuDiv">
				<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
				<span></span>
				</span>
				<span title="Click to show/hide item editor" data-id="7" class="expandEditor ui-icon ui-icon-triangle-1-n">
				<span></span>
				</span>
				<span>
				<span data-id="7" class="itemTitle">f</span>
				<span title="Click to delete item." data-id="7" class="deleteMenu ui-icon ui-icon-closethick">
				<span></span>
				</span>
				</span>
				<div id="menuEdit7" class="menuEdit hidden">
					<p>
					   Content or form, or nothing here. Whatever you want.
					</p>
				</div>
			</div>
			</li>
			<li class="mjs-nestedSortable-leaf" id="menuItem_3">
			<div class="menuDiv">
				<span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick">
				<span></span>
				</span>
				<span title="Click to show/hide item editor" data-id="3" class="expandEditor ui-icon ui-icon-triangle-1-n">
				<span></span>
				</span>
				<span>
				<span data-id="3" class="itemTitle">b</span>
				<span title="Click to delete item." data-id="3" class="deleteMenu ui-icon ui-icon-closethick">
				<span></span>
				</span>
				</span>
				<div id="menuEdit3" class="menuEdit hidden">
					<p>
						Content or form, or nothing here. Whatever you want.
					</p>
				</div>
			</div>
			</li>
		</ol>
</table>
<script>
	(function()
	{
		new TableApp($("table.tableApp"), "/api/parametres/{{ $url }}", {{ $foldable }});
	})();
</script>
