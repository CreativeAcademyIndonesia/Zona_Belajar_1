<div class="navbar">
	<div class="navbar-start">
		<a href="#" class="navbar-item">Agus Project</a>
	</div>
	<div class="navbar-end">
		<a href="{{ route('home') }}" class="navbar-item">Home</a>
		<a href="{{ route('about') }}" class="navbar-item">About</a>
		<a href="{{ route('dashboard.users.index') }}" class="navbar-item">Dashboard</a>
		<div class="flex gap-2">
			<button class="btn btn-solid-warning">Register</button>
			<button class="btn btn-warning">Login</button>
		</div>
	</div>
</div>