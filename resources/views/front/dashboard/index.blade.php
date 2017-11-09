@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="border: 0; background:none;box-shadow: none">
                    <div class="panel-heading" style="text-align: center; text-transform: uppercase;font-weight: bold;border: 0; background:none;">
                        Training blocks

                    </div>

                    <div class="panel-body" style="padding: 0;padding-top: 20px">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @foreach($sections as $section)
                            <div style=" margin-bottom: 20px; padding: 10px; background:#fff;">
                                <h3>{{ $section->title }}</h3>
                                <ul style="margin: 0;padding: 0;">

                                    @foreach($section->lessons as $lesson)
                                    <li style="display: inline-block; list-style: none;padding: 0;margin: 0;margin-left: 10px;">
                                        @if( $lesson->complete )
                                            <a href="{{ route('dashboard.lesson', [$lesson->id, $lesson->typeable_type, $lesson->typeable_id]) }}">
                                                <img src="{{ url('images/lesson.png') }}" alt="">
                                            </a>
                                        @else
                                            <a href="{{ route('dashboard.lesson', [$lesson->id, $lesson->typeable_type, $lesson->typeable_id]) }}">
                                                <img src="{{ url('images/no-complete.png') }}"  alt="">
                                            </a>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection