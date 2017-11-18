@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default" style="border: 0; box-shadow: none;padding: 20px;">
                    <div class="panel-heading">
                        <div><strong>{{ $lesson->type->title }}</strong></div>
                        <div>{{ $lesson->type->description }}</div>
                    </div>
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
                            <center>
                                <img src="{{ asset( $lesson->image ) }}" alt="" style="max-width: 300px;">
                            </center>
                        </div>
                            <br>
                        <div>
                            <center>
                                <form method="POST" action="{{ route('dashboard.lesson.complete', [$typeSection->id]) }}">
                                    {{ csrf_field() }}
                                    <input name="result" type="text" style="border: 0;border-bottom: 2px solid #21FF00;
                                    border-radius: 5px;background:#C4C4C4;
"></input>
                                </form>
                            </center>
                        </div>

                    </div>
                </div>
                <div style="text-align: right; background:#95C5FF;padding: 20px;">
                    @if($nextLesson)
                        <a style="color: #fff;padding: 8px 20px;border-radius: 30px;border: 1px solid #fff;
                        margin-right: 30px"
                           href="{{ route('dashboard.lesson', [$nextLesson->id, $nextLesson->typeable_type, $nextLesson->typeable_id]) }}">
                            Пропустить
                        </a>
                        <a style="background:#fff;color: #95C5FF;padding: 9px 20px;border-radius: 30px"
                           href="{{ route('dashboard.lesson', [$nextLesson->id, $nextLesson->typeable_type, $nextLesson->typeable_id]) }}">
                            Продолжить
                        </a>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection