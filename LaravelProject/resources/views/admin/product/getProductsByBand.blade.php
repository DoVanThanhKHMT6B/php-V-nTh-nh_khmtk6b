@extends('layout.master');
@section('Content')
<form method="get" action="{{route('admin.product.getProductsByBand')}}"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="mb-3">
        <label for="" class="form-label">Select Band</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectBand"
            id=""
        >
        <option value="" selected>Chọn một</option>
            <option value="Mamonde Total">Mamonde Total</option>
            <option value="Stool Softener">Stool Softener</option>
            <option value="Ranitidine">Ranitidine</option>
            <option value="Systane">Systane</option>
            <option value="Tussin DM">Tussin DM</option>
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btSearch">submit</button>
        </div>
    </div>  
    
</form>
<table>
        <tbody>
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Company</th>
                    <th class="text-center">Year</th>
                    <th class="text-center">PID</th>
                    <th class="text-center">Band</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
        
        @foreach ($products as $product)
                <tr>
                    <td class="text-left">{{$product->pid}}</td>
                    <td class="text-left">{{$product->pname}}</td>
                    <td class="text-left">{{$product->company}}</td>
                    <td class="text-left">{{$product->year}}</td>
                    <td class="text-left">{{$product->band}}</td>
                    <td class="text-left"><img src="{{$product->pimage}}" alt="Image"></td>
                    <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                    <a href="admin/product/deleteProduct">Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i>
                    <a href="admin/product/updateProduct/{{$product->pid}}">Edit</a></td>
                </tr>
            @endforeach
     </tbody>
 </table>
@endsection
