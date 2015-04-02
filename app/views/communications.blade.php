@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-communication-message"></i> Conversations</h4>

                <div class="col s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        @foreach($conversations as $convo)
                            <li>
                                <div class="collapsible-header"><i class="mdi-communication-email"></i>
                                    @foreach($convo->names as $name)
                                        {{$name}},
                                    @endforeach
                                </div>
                                <div class="collapsible-body  container">
                                    @foreach($convo->correspondence as $corresp)
                                        <div class="row">
                                            <div class="col @if($corresp->Sender == Auth::user()->id) right @endif">

                                                <div class="card-panel
                                                @if($corresp->Sender == Auth::user()->id)
                                                blue lighten-2
                                                @endif">
                                                    @if($corresp->Sender == Auth::user()->id)
                                                        <div class="right-align white-text">You</div>
                                                    @else
                                                        <div class="left-align blue-text">
                                                            {{$convo->names[$corresp->Sender]}}
                                                        </div>
                                                    @endif
                                                    <div class="divider"></div>
                                                    {{$corresp->message}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="divider"></div>
                                    <br/>

                                    {{Form::open(array('route' => 'comm.reply'))}}
                                    <input type="hidden" name="conversation" value="{{$convo->id}}">

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-editor-mode-edit prefix"></i>
                                            <textarea id="message" name="message"
                                                      class="materialize-textarea"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <button class="btn waves-effect waves-light right" type="submit"
                                                name="action">
                                            Reply <i class="mdi-content-send right"></i>
                                        </button>
                                        </button>
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>


@stop