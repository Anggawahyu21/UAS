<x-template-layout>
    <div class="border-b p-3">
        <font size="5" class="font-bold pl-2">{{ $title }}</font>
  </div>
    <main>
        <div class="rounded sm:px-1 sm:px-1 sm:bg-gray-100 table table-bordered p-2 border border-transparent">
            <div class="card-header bg-white">
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{route('datasiswa.create')}}"><button class="px-4 py-1 text-sm rounded text-blue-600 font-semibold border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none"><i class="fas fa-plus pr-2 md:pr-2"></i>Tambah</button>
                        </a>
                    </div>
                    <form action="{{ route('datasiswa.search') }}" method="GET">
                    <div class="flex justify-content-end">
                        <input type="search" class="form-control px-2 py-1 ml-10 col-md-8" name="query" placeholder="Search..." />
                        <button type="submit" class="btn btn-primary ml-1"><i class="fas fa-search pr-1 md:pr-1"></i></button>
                    </div>
                </form>
                </div>
            </div>
       @if(isset($siswa))
        <table class="min-w-full divide-y">
        <thread class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase bg-blue-500 tracking-wider">Pilih</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase bg-blue-500 tracking-wider">No</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase bg-blue-500 tracking-wider">NIS</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase bg-blue-500 tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase bg-blue-500 tracking-wider">Tempat & Tanggal Lahir</th>
                {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Telp</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th> --}}
                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase bg-blue-500 tracking-wider">Option</th>
            </tr>
        </thread>
        <tbody class="divide-y divide-gray-200">
            @if(count($siswa) > 0)
            <?php $no=1; ?>
            @foreach ($siswa as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id=""></td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$no}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$item->nis}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$item->nama}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$item->tmptlhr}},&nbsp;{{date('d F Y', strtotime($item->tgllhr)) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        
                    <form action="{{ route('datasiswa.destroy',$item->id) }}" method="POST" class="pt-2">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('datasiswa.edit',$item->id) }}" class="px-1 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none mr-1"><i class="fas fa-edit pl-1 pr-1 md:pr-2"></i></a>

                        <button class="px-1 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none"><i class="fas fa-trash pl-1 pr-1 md:pr-2"></i></button>
                    </form>
                    </td>
                </tr>
                <?php $no++;?>
            @endforeach
            @endif
        </tbody>
        </table>
        @endif
     </div>
     @include('sweetalert::alert')

    </main>

</x-template-layout>