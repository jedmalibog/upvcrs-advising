@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">Student Id</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bdate') ? ' has-error' : '' }}">
                            <label for="bdate" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="bdate" type="date" class="form-control" name="bdate" value="{{ old('bdate') }}" required autofocus>

                                @if ($errors->has('bdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <!--  <div class="form-group{{ $errors->has('degree_program') ? ' has-error' : '' }}">
                            <label for="degree_program" class="col-md-4 control-label">Degree Program</label>

                            <div class="col-md-6">
                                <input id="degree_program" type="phone_numb" class="form-control" name="degree_program" value="{{ old('degree_program') }}" required autofocus>

                            
                            </div>
                        </div>
 -->
                        <div class="form-group">
                            <label for="degree_program" class="col-md-4 control-label">Degree Program</label>

                            <div class="col-md-6">
                                <select name="degree_program" class="form-control" value="{{ old('degree_program') }}" required autofocus>
                                    <optgroup label="College of Arts and Sciences">
                                    <option>BS in Applied Mathematics</option>
                                    <option>BS (Biology)</option>
                                    <option>BS in Chemistry</option>
                                    <option>BA in Communication & Media Studies</option>
                                    <option>BA (Community Development) </option>
                                    <option>BS in Computer Science</option>
                                    <option>BS in Economics</option>
                                    <option>BA (History)</option>
                                    <option>BA (Literature)</option>
                                    <option>BA (Political Science)</option>
                                    <option>BA (Psychology)</option>
                                    <option>BS in Public Health</option>
                                    <option>BA (Sociology)</option>
                                    <option>BS in Statistics</option>
                                    </optgroup>

                                    <optgroup label="College of Fisheries and Ocean Sciences">
                                    <option>BS Fisheries</option>
                                    </optgroup>
                                    
                                    <optgroup label="School of Technology">
                                    <option>BS in Chemical Engineering</option>
                                    <option>BS in Food Technology</option>
                                    </optgroup>
                                </select>
                                @if ($errors->has('degree_program'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('degree_program') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="degree_level" class="col-md-4 control-label">Degree Level</label>

                            <div class="col-md-6">
                                <select name="degree_level" class="form-control" value="{{ old('degree_level') }}" required autofocus>
                                    <option>Secondary</option>
                                    <option>Undergraduate</option>
                                    <option>Graduate</option>
                                </select>
                                @if ($errors->has('degree_level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('degree_level') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="year_level" class="col-md-4 control-label">Year Level</label>

                            <div class="col-md-6">
                                <select name="year_level" class="form-control" value="{{ old('year_level') }}" required autofocus>
                                    <option>1st Year</option>
                                    <option>2nd Year</option>
                                    <option>3rd Year</option>
                                    <option>4th Year</option>
                                    <option>Nth Year</option>
                                </select>
                                @if ($errors->has('year_level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year_level') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
