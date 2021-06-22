<x-template-layout>
    <div class="border-b p-3">
        <font size="5" class="font-bold pl-2">{{ $title }}</font>
  </div>
      <main>
        <form action="{{(isset($datguru))?route('dataguru.update',$datguru->id):route('dataguru.store') }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @if (isset($datguru))
                @method('PUT')
            @endif
            
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-3 bg-white space-y-2 sm:p-2">
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-3 sm:col-span-2">
                    <label for="nip" class="block text-sm font-medium text-gray-700">
                     NIP
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="nip" value="{{ (isset($datguru))?$datguru->nip:old('nip') }}" class="@error('nip') border border-red-500 @enderror focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2" placeholder="Masukan NIP">
                    </div>
                    <div class="text-xs text-red-600"> @error('nip') {{ $message }} @enderror</div>
                <br>
                    <label for="nama" class="block text-sm font-medium text-gray-700">
                        Nama Guru
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <input type="text" name="nama" value="{{ (isset($datguru))?$datguru->nama:old('nama') }}" class="@error('nama') border border-red-500 @enderror focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2" placeholder="Masukan Nama Lengkap">
                       </div>
                       <div class="text-xs text-red-600"> @error('nama') {{ $message }} @enderror</div>
                       <br>

                       {{-- <div class="col-span-2 sm:col-span-2">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status Guru</label>
                        <select name="status" value="{{ (isset($datguru))?$datguru->status:old('status') }}" class="mt-1 block w-full py-1 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                          <option>Active</option>
                          <option>Deactive</option>
                        </select>
                      </div><br> --}}

                      <label for="profesi" class="block text-sm font-medium text-gray-700">
                        Profesi
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <input type="text" name="profesi" value="{{ (isset($datguru))?$datguru->profesi:old('profesi') }}" class="@error('profesi') border border-red-500 @enderror focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2" placeholder="Masukan Profesi">
                       </div>
                       <div class="text-xs text-red-600"> @error('profesi') {{ $message }} @enderror</div>
                       <br>


                       <label for="tempatlhr" class="block text-sm font-medium text-gray-700">
                        Tempat Lahir & Tanggal Lahir
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <input type="text" name="tempatlhr" value="{{ (isset($datguru))?$datguru->tempatlhr:old('tempatlhr') }}" class="@error('tempatlhr') border border-red-500 @enderror focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2 " placeholder="Masukan Tempat Lahir">
                         
                         &ensp;
                         <input type="date" id="tgllhr" name="tgllhr" value="{{ (isset($datguru))?$datguru->tgllhr:old('tgllhr') }}" class="@error('tgllhr') border border-red-500 @enderror focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2">
                       </div>
                       <br>
                      
                       <label for="alamat" class="block text-sm font-medium text-gray-700">
                        Alamat
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <textarea name="alamat" class="focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2" placeholder="Masukan Alamat">{{ (isset($datguru))?$datguru->alamat:old('alamat') }}</textarea>
                       </div><br>

                       <label for="email" class="block text-sm font-medium text-gray-700">
                        Email
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <input type="text" name="email" value="{{ (isset($datguru))?$datguru->email:old('email') }}" class="focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2" placeholder="Masukan Email">
                       </div><br>

                       <label for="notelp" class="block text-sm font-medium text-gray-700">
                        No. Telp/HP
                       </label>
                       <div class="mt-1 flex rounded-md shadow-sm">
                         <input type="number" name="notelp" value="{{ (isset($datguru))?$datguru->notelp:old('notelp') }}" class="focus:ring-indigo-500 border border-gray-300 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm p-2" placeholder="Masukan No. Telp/HP">
                       </div><br>

                       <div>
                        <label class="block text-sm font-medium text-gray-700">
                          Foto
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                          <div class="space-y-1 text-center">
                            @if (isset($datguru) && $datguru->foto!='')
                              <img src="{{ asset('storage/'.$datguru->foto) }}" class="mx-auto w-15 h-20 text-gray-400 rounded" alt="">
                            @else
                              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            @endif
                            
                            <div class="flex text-sm text-gray-600">
                              <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="foto" type="file" class="sr-only">
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                              PNG, JPG, GIF up to 10MB
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">
                  Simpan
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

          </form>
      </main>
</x-template-layout>