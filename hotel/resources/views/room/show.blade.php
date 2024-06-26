@extends('layouts.app')

@section('template_title')
    {{ $room->name ?? __('Show') . " " . __('Room') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Room</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rooms.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Room Number:</strong>
                                    {{ $room->room_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Floor:</strong>
                                    {{ $room->floor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Type:</strong>
                                    {{ $room->type }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categories:</strong>
                                    {{ $room->categories }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prix Par Nuit:</strong>
                                    {{ $room->prix_par_nuit }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Disponible:</strong>
                                    {{ $room->disponible }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
