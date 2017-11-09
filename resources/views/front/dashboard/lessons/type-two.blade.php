@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
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
                            {{ $lesson->key_true }}
                        </div>
                            <br>
                        <div>
                            <form method="POST" action="{{ route('dashboard.lesson.complete', [$typeSection->id]) }}">
                                {{ csrf_field() }}
                                <input name="result" type="text"></input>
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