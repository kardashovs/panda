@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default" style="border: 0; box-shadow: none;padding: 20px;">
                    <div class="panel-heading"
                         style="text-align: left; text-transform: uppercase;font-weight: bold;border: 0;
                         background:none;">
                        Dashboard
                    </div>

                    <div class="panel-body" style="padding: 0;padding-top: 20px">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-warning">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div>
                            <center>
                                <img src="{{ asset( $lesson->image ) }}" alt="" style="max-width: 300px;">
                            </center>
                        </div>
                        <br>
                        <div>
                            <form method="POST" action="{{ route('dashboard.lesson.complete', [$typeSection->id]) }}">
                                {{ csrf_field() }}
                                <button style="" name="result" type="submit" value="dog">Dog</button>
                                <button name="result" type="submit" value="cat">Cat</button>
                                <button name="result" type="submit" value="apple">Apple</button>
                                <button name="result" type="submit" value="table">Table</button>
                            </form>
                        </div>
                        <br>
                        <div>
                            @if($nextLesson)
                                <a href="{{ route('dashboard.lesson', [$nextLesson->id, $nextLesson->typeable_type, $nextLesson->typeable_id]) }}">
                                    Продолжить
                                </a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection