<div class="rounded sm:px-1 sm:px-1 sm:bg-gray-100">
    <table class="min-w-full divide-y">
    <thread class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pilih</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan/Profesi</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tempat & Tanggal Lahir</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th> 

            {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Telp</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th> --}}
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Option</th>
        </tr>
    </thread>
    <tbody class="divide-y divide-gray-200">
        <?php $no=1; ?>
        @foreach ($datguru as $guru)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id=""></td>
                <td>{{$no}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$guru->nip}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$guru->nama}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$guru->profesi}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$guru->tempatlhr}},&nbsp;{{date('d F Y', strtotime($guru->tgllhr)) }}</td>
            </tr>
            <?php $no++;?>
        @endforeach
    </tbody>
    </table>
 </div>