@extends('layouts.app')

@section('content')
<div class="container">   
    <div class="col-md-12 col-lg-12 col-sm-12"> 
        <div class="card" style="padding: 15px;">
            <h1>Item Registration</h1>
            <div>
                <form method="post" action="/order">
                                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="product-name"><b></b><span class="required">Product Name</span></label>
                            <input type="text" name="product_name" class="form-control" value="{{ $input->name }}"/>
                        </div>

                        <div class="form-group">
                            <label for="product-id"><b>Product ID</b><span class="required"></span></label>
                            <input type="text" name="product_id" class="form-control" value="{{ $input->product_id }}"/>
                        </div>

                        <div class="form-group">
                            <label for="product-id"><b>Email</b><span class="required"></span></label>
                            <input type="email" placeholder="Enter valid email" name="email" class="form-control"/>
                        </div>
                                            
                        <div >
                            <input type="submit" class="btn btn-primary" value="Send Email">
                        </div>            
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
