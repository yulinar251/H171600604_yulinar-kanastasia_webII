-@csrf

<div class="form-group row">
        <label form ="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-10">
           {!! Form::text('judul', null, ['class'=>"form-control",'required', 'autofocus']); !!}
    @error('judul')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<div class="form-group row">
    <label form ="kategori_artikel_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Artikel') }}</label>

        <div class="col-md-10">
            {!! Form::select('kategori_artikel_id', $KategoriArtikel, null, ["class"=>"form-control","required"] ); !!}

            @error('kategori_artikel_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<div class="form-group row">
        <label form ="isi" class="col-md-2 col-form-label text-md-right">{{ __('Isi') }}</label>

        <div class="col-md-10">
            {!! Form::textarea('isi', null,['class'=>'form-control']); !!}

            @error('isi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required >

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-warning">
                {{ __('Simpan Data') }}
            </button>
            <a href="{!! route('artikel.index')!!}" class="btn btn-danger">
                {{ __('Batal') }}
            </a>
    </div>
</div>
