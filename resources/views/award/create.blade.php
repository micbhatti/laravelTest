@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  bg-light p-3 my-4">
            <h4>Add Award</h4>
                <div class="form-row col-md-8">
                    {!! Form::open(['route' => 'award.store']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Title')  !!}
                        {!! Form::text('title', null, ['class' => 'form-control form-control-sm'])  !!}
                    </div>
                    <div class="form-group">
                        {!!  Form::submit('Add Award') !!}
                        </div>
                    {!! Form::close() !!}
                </div>    
            </div>
        </div>
    </div>
</div>    
@endsection