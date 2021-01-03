<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog</title>
    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#app-navbar-collapse"
            >
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="/">
              Blog
            </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <ul class="nav navbar-nav">
              <li><a href="/admin/posts">Posts</a></li>
              <li>
                <a href="/admin/categories">Categories</a>
              </li>
              <li>
                <a href="/admin/comments">Comments</a>
              </li>
              <li><a href="/admin/tags">Tags</a></li>

              <li><a href="/admin/users">Users</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-expanded="false"
                >
                  Admin <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="/logout">
                      Logout
                    </a>

                    <form
                      id="logout-form"
                      action="/logout"
                      method="POST"
                      style="display: none;"
                    ></form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>
                  Edit Post

                  <a href="/admin/posts" class="btn btn-default pull-right"
                    >Go Back</a
                  >
                </h2>
                @include('partials._errors')
              </div>

              <div class="panel-body">
                <form
                  method="POST"
                  action="/admin/posts/{{$post->id}}"
                  accept-charset="UTF-8"
                  class="form-horizontal"
                  role="form"
                >
                {{-- <input type="hidden" name="_method" value="put"> --}}
                @method('put')
                @csrf
                  <div class="form-group">
                    <label for="title" class="col-md-2 control-label"
                      >Title</label
                    >

                    <div class="col-md-8">
                      <input
                        class="form-control"
                        required="required"
                        autofocus="autofocus"
                        name="title"
                        type="text"
                        value="{{$post->title}}"
                        id="title"
                      />

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="body" class="col-md-2 control-label"
                      >Body</label
                    >

                    <div class="col-md-8">
                      <textarea
                        class="form-control"
                        required="required"
                        name="body"
                        cols="50"
                        rows="10"
                        id="body"
                    >{{$post->body}}</textarea
                      >

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="category_id" class="col-md-2 control-label"
                      >Category</label
                    >

                    <div class="col-md-8">
                      <select
                        class="form-control"
                        required="required"
                        id="category_id"
                        name="category_id"
                        ><option value="1">sedd</option
                        ><option value="2">ut</option
                        ><option value="3">id</option
                        ><option value="4">occaecati</option
                        ><option value="5">sint</option
                        ><option value="6">quia</option
                        ><option value="7" selected="selected">ipsum</option
                        ><option value="8">quisquam</option
                        ><option value="9">unde</option
                        ><option value="10">voluptatum</option></select
                      >

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tag_id" class="col-md-2 control-label"
                      >Tag</label
                    >

                    <div class="col-md-8">
                      <select
                        class="form-control"
                        required="required"
                        id="tag_id"
                        name="tag_id[]"
                        multiple
                        >

                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}"
                                @foreach ($post->tags as $tagp)
                                    {{$tagp->id == $tag->id ? "selected" : "" }}
                                @endforeach

                            >{{$tag->name}}</option>
                        @endforeach
                        </select
                      >

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary">
                        Update
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
