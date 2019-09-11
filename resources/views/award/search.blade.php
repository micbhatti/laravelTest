@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5>Searc results for: <b>{{ $key }}</b></h5>
            <table class="table table-striped">
                <tbody>
                    @foreach($awards as $award) 
                        <tr>
                            <td colspan=40>{{ $award->title}}</td>
                            @if (Auth::user()->isAdmin())
                                <td>
                                    <a href="{{ route('award.edit',['id'=>$award->id]) }}" class="btn btn-warning mr-md-3">Edit</a>
                                    <a href="{{ route('award.delete',['id'=>$award->id]) }}" class="btn btn-danger ml-md-20">Delete</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                <tbody>
            </table>
  
          
        </div>
    </div>
</div>        
  
@endsection