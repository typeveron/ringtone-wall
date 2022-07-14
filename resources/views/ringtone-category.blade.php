@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(count($ringtones)>0)
            @foreach($ringtones as $ringtone)
            <div class="card" style="margin-top: 50px;">
                <div class="card-header">{{$ringtone->title}}</div>

                <div class="card-body">

                <audio controls onplay="pauseOthers(this);"
                controlsList="nodownload">
                <source src="/audio/{{$ringtone->file}}"
                type="audio/ogg">
                Your browser does not support this element.
                </audio>
                </div>
                <div class="card-footer">
                    <a href="{{route('ringtones.show', [$ringtone->id , $ringtone->slug])}}">Info Download</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-4" style="margin-top: 50px;">
            <div class="card-header">Categories</div>
            @foreach(App\Models\Category::all() as $category)
            <div class="card-header" style="background-color: #ccc;"><a href="{{route('ringtones.category', [$category->id])}}">{{$category->name}}</a></div>
            @endforeach
            @else
            <p>There are no ringtones listed for this category</p>
            @endif
        </div>
        {{$ringtones->links()}}
    </div>
</div>

@endsection