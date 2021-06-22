<x-template-layout>
    <div class="border-b p-3">
        <font size="5" class="font-bold pl-2">{{ $title }}</font>
  </div>
<main>
    <div class="container">
        <div class="card kartu mt-4">
          <div class="row">
            <div class="col-md-4 p-4 pl-sm-5 ">
              <img src="{{ asset('storage/'.$siswa->foto) }}" alt="" style="height: 300px;
              width: 200px;">
              <a href="{{ route('datasiswa.edit',$siswa->id) }}" class="px-2 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none mr-1"><i class="fas fa-edit pl-1 pr-1 md:pr-2 pt-sm-4"></i>Edit</a>
              <a href="{{ route('datasiswa.index') }}" class="px-2 py-1 text-sm rounded text-blue-600 font-semibold border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none mr-1"><i class="fas fa-long-arrow-alt-left pl-1 pr-1 md:pr-2 pt-sm-4"></i>Kembali</a>
            </div>
            <div class="col-md-8 kertas-biodata">
              <div class="biodata">
              <table border="0" width="100%" class="mt-6 col-md-12" style="font-size: 16px;
              font-weight: 300; font-family: Montserrat, Helvetica, sans-serif; padding-right: 13px">
                <tbody>
                  <tr>
                    <td width="25%" valign="top" class="textt">NIS</td>
                      <td width="2%">:</td>
                      <td>{{$siswa->nis}}</td>
                  </tr>
                  <tr>
                    <td>NISN</td>
                      <td>:</td>
                      <td>{{$siswa->nisn}}</td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                      <td>:</td>
                      <td>{{$siswa->nama}}</td>
                  </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td>Laki-Laki</td>
                  </tr>
                <tr>
                    <td>Tempat Lahir</td>
                      <td>:</td>
                      <td>{{$siswa->tmptlhr}}</td>
                  </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                      <td>:</td>
                      <td>{{date('d F Y', strtotime($siswa->tgllhr)) }}</td>
                  </tr>
                <tr>
                    <td valign="top">Alamat</td>
                      <td valign="top">:</td>
                      <td>{{$siswa->alamat}}</td>
                  </tr>
                  <tr>
                    <td valign="top" class="textt">Email</td>
                      <td valign="top">:</td>
                      <td>{{$siswa->email}}</td>
                  </tr>
                  <tr>
                    <td valign="top" class="textt">No Telp/HP</td>
                      <td valign="top">:</td>
                      <td>{{$siswa->notelp}}</td>
                  </tr>
              </tbody>
            </table>
        </div>
            </div>
          </div>
        </div>
      </div>
</main>
</x-template-layout>