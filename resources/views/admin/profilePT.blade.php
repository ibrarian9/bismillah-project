@extends('layouts.navbar')

@section('profilePT')
<main xmlns="http://www.w3.org/1999/html">
    <div class="container">
            <div class="select-btn" id="select-btn">
                <span class="btn-text">+ Klik disini Untuk Edit Profile</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-circle-chevron-down check-icon"></i>
                </span>
            </div>
            <div class="formulir" id="formulir">
                <form action="{{ route("updateProfile", $visiMisi->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="display: flex; flex-direction: column">
                        <label for="visi">Visi</label>
                        <input type="text" name="visi" id="content" value="{{ $visiMisi->visi }}"/>
                    </div>
                    <div style="display: flex; flex-direction: column; margin-top: 10px">
                        <label for="misi">Misi</label>
                        <input type="text" name="misi" id="content" value="{{ $visiMisi->misi }}"/>
                    </div>
                    <div style="display: flex; flex-direction: column; margin-top: 10px">
                        <label for="makna">Makna Logo</label>
                        <input type="text" name="maknalogo" id="content" value="{{ $visiMisi->maknalogo }}"/>
                    </div>
                    <div class="user-details">
                        <input type="file" name="logo" class="file-input" accept="image/*">
                    </div>
                    <button type="submit">Upload</button>
                    <button>Batal</button>
                </form>
            </div>
            <div class="visi">
                <h2>VISI</h2>
                <div id="content">
                    {{ $visiMisi->visi }}
                </div>
            </div>

            <div class="misi">
                <h2>MISI</h2>
                <div id="content">
                  {{ $visiMisi->misi }}
                </div>
            </div>

            <div class="misi">
                <h2>MAKNA LOGO</h2>
                <div id="content">
                  {!! $visiMisi->maknalogo !!}
                </div>
            </div>

        </div>

    </main>

@endsection
