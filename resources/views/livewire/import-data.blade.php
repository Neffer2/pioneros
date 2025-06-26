<div>
    <label for="file">Arrastra tu archivo aqu&iacute;</label>
    <input id="file" type="file" wire:model="file">
    @error('file')
        <span class="text-danger">{{ $message }}</span>
    @enderror


    @if (session()->has('import_error'))
        <div>
            @foreach (session()->get('import_error') as $error)
                <p style="margin-bottom: .3rem">{{ $error }}</p>
            @endforeach
        </div>
    @else
        @session('success')
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endsession
    @endif
</div>
