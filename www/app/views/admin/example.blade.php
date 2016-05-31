@extends('admin.layouts.master')

@section('content')

    <div class="header">
        <h1>Example page</h1>
        <h2>This page will guide you through using the admin panel</h2>
    </div>

    <div class="content">
    	<h3 class="content-subhead">Helpers</h3>
    	<p>The project has a file located at app/lib/helpers, which provides various functions for uploading files</p>
    	<h4>Installation</h4>
    	<p>To use this file in your project, simply make a folder called <code>app/lib</code> and paste in the <code>helpers.php</code> file</p>
    	<p>After that go to your <code>composer.json</code> file and add 
    		<code>"files": [
			"app/lib/helpers.php"
		]</code> after the end of autoload. These functions are now available to you globally through out your project.
			</p>
    </div>

    <form class="pure-form pure-form-aligned" method="POST" action="{{ URL::route('store')}}" enctype="multipart/form-data">
        <fieldset>
          <div class="pure-control-group">
            <label></label>
            <img src="" class="admin_images" alt="">
          </div>
          <div class="pure-control-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
          </div>
          <button type="submit" class="pure-button pure-button-primary">Change</button>
        </fieldset>
      </form>

  <div class="wf-modal" aria-hidden="true" id="protip-example">
        <div class="wf-dialog-modal">
          <header class="wf-header-modal">
            <h2 class="content-subhead">Edit Protip</h2>
            <span class="close"><a href="#" class="bt" aria-hidden="true"></a></span>
          </header>
          <div class="wf-content-modal">
            <form action="" class="pure-form pure-form-stacked pure-form-aligned" width="100%" method="POST">
            <input type="hidden" value="" name="event_id">
            <fieldset>
              <img style="height:50px;" src="" alt="">
              <div class="pure-control-group">
                <label for="file">Image ( 145px * 125px )</label>
                <input type="file" name="image"><br />
              </div>
              <div class="pure-control-group">
                <label for="title">Title</label>
                <input type="text" name="title" required placeholder="Title" value=""><br/>
              </div>
              <div class="pure-control-group">
                <label for="body">Body</label>
                <textarea name="body" rows="8" required placeholder="Tip"></textarea>
              </div>
            </fieldset>
          </div>
          <footer class="wf-footer-modal">
              <button type="submit" class="pure-button pure-button-primary">Update</button>
          </footer>
          </form>
        </div>
      </div>

     

      {{orderTable('images', URL::route('store'))}}
@stop