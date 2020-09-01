@extends('layouts.admin-master')

@section('content')
 <div class="section__content section__content--p30">
                    <div class="container-fluid">
<div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                
                                                <th colspan="2" class="text-right"><a href="/admin"><li class="btn btn-primary"><i class="fa fa-undo"> Geri Dön</i>
</li></a></th>
                                            
                                            </tr>
                                        
                                     
                                          @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                               
                                                <td class="text-right"><a href="/sil/{{$user->id}}"><li class="btn btn-danger"><i class="fa fa-trash"> Sil</i>
</li></a></td>
                                                <td class="text-right"><a href="/guncelle/{{$user->id}}"><li class="btn btn-success">
<i class="fa fa-pencil-square-o">
 Güncelle</i>
</li></a></td>
                                               
                                            </tr>
                                            @endforeach
                                            
                                     
                                    </table>
                                </div>
                            </div>
                         
@endsection