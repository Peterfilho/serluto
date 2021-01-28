@extends('layouts.app')

@section('content')

        @include('frontend._search')

        <div class="row">

            <div class="col-md-12">
                @forelse ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $post->title }} - <small>by {{ $post->user->name }}</small>

                            <span class="pull-right">
                                <!-- {{ $post->created_at->toDayDateTimeString() }} -->
                                Publicado em:
                                {{ $post->created_at->format('m/d/Y - H:i:s') }}
                            </span>
                        </div>

                        <div class="panel-body">
                            <p>{{ str_limit($post->body, 60) }}</p>
                            <p>
                                Tags:
                                @forelse ($post->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @empty
                                    <span class="label label-danger">No tag found.</span>
                                @endforelse
                            </p>
                            <p>
                                Categoria: <span class="label label-default">{{ $post->category->name }}</span>
                            </p>
                            <p>
                                <span class="raise btn orange"><i class="far fa-comment left"></i>Commentários <span class="new-badge orange darken-2">{{ $post->comments_count }}</span></span>
                        
                                <a href="{{ url("/posts/{$post->id}") }}" class="raise btn green"><i class="fas fa-plus left"></i>Ver mais</a>
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Desculpe! Nenhum post encontrado.</p>
                        </div>
                    </div>
                @endforelse

                <div align="center">
                    {!! ($posts->links()) !!}
                    <!-- {!! $posts->appends(['search' => request()->get('search')])->links() !!} -->
                </div>

            </div>
          </div>


@endsection
