<ol class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
	<li property="itemListElement" typeof="ListItem">
		<a property="item" typeof="WebPage" href="http://mark-eccleston-software-engineer.com/" title="Home"><span property="name">Home</span></a>
		<meta property="position" content="1">
	</li>
	<li property="itemListElement" typeof="ListItem">
		<a property="item" typeof="WebPage" class="active" href="http://mark-eccleston-software-engineer.com/{{ $data['slug'] }}" title="@yield('page_title')">
			<span property="name">@yield('page_title')</span>
		</a>
		<meta property="position" content="2">
	</li>
</ol>