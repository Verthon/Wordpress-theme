<?php

get_header('contact-us');


<main class="container">

<div class="row">
 <div class="col-md-4 col-xs-12 text-center padding-top"><a class="btn-nav" href="#submit photo">Submit photo</a></div>
 <div class="col-md-4 col-xs-12 text-center padding-top"><a class="btn-nav" href="#about us">About us</a></div>
 <div class="col-md-4 col-xs-12 text-center padding-top"><a class="btn-nav" href="#buy poster">Buy poster</a></div>
</div>

<div class="row padding-top">
 <div class="col-md-3">
 </div>
 <div class="container padding-top col-md-6">
   <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Submit photo</h3>
  </div>
  <div class="panel-body">
    <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please type your email">
  </div>
  <div class="form-group">
    <label class="btn btn-default" for="my-file-selector">
    <input id="my-file-selector" type="file" style="display:none;">
    <span class='label label-info' id="upload-file-info"></span>
    Browse
</label>

  </div>
  <div class="form-group">
    <textarea class="form-control" rows="4" placeholder="Please write your message"></textarea>
  </div>
   <button type="submit" class="btn btn-default">Submit!</button>
</form>
  </div>
 </div>
</div>
 <div class="col-md-3">
 </div>

</div>

<div class="row">
 <div class="col-md-3">
 </div>
  <div class="container padding-top col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Leave message</h3>
      </div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please type your email">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="Please write your message"></textarea>
          </div>
          <button type="submit" class="btn btn-default">Submit!</button>
        </form>
      </div>
<div class="panel-footer">tutaj mail</div>
    </div>
  </div>
  </div>

<div class="row">
 <div class="col-md-3">
 </div>
  <div class="container padding-top col-md-6">
  <div class="panel panel-default">
 <div class="panel-heading">
   <h3 class="panel-title text-center">Buy poster</h3>
 </div>
 <div class="panel-body">
   <form role="form">
 <div class="form-group">
   <label for="exampleInputEmail1">Email</label>
   <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please type your email">
 </div>
 <div class="form-group">
   <textarea class="form-control" rows="5" placeholder="Please write your message"></textarea>
 </div>
  <button type="submit" class="btn btn-default">Submit!</button>
</form>
 </div>
<div class="panel-footer">tutaj mail</div>
</div>
</div>

 <div class="col-md-3">
 </div>
</div>

</main>

get_footer('contact-us');
?>
