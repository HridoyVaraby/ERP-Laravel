<!DOCTYPE html>
<html lang="en">
	@include('partials.head')
	<body class="page-body  page-fade" data-url="http://neon.dev">

		<div class="page-container "><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
			@include('partials.nav')

			<div class="main-content">
						
				@include('partials.notification')
				
				<hr />

				<main class="py-4">
					@yield('content')
				</main>
				<!-- Footer -->
				@include('partials.footer')
			</div>

		</div>

		<!-- Scripts-->
		@include('partials.scripts')
	</body>
</html>
