@php
    $no = 1;
@endphp
@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="box-title">Daftar Foto Barang <small>{{$product->name}}</small></h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>Name Product</th>
                                        <th>Photo</th>
                                        <th>Default</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->product->name}}</td>
                                        <td>
                                            <img src="{{ url($item->photo) }}" alt="">
                                        </td>
                                        <td>{{$item->is_default ? 'Ya' : 'Tidak'}}</td>
                                        <td>
                                            {{-- <a href="#" class="btn btn-info btn-sm">
                                                <i class="fa fa-picture-o"></i>
                                            </a> --}}
                                            <form action="{{ route('product-galleries.destroy', $item->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Data Tidak Tersedia
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
