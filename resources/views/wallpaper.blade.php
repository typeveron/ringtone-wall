@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    @foreach($wallpapers as $wallpaper)
    <div class="col-md-10 md-4">
        <div class="card" style="margin-top:50px;">
            <div class="card-header">{{$wallpaper->title}}</div>

            <div class="card-body">
                <p>{{$wallpaper->description}}</p>
                <p>
                    <img src="/uploads/{{$wallpaper->file}}"
                    class="img-thumbnail">
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-4">
        <p>
<form action="{{route('download1', [$wallpaper->id])}}" method="post">@csrf
    <button class="btn btn-primary" type="submit">Download 118x95</button>
    </form>
        </p>
        <p>
<form action="{{route('download2', [$wallpaper->id])}}" method="post">@csrf
    <button class="btn btn-primary" type="submit">Download 316x255</button>
    </form>
        </p>
        <p>
<form action="{{route('download3', [$wallpaper->id])}}" method="post">@csrf
    <button class="btn btn-primary" type="submit">Download 800x600</button>
    </form>
        </p>
<form action="{{route('download4', [$wallpaper->id])}}" method="post">@csrf
    <button class="btn btn-primary" type="submit">Download 1280x1024</button>
    </form>
</div>
@endforeach
    {{$wallpapers->links()}}
</div>
</div>
@endsection
