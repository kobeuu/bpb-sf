@extends('admin')

@section('page_title', 'Pesan Masuk')

@section('content')
<div class="col-md-12">
  @if(count($messages))
  <div class="box box-primary">
    <div class="box-body no-padding">
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <th>Waktu</td>
              <th>Pengirim</td>
              <th>No Kontak</td>
              <th>Pesan</td>
            </tr>
            @foreach ($messages as $message)
            <tr>
              <td class="mailbox-date">{{ $message->created_at }}</td>
              <td class="mailbox-name"><strong>{{ $message->name }}</strong></td>
              <td class="mailbox-name">{{ $message->hp }}</td>
              <td class="mailbox-subject"><a href="{{ url('/messages', $message->id) }}"><strong>{{ $message->subject }}</strong></a> - {{ substr($message->message, 0, 200) }} ... </td>
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
  @else
  <div class="callout callout-info">
    <h4>Tidak ada pesan!</h4>
    <p>Belum ada pesan yang masuk</p>
  </div>
  @endif
</div><!-- /.col -->
@endsection
