<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin Panel</title>
  {{ HTML::style('css/admin/side-menu.css') }}
  {{ HTML::style('css/admin/pure-min.css') }}
  {{ HTML::style('css/admin/main.css') }}
  {{ HTML::style('css/admin/font-awesome.min.css')}}
  {{ HTML::style('css/admin/jquery.dataTables.min.css')}}
  {{ HTML::style('css/admin/chosen.min.css')}}
  {{ HTML::style('css/admin/colpick.css')}}
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />


  
  {{ HTML::script('js/admin/jquery-1.8.2.min.js') }}
  {{ HTML::script('js/admin/chosen.jquery.min.js')}}
  {{ HTML::script('js/admin/ui.js') }}
  {{ HTML::script('js/admin/tinymce/tinymce.min.js')}}
  {{ HTML::script('js/admin/jquery.dataTables.min.js')}}
  {{ HTML::script('js/admin/colpick.js')}}

  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
  <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>

  <style type="text/css">

  .ui-sortable-handle {
    cursor: -moz-grab;
    cursor: -webkit-grab;
  }

  </style>
</head>
<body>

<div class="notifications">
  @if(Session::has('notice'))
    <div class="notify gr">
      <div class="circle">
        <i class="icon-ok fa fa-check"></i>
      </div>
      <div class="info">
        <span>Notice</span>
        <span>{{ Session::get('notice') }}</span>
      </div> 
    </div> 
  @endif
  @if(Session::has('warning'))
    <div class="notify rd">
      <div class="circle">
        <i class="icon-ok fa fa-warning"></i>
      </div>
      <div class="info">
        <span>Error</span>
        <span>{{ Session::get('warning') }}</span>
      </div> 
    </div> 
  @endif

  @if($errors->has())
   @foreach ($errors->all() as $error)
      <div class="notify rd">
        <div class="circle">
          <i class="icon-ok fa fa-warning"></i>
        </div>
        <div class="info">
          <span>Error</span>
          <span>{{ $error }}</span>
        </div>  
      </div>
    @endforeach
  @endif
</div> 


  <div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
      <!-- Hamburger icon -->
      <span></span>
    </a>

    <div id="menu">
      <div class="pure-menu pure-menu-open">
        <a class="pure-menu-heading" href="#">Admin Panel</a>

        <ul>
          <li><a href="{{ URL::route('admin.questions.index') }}">FAQ's</a></li>
          <li><a href="{{ URL::route('admin.blogs.index') }}">Blogs</a></li>
          <li><a href="{{ URL::route('admin.categories.index') }}">Categories</a></li>
          <li class="menu-item-divided"></li>
          <li><a href="{{ URL::route('admin.postings.index') }}">Careers</a></li>
          <li><a href="{{ URL::route('admin.applications.index') }}">Applications</a></li>
           <li><a href="{{ URL::route('admin.contents.index') }}">Contents</a></li>
          <li class="menu-item-divided"></li>
          
        </ul>
      </div>
    </div>

    <div id="main">
      @yield('content')
    </div>
  </div>
  <!-- SCRIPT FOR NOTIFICATIONS -->
  <script>
  $('.notify').click( function() {
    $(this).fadeOut();
  });   
  </script>

  <!-- SCRIPT FOR REMOVING LOADED IMAGES -->
  <script>
    $(window).load(function() { 
     $("img").each(function(){ 
        var image = $(this); 
        if(image.context.naturalWidth == 0 || image.readyState == 'uninitialized'){  
           $(image).unbind("error").hide();
        } 
     }); 
  });
  </script>
  @yield('script')
</body>
</html>
