@extends('layouts.top')

@section('content')
 <section id="hero">
<div class="hero-container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Tambah Product</h2>
            <hr>
            <br/>
            @if(count($errors))
                <div class="form-group">
                    <div clas="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <br/>

            <form action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label style="color: white">Nama Produk</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <label style="color: white">Harga</label>
                    <input type="number" name="price" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                    <label style="color: white">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group increment">
					<label style="color: white">Image</label>
					<input required type="file" name="image_url" class="form-control">
				</div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Back</a>
            </form>        
        </div>
    </div>
</div>
@endsection