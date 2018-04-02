@extends('layout')

@section('content')

<main>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row location">
                                <a href="/">Main</a>
                                <span class="seperator">- -</span>
                                <span class="current-page">Registration</span>
                            </div>
                        </div>  
                    </div>

                    <div class="row reglist">
                        <div class="col-md-4 xs-hidden"></div>
                        <div class="col-xs-12 col-md-4 registr">
                            <p class="regfont">
                                <h2>Registration:</h2>
                            </p>
                            <form id="reg-form" method="post">
                                @csrf
                                <div class="errors" style="">
                                    <ul>
                                         @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="success" style="">
                                    <ul>
                                        @if(Session::has('success'))
                                        <li>{{ Session::get('success') }}</li>
                                        @endif
                                    </ul>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="firstName" class="form-control" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastName" class="form-control" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password2" class="form-control" placeholder="Retype password">
                                </div>
                                <div class="form-group">
                                    <input type="nummber" name="phone" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mail" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <select placeholder="Please select coutnry" name="country" class="form-control">
                                        <!-- <option value="0">Select country</option>
                                        <option value="1">Latvija</option>
                                        <option value="2">Lietuva</option>
                                        <option value="3">Igaunija</option>
                                        <option value="4">Polija</option> -->
                                        <option value="">Select country</option>
                                        <option value="Latvija">Latvija</option>
                                        <option value="Lietuva">Lietuva</option>
                                        <option value="Igaunija">Igaunija</option>
                                        <option value="Polija">Polija</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree" value="1"> Agree
                                    </label>
                                </div>
                                <button type="submit" class="buttn">Accept</button>
                            </form>
                            <div class="col-md-4 xs-hidden"></div>
                    
                    <br>


                </div> <!-- Container -->
                <br>
        </main>

 @endsection