@extends('layouts.app')

@section('content')
    <div class="row-fluid">
        <div class="span2"></div>
        <div class="container">
            <chat-form
                    v-on:messagesent="addMessage"
                    :user="{{ Auth::user() }}"
            ></chat-form>
           <chat-messages :messages="messages"></chat-messages>

        </div>
    </div>
@endsection