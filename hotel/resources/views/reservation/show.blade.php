@extends('layouts.app')

@section('template_title')
    {{ $reservation->name ?? __('Show') . " " . __('Reservation') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reservations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Room Id:</strong>
                                    {{ $reservation->room_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Client Id:</strong>
                                    {{ $reservation->client_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Check In:</strong>
                                    {{ $reservation->check_in }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Check Out:</strong>
                                    {{ $reservation->check_out }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
