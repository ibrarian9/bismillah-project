@extends('layouts.navbar')
    @section('berita-admin')
    <main>
        <div class="container">
            <div class="select-btn" id="select-btn">
                <span class="btn-text">+ Klik disini Untuk Menambahkan Berita</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-circle-chevron-down check-icon"></i>
                </span>
            </div>
            <div class="formulir" id="formulir">
                <form action="{{ route("berita-admin.store") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Judul Berita</span>
                            <input type="text" name="judul" placeholder="Judul Berita" required />
                        </div>
                        <div class="input-box">
                          <span class="details">Author</span>
                          <input type="text" name="author" placeholder="author" required />
                        </div>
                          <div class="input-box">
                            <span class="details">Tanggal terbit</span>
                            <input type="datetime-local" name="tanggal_terbit" required />
                          </div>
                          <div class="input-box">
                            <span class="details">Pilih Kategori</span>
                            <select name="id_kategori" required>
                              <option value="">Pilih Kategori</option>
                                @foreach($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div style="display: flex; flex-direction: column; margin-top: 10px">
                        <label for="isi_berita">Isi Berita</label>
                        <input type="text" name="isi_berita" id="content" value=""/>
                    </div>
                    <div class="user-details">
                        <input type="file" class="file-input" name="foto_berita" accept="image/*" required />
                    </div>
                    <button type="submit">Upload</button>
                    <button>Batal</button>
                </form>
            </div>
        </div>

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
                            <th><span class="las la-sort"></span> ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($berita as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="client">
                                        <img class="client-img bg-img" src="{{asset("storage/foto_berita/".$item->foto_berita)}}" alt="{{ $item->foto_berita }}"/>
                                        <div class="client-info">
                                            <small>{{ $item->judul }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{ $item->tanggal_terbit }}
                                </td>
                                <td>
                                    <span class="paid">Upload</span>
                                </td>
                                <td>
                                    <div class="actions" style="display: flex">
                                        <button style="margin-right: 10px"><span class="fa-solid fa-pen-to-square"></span></button>
                                        <form action="{{ route("berita-admin.destroy", $item->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit"><span class="fa-solid fa-trash"></span></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @endsection

