<h1 style="color: blueviolet">Daftar Stok Kendaraan</h1>
<a href="/tambah-stok">Tambah</a> <br><br>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
<table>
    <tr>
    <th>MERK</th>
    <th>TIPE</th>
    <th>HARGA</th>
    <th>ACTION</th>
    </tr>
    @if (empty($data))
        <tr>
            <td colspan="3">Datanya Kosong</td>
        </tr>
    @endif
        @foreach($data as $i)
        <tr style="text-align: center">
            <td>{{ $i->merk }}</td> 
            <td>{{ $i->tipe }}</td> 
            <td>{{ $i->harga }}</td>
            <td>
              <a href="/edit/{{ $i->id }}">Edit</a>
              <a href="/hapus/{{ $i->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
  </table>

  