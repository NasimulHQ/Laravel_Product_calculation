<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Input Form</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="card">
               <div class="card-header">
                <h1>Input Form</h1>
               </div>
               <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="search" class="form-control" placeholder="Bill No">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button class="btn btn-primary">Find</button>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
               </div>
               
               <div class="card-body">
               <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Add product or item</option>
                            @foreach($product as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Select a customer</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                </div>
               </div>
            </div>
               <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped bg-color:yellow">
                            <thead style="background: #5fab48; color: white;">
                                <tr>
                                    <th>Product</th>
                                    <th>Rate</th>
                                    <th>Qty</th>
                                    <th>Totall Amount</th>
                                    <th>Discount (Amt)</th>
                                    <th>Net Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>item</td>
                                    <td>100</td>
                                    <td><input type="number"></td>
                                    <td>100</td>
                                    <td><input type="inmber"></td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>item</td>
                                    <td>100</td>
                                    <td><input type="number"></td>
                                    <td>100</td>
                                    <td><input type="inmber"></td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>item</td>
                                    <td>100</td>
                                    <td><input type="number"></td>
                                    <td>100</td>
                                    <td><input type="inmber"></td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>item</td>
                                    <td>100</td>
                                    <td><input type="number"></td>
                                    <td>100</td>
                                    <td><input type="inmber"></td>
                                    <td>100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group" style="margin-left: 84px;">
                            <label for="">Net Total</label>
                            <input type="text">
                        </div><br>
                        <div class="form-group" style="margin-left: 49px;">
                            <label for="">Discount Total</label>
                            <input type="text">
                        </div><br>
                        <div class="form-group" style="margin-left: 82px;">
                            <label for="">Paid Total</label>
                            <input type="text">
                        </div><br>
                        <div class="form-group" style="margin-left: 83px;">
                            <label for="">Due Total</label>
                            <input type="text">
                        </div><br>
                        <div class="form-group" style="margin-left: 180px;">
                            <input type="submit" class="btn btn-primary" value="Save Change">
                        </div>
                    </div>
                </div>
            </div>

            </div>
            
        </div>
    </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>