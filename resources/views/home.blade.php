@extends('layout')
@section('title' , 'Home')
@section('content')

   {{-- {!! "<script>alert('Hello')</script>" !!} --}}

    <div class="container">

        <div class="row form-search">
            <form method="GET" action="" accept-charset="UTF-8" role="form">
                <div class="col-md-10">
                    <input class="form-control" placeholder="Search..." name="search" type="text">
                </div>
                <div class="col-md-2">
                    <input class="btn btn-block btn-default" type="submit" value="Sumbit">
                </div>
            </form>
        </div>

        <div class="row">
            @guest
            <div class="col-md-12">
                @foreach ($posts as $item)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{$item->title}} <small>by Prof. {{$item->auther}}</small>

                            <span class="pull-right">
                                 {{ $item->created_at }}
                            </span>
                        </div>

                        <div class="panel-body">
                            <p>{{$item->body}}</p>

                            <p>

                                @foreach ($item->tags as $tag )
                               Tags: <span class="label label-danger">{{$tag->name}}.</span>
                               @endforeach
                            </p>
                            <p>
                                <span class="btn btn-sm btn-success">{{ $item->category->name }}</span>
                            <a href="/post/{{$item->id}}" class="btn btn-sm btn-primary">See more</a>
                            </p>
                        </div>
                    </div>
                @endforeach

                <div class="text-center">
                    {{$posts->links()}}
                </div>

            </div>
            @else
            <div class="col-md-12">
                @foreach ($posts as $item)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{$item->title}} <small>by Prof. {{$item->auther}}</small>

                            <span class="pull-right">
                                 {{ $item->created_at }}
                            </span>
                        </div>

                        <div class="panel-body">
                            <p>{{$item->body}}</p>

                            <p>

                                @foreach ($item->tags as $tag )
                               Tags: <span class="label label-danger">{{$tag->name}}.</span>
                               @endforeach
                            </p>
                            <p>
                                <span class="btn btn-sm btn-success">{{ $item->category->name }}</span>
                                <a href=" admin/comments/create " class="btn btn-sm btn-info"  >
                                    Comments <span class="badge"></span></a>

                            <a href="/post/{{$item->id}}" class="btn btn-sm btn-primary">See more</a>
                            </p>
                        </div>
                    </div>
                 @endforeach

                </div>

                <div class="text-center">
                    {{$posts->links()}}
                </div>

            </div>

            @endguest

        </div>



    </div>

    @endsection
