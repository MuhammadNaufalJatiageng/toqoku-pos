@extends('template.main')

@section('body')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Pembeli</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Qty</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($histories as $history)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $history->customer->name }}</td>
                <td>{{ $history->created_at }}</td>
                <td>{{ $history->product->product_name }}</td>
                <td>{{ $history->quantity }}</td>
                <td>{{ $history->total }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection