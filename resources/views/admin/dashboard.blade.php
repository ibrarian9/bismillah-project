@php use App\Models\User; @endphp
@extends('layouts.navbar')
<main>
    @section('page-content')
        <div class="page-content">

            <div class="analytics">

                <div class="card">
                    <div class="card-head">
                        <h2>{{ User::count() }}</h2>
                        <span class="las la-user-friends"></span>
                    </div>
                    <div class="card-progress">
                        <small>Jumlah Pengelola</small>
                        <div class="card-indicator">
                            <div class="indicator one" style="width: 60%"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head">
                        <h2>{{ $jumlahBerita }}</h2>
                        <span class="las la-eye"></span>
                    </div>
                    <div class="card-progress">
                        <small>Jumlah Berita</small>
                        <div class="card-indicator">
                            <div class="indicator two" style="width: 80%"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head">
                        <h2>{{$jumlahGallery}}</h2>
                        <span class="las la-shopping-cart"></span>
                    </div>
                    <div class="card-progress">
                        <small>Jumlah Gallery</small>
                        <div class="card-indicator">
                            <div class="indicator three" style="width: 65%"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head">
                        <h2>1</h2>
                        <span class="las la-envelope"></span>
                    </div>
                    <div class="card-progress">
                        <small>Struktur Organisasi</small>
                        <div class="card-indicator">
                            <div class="indicator four" style="width: 90%"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection

    @section('table')
        <div class="records table-responsive">
            <div class="record-header">
                <div class="add">
                    <span>Entries</span>
                    <select name="" id="">
                        <option value="">ID</option>
                    </select>
                    <button>Add record</button>
                </div>

                <div class="browse">
                    <input type="search" placeholder="Search" class="record-search">
                    <select name="" id="">
                        <option value="">Status</option>
                    </select>
                </div>
            </div>

            <div>
                <table width="100%">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th><span class="las la-sort"></span> BERITA</th>
                        <th><span class="las la-sort"></span> TANGGAL UPLOAD</th>
                        <th><span class="las la-sort"></span> STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($berita as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="client">
                                    <img class="client-img bg-img"
                                         src="{{asset("storage/foto_berita/".$item->foto_berita)}}"
                                         alt="{{ $item->foto_berita }}"/>
                                    <div class="client-info">
                                        <small>{{$item->judul}}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{$item->tanggal_terbit}}
                            </td>
                            <td>
                                <span class="paid">Upload</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endsection
</main>
</div>

