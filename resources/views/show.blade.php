@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 50px;">
                <div class="card-header">{{$ringtone->title}}</div>

                <div class="card-body">
                    <audio controls controlsList="nodownload">
                    <source src="/audio/{{$ringtone->file}}"
                    type="audio/ogg">
                    Your browser does not support this element.
                    </audio>
                </div>
                <div class="card-footer">
                    <form action="{{route('ringtones.download', [$ringtone->id])}}" method="post">@csrf
                    <button type="submit" class="btn btn-secondary
                    btn-sm">Download</button>
                    </form>
                </div>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
            </div>
            <table class="table mt-4">
                <tr>
                    <th>Title</th>
                    <td>{{$ringtone->title}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$ringtone->description}}</td>
                </tr>
                <tr>
                    <th>Format</th>
                    <td>{{$ringtone->format}}</td>
                </tr>
                <tr>
                    <th>Size (bytes)</th>
                    <td>{{$ringtone->size}}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{$ringtone->category->name}}</td>
                </tr>
                <tr>
                    <th>Download</th>
                    <td>{{$ringtone->download}}</td>
                </tr>

            </table>
        </div>
        <div class="col-md-4" style="margin-top: 50px;">
            <div class="card-header">Categories</div>
            @foreach(App\Models\Category::all() as $category)
            <div class="card-header" style="background-color: #ccc;"><a href="{{route('ringtones.category', [$category->id])}}">{{$category->name}}</a></div>
            @endforeach
        </div>
    </div>
    <div id="disqus_thread"></div>
<script>
    var disqus_config = function () {
    this.page.url = '{{ \Illuminate\Support\Facades\Request::url()}}';  
    this.page.identifier = '{{$ringtone->download}}'; 
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://ringtones-and-wallpapers.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
@endsection
