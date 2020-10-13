@extends('layouts.admin-master')

@section('content')
 <div class="section__content section__content--p30">
                    <div class="container">
<div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        
                                            <tr>
                                                <th>User Name</th>
                                                <th>Product Name</th>
                                                <th>Product Photo</th>
                                                <th>Product Price</th>
                                                
                                                <th colspan="3" class="text-right"><a href="/admin"><li class="btn btn-primary"><i class="fa fa-undo"> Geri Dön</i>
</li></a></th>
                                            
                                            </tr>
                                        
                                     
                                          @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->uname}}</td>
                                                <td>{{$user->name}}</td>
                                                <td><img style="width: 80px;" src="{{asset('uploads/products').'/'.$user->photo}}"></td>
                                                <td>{{$user->price}} ₺</td>
                                               
                                                <td class="text-right"><a href="/sil/{{$user->id}}"><li class="btn btn-danger"><i class="fa fa-trash"> Sil</i>
</li></a></td>
                                                <td class="text-right"><a href="/guncelle/{{$user->id}}"><li class="btn btn-success">
<i class="fa fa-pencil-square-o">
 Güncelle</i>
</li></a></td>
<td class="text-right"><a href="/indir" class="btn btn-info"><i class="fa fa-download "> İndir</i></a></td>
                                               
                                            </tr>
                                            @endforeach
                                            
                                     
                                    </table>
                                </div>
                            </div>
                         
@endsection