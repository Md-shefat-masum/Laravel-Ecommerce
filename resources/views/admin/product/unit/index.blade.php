@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'All Unit'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Units</h5>
                            @if (Auth::user()->role_id != 4)
                            <a href="{{ route('unit.create') }}" class="btn btn-warning"><i class="fa fa-plus"></i> ADD</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Products</th>
                                            @if (Auth::user()->role_id != 4)
                                            <th class="text-right" scope="col">Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collection as $key=>$item)
                                            <tr>
                                                <td scope="row">{{ $key+1 }}</td>
                                                <td scope="row">{{ $item->name }}</td>
                                                <td scope="row">
                                                @php
                                                $no_products=[];
                                                @endphp
                                                @foreach($products_list as $prod)
                                                @if($item->name==$prod->name)
                                                    @php $no_products[]=$prod->id;
                                                    @endphp
                                                @endif
                                                @endforeach
                                                {{count($no_products)}}
                                                </td>
                                                <td scope="row">
                                                    <div class="text-right">
                                                        <!-- <a type="button" href="" class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-eye"></i> <span>view</span>
                                                        </a> -->
                                                        @if (Auth::user()->role_id != 4)
                                                        <a type="button" href="{{ route('unit.edit',$item->id) }}" class="btn btn-warning waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i> <span>edit</span>
                                                        </a>
                                                        <a type="button" href="{{ route('unit.destroy',$item->id) }}"
                                                            class="delete_btn btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> <span>delete</span>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{ $collection->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



