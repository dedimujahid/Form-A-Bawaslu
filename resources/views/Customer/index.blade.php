
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Data Form A
            </h2>
        </x-slot>

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                 
         
                    <!--  sale analytics start -->
                      <div class="col-xl-12 col-md-12">
                        <div class="card table-card">
                          <div class="card-header">
                            <h5>Data Form A</h5>
                            <div class="card-header-right">
                            <a href="{{route('cetak_pdf')}}" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i>CETAK PDF</a>
                              <ul class="list-unstyled card-option">
                                <li>
                                  <i class="fa fa fa-wrench open-card-option"></i>
                                </li>
                                <li>
                                  <i class="fa fa-window-maximize full-card"></i>
                                </li>
                                <li>
                                  <i class="fa fa-minus minimize-card"></i>
                                </li>
                                <li>
                                  <i class="fa fa-refresh reload-card"></i>
                                </li>
                                <li>
                                  <i class="fa fa-trash close-card"></i>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-block">
                            <div class="table-responsive">
                              <table class="table table-hover m-b-0 without-header">
                                <tbody>
                                  <tr>
                                  <div class="d-inline-block align-middle bg-gray-50 ">
                                  <td >
                                      <h6 class="f-w-700">
                                        Nama
                                      </h6>
                                    </td>
                                    <td >
                                      <h6 class="f-w-700">
                                        Nomor Telepon
                                      </h6>
                                    </td>
                                    <td >
                                      <h6 class="f-w-700">
                                        Email
                                      </h6>
                                    </td>
                                    <td >
                                      <h6 class="f-w-700">
                                        Alamat
                                      </h6>
                                    </td>
                                  </tr>
                                 
                        @foreach ($customer as $Customer)
                        <tr>
                            <div class="d-inline-block align-middle">
                            <td >
                                {{ $Customer->nama }}
                            </td>
                            <td >
                                {{ $Customer->nomor_telepon }}
                            </td >
                            <td >
                                {{ $Customer->email }}
                            </td>
                            <td >
                                {{ $Customer->alamat }}
                            </td>
                            <td>
                                <a href="{{url('customer/delete',array($Customer->id_customer))}}" class="px-4 py-2 text-white bg-indigo-600 rounded">
                                    Delete</a>
                                <a href="{{url('customer/edit',array($Customer->id_customer))}}" class="px-4 py-2 text-white bg-red-600 rounded">
                                    Edit</a>
                                <a href="{{url('customer/view',array($Customer->id_customer))}}" class="btn btn-info rounded">
                                    Lihat</a>
                            </td>
                            </div>
                        </tr>
                        @endforeach
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <form action="{{url('customer/create')}}" method="get">
                    
                    <button class="ml-3"
                    type="submit" wire:click="update" name="new" id="new" value="Tambah Data" class="card bg-c-green total-card">
                    Tambah Data
                </button>
                 
                 </form>     
            </div>
        </div>
    </div>
