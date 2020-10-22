@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumb'=>'page.tag'])
        {{ trans('themes::tags.tag', ['tag'=>$tag->name]) }}
    @endcomponent

    <section class="row service_details">
        <div class="container">
            <div class="row">
                @if($pages->count()>0)
                    @foreach($pages->chunk(3) as $chunk)
                        <div class="row">
                            @foreach($chunk as $page)
                                <div class="col-md-3">
                                    <div class="thumbnail card">
                                        @include('page::components.image', ["page_settings"=>$page->settings, "page"=>$page])
                                        <div class="caption">
                                            <a href="{{ $page->url }}">
                                                <h5 class="card-title font-16 title">{{ $page->title }}</h5>
                                            </a>
                                            <p>{{ str_limit(strip_tags($page->body), 180) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-12">
                            {!! $pages->links('partials.components.pagination') !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@stop
