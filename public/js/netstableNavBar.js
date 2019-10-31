class nestableNavBar
{
	constructor(container, resourceUrl)
	{
		if (!container.length || !resourceUrl.length) throw "Empty parameters, check container and resourceUrl are correctly provided";
		this.container = container;
		this.resourceUrl = resourceUrl
		this.getData();
	}

	getData()
	{
		let self = this;
		$.ajax(
			{
				url: this.resourceUrl,
				context: document.body,
				type: "GET",
				dataType: "json"
			}).done(function(data)
			{
				if (!data.length) return;
				self.data = data;
				self.emptyContainer = $(self.container.clone());
				console.log(self.data);
				self.buildList();
			});
	}
	
	buildList()
	{
		self.data.forEach(element =>
		{
			console.log(element);
		});
	}
}
