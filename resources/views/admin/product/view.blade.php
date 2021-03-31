@extends('admin.layouts.admin')

@section('content')
    <style>
        .card .table td, .card .table th {
            white-space: break-spaces;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'Product Details'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">Name</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Brand</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->brand_info?$product->brand_info->name:'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">code</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->code }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Tax</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->tax }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Price</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->price }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Sku</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->sku }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Stock</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->stock }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">discount</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->discount }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Expiration Date</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->expiration_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Minimum Amount</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->minimum_amount }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Free Delivery</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->free_delivery }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Total View</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->total_view }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Description</td>
                                    <td>:</td>
                                    <td>
                                        {!! $product->description !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Description</td>
                                    <td>:</td>
                                    <td>
                                        {!! $product->description !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Thumb Image</td>
                                    <td>:</td>
                                    <td>
                                        <img style="height: 50px;" src="/{{ $product->thumb_image }}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Related Image</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->image as $item)
                                                <li class="mx-2"><img style="height: 50px;" src="/{{ $item->name }}" alt=""></li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Category</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->category as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Sub Category</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->sub_category as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Main Category</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->main_category as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Color</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->color as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Publication</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->publication as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Size</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->size as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Unit</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->unit as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Vendor</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->vendor as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Writer</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->writer as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Created at</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->created_at->format('d F Y h:i:s a') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Updated at</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->updated_at->format('d F Y h:i:s a') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Creator</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->creator_info ? $product->creator_info->username : '' }}
                                    </td>
                                </tr>
                            </table>
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



