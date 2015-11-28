@extends('admin')

@section('page_title', 'Buku Tamu')

@section('content')
<div class="col-md-3">
  <a href="/messages/create" class="btn btn-primary btn-block margin-bottom">Tulisa Pesan</a>
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Folders</h3>
      <div class="box-tools">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">12</span></a></li>
        <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
        <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
        <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a></li>
        <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
      </ul>
    </div><!-- /.box-body -->
  </div><!-- /. box -->
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Labels</h3>
      <div class="box-tools">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
        <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
      </ul>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div><!-- /.col -->
<div class="col-md-9">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Inbox</h3>
      <div class="box-tools pull-right">
        <div class="has-feedback">
          <input type="text" class="form-control input-sm" placeholder="Search Mail">
          <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div>
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
            @foreach ($messages as $message)
            <tr>
              <td>#</td>
              <td class="mailbox-name"><a href="#">{{ $message->name }}</a></td>
              <td class="mailbox-name">{{ $message->hp }}</td>
              <td class="mailbox-subject">{{ $message->subject }}</td>
              <td class="mailbox-date">5 mins ago</td>
            </tr>
            @endforeach
          </tbody>
        </table><!-- /.table -->
      </div><!-- /.mail-box-messages -->
    </div><!-- /.box-body -->
    <div class="box-footer no-padding">

    </div>
  </div><!-- /. box -->
</div><!-- /.col -->
@endsection
