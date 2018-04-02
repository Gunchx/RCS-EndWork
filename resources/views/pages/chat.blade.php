@extends('layout')

@section('content')

<main>
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row location">
                                <a href="/">Main</a>
                                <span class="seperator">- -</span>
                                <span class="current-page">Communication</span>
                            </div>
                        </div>  
                    </div>

                    <div class="row chatbord">
                        <div class="col-xs-12">
                            <p>
                                <h2>Communication:</h2>
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <div class="chat-Window">
                               
                            </div>
                        </div>                
                
                            <div class="col-sm-12 ">
                                <div class="chat-message-form">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label for="chat-username-input">Username</label>
                                            <input type="text" class="form-control" id="chat-username-input">
                                        </div>
                                    </div>
                                    <div class="row">        
                                        <div class="form-group col-sm-10">
                                            <label for="chat-text-input">Message</label>
                                            <textarea class="form-control" id="chat-text-input"></textarea>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <button class="buttnChat" id="msgbutton">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
            </div> <!-- Container -->
        </main>

    @endsection