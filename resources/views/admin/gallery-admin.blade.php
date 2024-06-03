@extends('layouts.navbar')

@section('table')
<main>
    <div class="container">
        <div class="select-btn" id="select-btn">
            <span class="btn-text">+ Klik disini Untuk Menambahkan Gallery</span>
            <span class="arrow-dwn">
                <i class="fa-solid fa-circle-chevron-down check-icon"></i>
            </span>
        </div>
        <div class="formulir" id="formulir">
            <form action="{{ route("galleryAdminStore") }}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="display: flex; flex-direction: column; margin-top: 10px">
                    <label for="name">Judul</label>
                    <input type="text" name="name" id="content" value="" />
                </div>
                <div style="display: flex; flex-direction: column; margin-top: 10px">
                    <label for="description">Deskripsi</label>
                    <input type="text" name="description" id="content" value="" />
                </div>
                <div class="user-details">
                    <input type="file" class="file-input" name="foto" accept="image/*">
                </div>
                <button type="submit">Upload</button>
                <button>Batal</button>
            </form>
        </div>
    </div>

<div class="img-editCr">
    <div class="edit-card">
        @foreach($gallery as $item)
            <article class="card__article">
                <img src="{{ asset("storage/gallery/".$item->foto) }}" class="card__img" alt="{{$item->name}}">

                <div class="card__data">
                    <span class="card__description">{{ $item->description }}</span>
                    <h2 class="card__title">{{ $item->name }}</h2>
                    <div style="display: flex;">
                        <button class="card__button_edit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        <form action="{{ route("galleryAdminDelete", $item->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="card__button_hapus"><i class="fa-solid fa-trash"></i>Hapus</button>
                        </form>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</div>
</main>
@endsection



