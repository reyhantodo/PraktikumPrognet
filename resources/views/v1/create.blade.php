<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title> CRUD menggunakan Laravel 5 </title>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <h2>Penambahan Produk</h2><br/>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
            @endif
            <form method="post" action="{{url('v1')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="price">Harga:</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                </div>
                </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="marginleft:38px">Tambahkan Produk</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>