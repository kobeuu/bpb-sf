@extends('admin')

@section('page_title', 'Pengguna')

@section('content')
<div class="col-md-12">
<div class="box box-primary">
  <div class="box-body no-padding">
    <div class="mailbox-read-info">
      <h3>{{ $message->subject }}</h3>
      <h5>Dari : {{ $message->email }} <span class="mailbox-read-time pull-right">{{ $message->created_at }}</span></h5>
    </div><!-- /.mailbox-read-info -->
    <div class="mailbox-read-message">
      {{ $message->message }}
    </div><!-- /.mailbox-read-message -->
  </div><!-- /.box-body -->
  <div class="box-footer">
    <div class="pull-right">
      <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
    </div>
    <button class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
    <button class="btn btn-default"><i class="fa fa-print"></i> Print</button>
  </div><!-- /.box-footer -->
</div><!-- /. box -->
</div><!-- /.col -->
@endsection
