@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col-lg-2">
    <a href="{{ route('acara.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Acara</a>
  </div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <form action="{{ url('import_acara') }}" method="post" class="form-inline" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-group {{ $errors->has('importAcara') ? 'has-error' : '' }}">
              <input type="file" class="form-control" name="importAcara" required="">

              <span class="input-group-btn">
                              <button type="submit" class="btn btn-success" style="height: 38px;margin-left: -2px;">Import</button>
                            </span>
            </div>
          </form>

        </div>

    <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
    </div>
</div>


<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title pull-left">Data acara</h4>
              
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Acara
                          </th>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            Lokasi
                          </th>
                          <th>
                            Anggaran
                          </th>
                        
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $index => $data)
                        <tr>
                          <td class="py-1">
                          @if($data->cover)
                            <img src="{{url('images/acara/'. $data->cover)}}" alt="image" style="margin-right: 10px;" />
                          @else
                            <img src="{{url('images/acara/default.png')}}" alt="image" style="margin-right: 10px;" />
                          @endif
                          <a href="{{route('acara.show', $data->id)}}"> 
                            {{$data->nama_acr}}
                          </a>
                          </td>

                          <td>
                            {{$data->tgl_acara}}
                          </td>
                          <td>
                            {{$data->lokasi}}
                          </td>
                          <td>
                            {{$data->jumlah_acara}}
                          </td>
                        
                          <td>
                          <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="{{route('acara.edit', $data->id)}}"> Edit </a>
                            <form action="{{ route('acara.destroy', $data->id) }}" class="pull-left"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                            </button>
                          </form>
                           
                          </div>
                        </div>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection