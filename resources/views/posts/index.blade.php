@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="page-header">
                <h3>All Posts</h3>
            </div>
            @forelse ($posts as $post)
                <div class="card mt-3">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>

                    <div class="card-body">
                        {{ $post->body }}
                    </div>
                    @if (Auth::check())
                    <div class="card-footer">
                        <favorite
                            :post={{ $post->id }}
                            :favorited={{ $post->favorited() ? 'true' : 'false' }}
                        ></favorite>
                    </div>
                @endif
                </div>
            @empty
                <p>Ba9i makyn walo.</p>
            @endforelse

            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection