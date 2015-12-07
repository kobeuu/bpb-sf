@extends('admin')

@section('page_title', 'Pesan Masuk <small>13 total pesan</small>')

@section('content')
<div class="col-md-12">
  <div class="box box-primary">

    <div class="box-body no-padding">
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Waktu Kirim</td>
              <th>Pengirim</td>
              <th>No Kontak</td>
              <th>Pesan</td>
            </tr>
            @foreach ($messages as $message)
            <tr>
              <td class="mailbox-date">{{ $message->created_at }}</td>
              <td class="mailbox-name"><strong>{{ $message->name }}</strong></td>
              <td class="mailbox-name">{{ $message->hp }}</td>
              <td class="mailbox-subject"><a href="{{ url('/messages', $message->id) }}"><strong>{{ $message->subject }}</strong></a> - {{ $message->message }} </td>
            </tr>
            @endforeach
          </tbody>
        </table><!-- /.table -->
      </div><!-- /.mail-box-messages -->
    </div><!-- /.box-body -->
    <div class="box-footer">
      {!! $messages->render() !!}
    </div>
  </div><!-- /. box -->
</div><!-- /.col -->
@endsection
