<?php
$void = 'javascript:void(0)';
?>
@extends('layout')

@section('title',"Welcome")

@section('content')
@include('header',['caption' => "Dashboard"])
<input type="hidden" id="a-k" value="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"/>
<div class="row">
   <!--
    <div class="col-md-12 mt-3 mb-5">
         <div class="form-group">
            <p class="control-label">Test Results</p>
            <div id="test-result" class="form-control"></div>
         </div>
    </div>
-->
    <div class="col-md-6">
         <div class="form-group">
            <p class="control-label">Sender Name</p>
            <input type="text" id="sname" class="form-control" placeholder="Sender name"/>
         </div>
    </div>
    <div class="col-md-6">
         <div class="form-group">
            <p class="control-label">Sender Email</p>
            <input type="text" id="reply-to" class="form-control" placeholder="Reply-to email"/>
         </div>
    </div>
    <div class="col-md-12 mt-3">
         <div class="form-group">
            <p class="control-label">Subject</p>
            <input type="text" id="subject" class="form-control" placeholder="Subject"/>
         </div>
    </div>
    <div class="col-md-6 mt-3">
         <div class="form-group">
            <p class="control-label">Leads</p>
            <textarea type="text" id="leads" rows="15" class="form-control"></textarea>
         </div>
    </div>
    <div class="col-md-6 mt-3">
         <div class="form-group">
            <p class="control-label">Message</p>
            <textarea type="text" id="msg" rows="15" class="form-control"></textarea>
         </div>
    </div>
    <div class="col-md-12 mt-2 mb-5">
         <div class="form-group">
            <button id="send-btn" class="btn btn-primary">Send</button>
         </div>
    </div>
    <div class="col-md-12 mb-5">
     <h2>Send Results</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm data-table">
          <thead>
            <tr>
              <th scope="col">Email address</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody id="result-body">
           
          </tbody>
        </table>
      </div>
    </div>
</div>

@stop
