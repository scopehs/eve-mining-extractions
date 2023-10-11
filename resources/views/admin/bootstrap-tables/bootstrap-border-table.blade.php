@extends('layouts.admin.master')

@section('title')Border Tables
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Bootstrap Border Table</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Border Tables</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Horizontal Borders</h5>
						<span>
							Example of <code>horizontal</code> table borders. This is a default table border style attached to <code> .table</code> class.All borders have the same grey color and style, table itself doesn't have a border, but
							you can add this border using<code> .table-border-horizontal</code>class added to the table with <code>.table</code>class.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table table-border-horizontal">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
									<th scope="col">Role</th>
									<th scope="col">Country</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Alexander</td>
									<td>Orton</td>
									<td>@mdorton</td>
									<td>Admin</td>
									<td>USA</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>John Deo</td>
									<td>Deo</td>
									<td>@johndeo</td>
									<td>User</td>
									<td>USA</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Randy Orton</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>UK</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Randy Mark</td>
									<td>Ottandy</td>
									<td>@mdothe</td>
									<td>user</td>
									<td>AUS</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Ram Jacob</td>
									<td>Thornton</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>IND</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Vertical Borders</h5>
						<span>
							Example of <code>Vertical </code> table borders. This is a default table border style attached to <code> .table</code> class.All borders have the same grey color and style, table itself doesn't have a border, but you
							can add this border using<code> .table-border-vertical</code>class added to the table with <code>.table</code>class.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table table-border-vertical">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
									<th scope="col">Role</th>
									<th scope="col">Country</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Alexander</td>
									<td>Orton</td>
									<td>@mdorton</td>
									<td>Admin</td>
									<td>USA</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>John Deo</td>
									<td>Deo</td>
									<td>@johndeo</td>
									<td>User</td>
									<td>USA</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Randy Orton</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>UK</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Randy Mark</td>
									<td>Ottandy</td>
									<td>@mdothe</td>
									<td>user</td>
									<td>AUS</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Ram Jacob</td>
									<td>Thornton</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>IND</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Both Bordeds</h5>
						<span>
							Example of <code>horizontal</code> table borders. This is a default table border style attached to <code> .table</code> class.All borders have the same grey color and style, table itself doesn't have a border, but
							you can add this border using<code> .table-bordered</code>class added to the table with <code>.table</code>class.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Borderless Table</h5>
						<span>
							Example of <code>horizontal</code> table borders. This is a default table border style attached to <code> .table</code> class.All borders have the same grey color and style, table itself doesn't have a border, but
							you can add this border using<code> .table-bordernone</code>class added to the table with <code>.table</code>class.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table table-bordernone">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="bd-t-none" scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th class="bd-t-none" scope="row">2</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
								</tr>
								<tr>
									<th class="bd-t-none" scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Default Table Border</h5>
						<span>
							Example of <code>Default Table Border</code>.This is a default table border style attached to <code>.table</code> class.All borders have the same grey color and style, table itself doesn't have a border, but you can
							add this border using<code> .table</code>class added to the table with <code>.table</code>class.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Solid Border</h5>
						<span>
							Example of a <code>solid</code> border inside table <code>thead</code>. This border inherits all styling options from the default border style, the only difference is it has <code>2px</code> width. Sometimes it could
							be useful for visual separation and addition highlight. To use this border add <code>.border-solid</code> to the table head row. This border style works only with row borders.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="border-solid">
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Double Border</h5>
						<span>
							Example of a <code>double</code> border inside table head. This border has <code>3px</code> width, <code>double</code> style and inherits all styling options from the default border style. Visually it displays table
							<code>head</code> and <code>body</code> as 2 separated table areas. To use this border add <code>.border-double</code> to the table head row.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="double">
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr class="double">
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr class="double">
									<th scope="row">2</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
								</tr>
								<tr class="double">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Dotted Border</h5>
						<span>
							Example of a <code>dotted</code> border inside table head. This border has <code>3px</code> width, <code>dotted</code> style and inherits all styling options from the default border style. Visually it displays table
							<code>head</code> and <code>body</code> as 2 separated table areas. To use this border add <code>.border-dotted</code> to the table head row.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="dotted">
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr class="dotted">
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr class="dotted">
									<th scope="row">2</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
								</tr>
								<tr class="dotted">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Dashed Border</h5>
						<span>
							Example of a <code>dashed</code> border inside table head. This border has <code>3px</code> width, <code>dashed</code> style and inherits all styling options from the default border style. Visually it displays table
							<code>head</code> and <code>body</code> as 2 separated table areas. To use this border add <code>.border-dashed</code> to the table head row.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="dashed">
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr class="dashed">
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr class="dashed">
									<th scope="row">2</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
								</tr>
								<tr class="dashed">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Border Bottom Color</h5>
						<span>
							EExample of a table head border with<code>custom </code> color. According to the custom color system options, you can set any of predefined colors by adding <code>.border-bottom-*</code> class to the table head row.
							This technique works with all border styles demonstrated above.
						</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="border-bottom-primary">
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
								</tr>
							</thead>
							<tbody>
								<tr class="border-bottom-secondary">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr class="border-bottom-success">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr class="border-bottom-info">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr class="border-bottom-warning">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr class="border-bottom-danger">
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	@endpush

@endsection