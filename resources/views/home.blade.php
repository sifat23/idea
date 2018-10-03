@extends('layouts.app')

@section('content')
<div class="container-fluid">   
    <div class="col-md-12 col-lg-12 col-sm-12"> 
        <div class="row clearance-container">
            @foreach($inputs as $input) 
            <div class="col-md-3 col-sm-3 col-lg-3">  
                 <div class="border search-border border-danger" style="padding: 10px;">            
                    <div class="panel panel-default panel--styled">
                        <div class="panel-body"> 
                            <div class="card">  
                                <img class="img-responsive"  src="https://via.placeholder.com/250x250" alt=""/>
                                <div class="card-body" style="text-align: center;">  
                                    <h3>{{ $input->name }}</h3>
                                    <p><span>Product id:</span> {{ $input->product_id }}</p>
                                    <p><span class="text-danger">As low as</span> {{ $input->price }}$ </p>
                                    <p><span class="text-info">Available In Stock</span> {{ $input->quantity }} pice</p>
                                    <a class="btn btn-success" href="/order/{{ $input->id }}">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- <div class="col-md-3 col-sm-3 col-lg-3">  
                 <div class="border search-border border-danger" style="padding: 10px;">            
                    <div class="panel panel-default panel--styled">
                        <div class="panel-body"> 
                            <div class="card">  
                                <img class="img-responsive"  src="https://via.placeholder.com/250x250" alt=""/>
                                <div class="card-body" style="text-align: center;">  
                                    <h3>Product 2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <p>Product id: 11025502</p>
                                    <p><span class="text-danger">As low as</span> 90$ </p>
                                    <p><span class="text-info">Available In Stock</span> 120 pice</p>
                                    <a class="btn btn-success" href="">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-lg-3">  
                 <div class="border search-border border-danger" style="padding: 10px;">            
                    <div class="panel panel-default panel--styled">
                        <div class="panel-body"> 
                            <div class="card">  
                                <img class="img-responsive"  src="https://via.placeholder.com/250x250" alt=""/>
                                <div class="card-body" style="text-align: center;">  
                                    <h3>Product 3</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <p>Product id: 11025503</p>
                                    <p><span class="text-danger">As low as</span> 70$ </p>
                                    <p><span class="text-info">Available In Stock</span> 90 pice</p>
                                    <a class="btn btn-success" href="">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-lg-3">  
                 <div class="border search-border border-danger" style="padding: 10px;">            
                    <div class="panel panel-default panel--styled">
                        <div class="panel-body"> 
                            <div class="card">  
                                <img class="img-responsive" src="https://via.placeholder.com/250x250" alt=""/>
                                <div class="card-body" style="text-align: center;">  
                                    <h3>Product 4</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <p>Product id: 11025504</p>
                                    <p><span class="text-danger">As low as</span> 180$ </p>
                                    <p><span class="text-info">Available In Stock</span> 130 pice</p>
                                    <a class="btn btn-success" href="">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

@endsection
