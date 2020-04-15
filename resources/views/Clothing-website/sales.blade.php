@extends('Clothing-website.all')

@section('title','Fashion')

@section('side-header')
    @include('Clothing-website.all2')
@endsection

@section('content')
            <div class="ptb-40">
				<div class="container-fluid">
					<div class="row">
						<h2 class="pb-20">All times Sales Statistics</h2>
							<div class="table-responsive">
							<table class="table table-striped table-sm">
							  <thead>
								<tr>
								  <th>#Id</th>
								  <th>Image_product</th>
								  <th>Name_product</th>
								  <th>Remain_amount</th>
								  <th>Category</th>
								  <th>Status</th>
								</tr>
							  </thead>
							  <tbody id="product_list">
								<tr>
								  <td>1254ABF6</td>
								  <td><img src="{{ asset('img/shop/1.jpg') }}" width="128px" height="128px"></td>
								  <td>dress</td>
								  <td>0</td>
								  <td>Clothing</td>
								  <td><span style="color: red; "><b>Highest Sale</b></span></td>
								</tr>
								<tr>
								  <td>6754CBF6</td>
								  <td><img src="{{ asset('img/shop/2.jpg') }}" width="128px" height="128px"></td>
								  <td>short blouse</td>
								  <td>2</td>
								  <td>Clothing</td>
								  <td><span style="color: yellow; "><b>needed</b></span></td>
								</tr>
								<tr>
								  <td>3125FCV6</td>
								  <td><img src="{{ asset('img/shop/3.jpg') }}" width="128px" height="128px"></td>
								  <td>blouse</td>
								  <td>15</td>
								  <td>Clothing</td>
								  <td><span style="color: blue; "><b>inability</b></span></td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</main>
					  </div>
					</div>





			<canvas class="my-4 w-20" id="myChart" width="300" height="70"></canvas> 




@endsection