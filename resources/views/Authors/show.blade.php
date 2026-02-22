@extends('layouts.app')

@section('content')

<div class="containe mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h2 class="mb-0">
                        Detail penulis {{ $penulis->name_author }}
                    </h2>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold">
                            {{ $penulis->name_author }}
                        </h3>
                        <span class="bg-green lnline-block text-white text-sm font-semibold px-3 py-1 rounded-full">
                            Umur : {{ $penulis->age }} Tahun
                        </span>
                    </div>
                    <div class="border-t pt-6 space-y-6">
                        <div class="">
                            <h3 class="text-gray-500 font-semibold">
                                Alamat
                            </h3>
                            <p>
                                {{ $penulis->alamat }}
                            </p>
                        </div>
                        <div class="">
                               <h3 class="text-gray-500 font-semibold">
                                Alamat
                            </h3>
                            <p>
                                {{ $penulis->alamat }}
                            </p> 
                        </div>
                        <div class="">
                            <h3 class="text-gray-500 font-semibold">
                                Alamat
                            </h3>
                            <p>
                                {{ $penulis->alamat }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center gap-4">
                        <a href="{{ route("penulis.index") }}" class="px-5 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg transition">
                            kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection