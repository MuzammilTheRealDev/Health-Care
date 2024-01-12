<!DOCTYPE html>
<html lang="en">
@include('Admin\includes\head')

<body>
	<div class="wrapper">

		@include('Admin\includes\sidebar')

		<div class="main">

			@include('Admin\includes\navbar')


			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-6">
							<h1 class="h3 mb-3">
								@yield('heading')
							</h1>
						</div>
					
					</div>
					<div class="row">
						<div class="col-12">


							@yield('maincontent')


						</div>
					</div>

				</div>
			</main>
			@include('Admin\includes\footer')
		</div>
	</div>
	@include('Admin\includes\script')



</body>

</html>