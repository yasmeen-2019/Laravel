<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Unknown page')</title>
</head>
<body>
	@yield('content')

	@section('sidebar')
	This is SideBar from Master Layout
	@show
</body>
</html>