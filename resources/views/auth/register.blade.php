@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim" value="{{ old('nim') }}" required>

                                @if ($errors->has('nim'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Angkatan') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="name" type="number" class="form-control{{ $errors->has('angkatan') ? ' is-invalid' : '' }}" name="angkatan" value="{{ old('angkatan') }}" required autofocus> -->
                                <select class="tags form-control program-multi" tabindex="-1"  name="angkatan" required="required">
                                  <option value="" disabled selected hidden>Pilih Angkatan</option>
                                  <option value="52">52</option>
                                  <option value="53">53</option>
                                  <option value="55">54</option>
                                </select>
                                @if ($errors->has('angkatan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('angkatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('role') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="name" type="number" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}" required autofocus> -->
                                <select class="tags form-control program-multi" tabindex="-1"  name="role" required="required">
                                  <option value="" disabled selected hidden>Pilih Posisi</option>
                                  <option value="1">Admin</option>
                                  <option value="0">Mahasiswa</option>
                                </select>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
