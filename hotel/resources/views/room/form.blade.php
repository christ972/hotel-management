<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="room_number" class="form-label">{{ __('Room Number') }}</label>
            <input type="text" name="room_number" class="form-control @error('room_number') is-invalid @enderror" value="{{ old('room_number', $room?->room_number) }}" id="room_number" placeholder="Room Number">
            {!! $errors->first('room_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="floor" class="form-label">{{ __('Floor') }}</label>
            <input type="text" name="floor" class="form-control @error('floor') is-invalid @enderror" value="{{ old('floor', $room?->floor) }}" id="floor" placeholder="Floor">
            {!! $errors->first('floor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type" class="form-label">{{ __('Type') }}</label>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type', $room?->type) }}" id="type" placeholder="Type">
            {!! $errors->first('type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="categories" class="form-label">{{ __('Categories') }}</label>
            <input type="text" name="categories" class="form-control @error('categories') is-invalid @enderror" value="{{ old('categories', $room?->categories) }}" id="categories" placeholder="Categories">
            {!! $errors->first('categories', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prix_par_nuit" class="form-label">{{ __('Prix Par Nuit') }}</label>
            <input type="text" name="prix_par_nuit" class="form-control @error('prix_par_nuit') is-invalid @enderror" value="{{ old('prix_par_nuit', $room?->prix_par_nuit) }}" id="prix_par_nuit" placeholder="Prix Par Nuit">
            {!! $errors->first('prix_par_nuit', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="disponible" class="form-label">{{ __('Disponible') }}</label>
            <input type="text" name="disponible" class="form-control @error('disponible') is-invalid @enderror" value="{{ old('disponible', $room?->disponible) }}" id="disponible" placeholder="Disponible">
            {!! $errors->first('disponible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>