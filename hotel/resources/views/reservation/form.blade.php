<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="room_id" class="form-label">{{ __('Room Id') }}</label>
            <input type="text" name="room_id" class="form-control @error('room_id') is-invalid @enderror" value="{{ old('room_id', $reservation?->room_id) }}" id="room_id" placeholder="Room Id">
            {!! $errors->first('room_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="client_id" class="form-label">{{ __('Client Id') }}</label>
            <input type="text" name="client_id" class="form-control @error('client_id') is-invalid @enderror" value="{{ old('client_id', $reservation?->client_id) }}" id="client_id" placeholder="Client Id">
            {!! $errors->first('client_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="check_in" class="form-label">{{ __('Check In') }}</label>
            <input type="text" name="check_in" class="form-control @error('check_in') is-invalid @enderror" value="{{ old('check_in', $reservation?->check_in) }}" id="check_in" placeholder="Check In">
            {!! $errors->first('check_in', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="check_out" class="form-label">{{ __('Check Out') }}</label>
            <input type="text" name="check_out" class="form-control @error('check_out') is-invalid @enderror" value="{{ old('check_out', $reservation?->check_out) }}" id="check_out" placeholder="Check Out">
            {!! $errors->first('check_out', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>