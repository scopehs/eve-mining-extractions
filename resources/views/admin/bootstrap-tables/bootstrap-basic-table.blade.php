@extends('layouts.admin.master')

@section('title')Basic Tables
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Bootstrap Basic Tables</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Basic Tables</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Basic Table</h5>
						<span>Use a class<code>table</code> to any table.</span>
					</div>
					<div class="table-responsive">
						<table class="table">
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
						<h5>Inverse Table</h5>
						<span>Use a class <code>table-inverse</code> inside table element.</span>
					</div>
					<div class="table-responsive">
						<table class="table table-inverse">
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
						<h5>Inverse Table with Primary background</h5>
						<span>
							Use a class <code>.bg-info, .bg-success, .bg-warning and .bg-danger classes.</code> with light text on dark backgrounds inside table element.<br />
							To set the light background color use .bg-[color] class where [color] is the value of your selected color from stack color palette. So for teal color background class will be .bg-teal
						</span>
					</div>
					<div class="table-responsive">
						<table class="table table-striped bg-primary">
							<thead class="tbl-strip-thad-bdr">
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
						<h5>Hoverable rows</h5>
						<span>Use a class <code>table-hover</code> to enable a hover state on table rows within a <code>tbody</code>.</span>
					</div>
					<div class="table-responsive">
						<table class="table table-hover">
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
						<h5>Contextual classes</h5>
						<span>
							Use contextual classes to color table rows or individual cells. you may use Classes
							<code>table-primary</code>,<code>table-secondary</code>,<code>table-success</code>,<code>table-info</code>,<code>table-warning</code>,<code>table-danger</code>,<code>table-light</code>,<code>table-active</code> in
							<code>tr</code>
						</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Class</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-primary">
									<th scope="row">Primary</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr class="table-secondary">
									<th scope="row">Secondary</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr class="table-success">
									<th scope="row">Success</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr class="table-info">
									<th scope="row">Info</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr class="table-warning">
									<th scope="row">Warning</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr class="table-danger">
									<th scope="row">Danger</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr class="table-light">
									<th scope="row">Light</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr class="table-active">
									<th scope="row">Active</th>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Text or background utilities</h5>
						<span>
							Regular table background variants are not available with the inverse table, however, you may use Classes
							<code>bg-dark</code>,<code>bg-warning</code>,<code>bg-success</code>,<code>bg-info</code>,<code>bg-danger</code>,<code>bg-primary</code>,<code>bg-secondary</code>,<code>bg-light</code> in<code>td</code>
						</span>
					</div>
					<div class="table-responsive">
						<table class="table table-borderedfor">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<td class="bg-primary">1</td>
									<td class="bg-primary">primary</td>
									<td class="bg-primary">primary</td>
								</tr>
								<tr class="table-active">
									<td class="bg-secondary">2</td>
									<td class="bg-secondary">secondary</td>
									<td class="bg-secondary">secondary</td>
								</tr>
								<tr>
									<td class="bg-success">3</td>
									<td class="bg-success">success</td>
									<td class="bg-success">success</td>
								</tr>
								<tr>
									<td class="bg-info">4</td>
									<td class="bg-info">info</td>
									<td class="bg-info">info</td>
								</tr>
								<tr>
									<td class="bg-warning">5</td>
									<td class="bg-warning">warning</td>
									<td class="bg-warning">warning</td>
								</tr>
								<tr>
									<td class="bg-danger">6</td>
									<td class="bg-danger">danger</td>
									<td class="bg-danger">danger</td>
								</tr>
								<tr class="table-active">
									<td class="bg-light">7</td>
									<td class="bg-light">light</td>
									<td class="bg-light">light</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Table head options</h5>
						<span>Similar to tables and dark tables, use the modifier classes <code>.thead-dark</code> to make <code>thead</code> appear light or dark gray.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="thead-dark">
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
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Table head options</h5>
						<span>Similar to tables and dark tables, use the modifier classes <code>.bg-*</code>and <code>.thead-light</code> to make <code>thead</code> appear light or dark gray.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="thead-light">
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
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Striped Row</h5>
						<span>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code></code>. This styling doesn't work in IE8 and below as :nth-child CSS selector isn't supported.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table table-striped">
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
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Striped Row with Inverse Table</h5>
						<span>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code></code>. This styling doesn't work in IE8 and below as :nth-child CSS selector isn't supported.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table table-inverse table-striped">
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
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Caption</h5>
						<span>A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<caption>
										List of users
									</caption>
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
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Responsive Tables</h5>
						<span>A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Breckpoint Specific</h5>
						<span>Use <code>.table-responsive{-sm|-md|-lg|-xl}</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table table-responsive-sm">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table table-responsive-sm">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table table-responsive-sm">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table table-responsive-sm">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
											<th scope="col">Table heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection