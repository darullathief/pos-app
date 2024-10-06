<div class="w-100 h-100">
    <x-side-nav />

    <div class="main-content">
        <div class="d-flex flex-row">
            <input class="form-control me-3" style="font-family: FontAwesome;" placeholder='&#xf002' />
            <div class="d-grid col-2 mx-auto">
                <button class="btn btn-primary d-block w-full text-white rounded" data-bs-toggle="modal"
                    data-bs-target="#addProduct"><i class="fa-solid fa-plus"></i>
                    Tambah</button>
            </div>
        </div>
        <div class="modal fade" id="addProduct" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Tambah Data Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <input type="text" class="form-control mb-3 " disabled placeholder='SA113' />
                        <input type="text" class="form-control mb-3" placeholder='Nama Produk' />
                        <input type="number" class="form-control mb-3" placeholder='Harga' />
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-white">
                            <i class="fa-regular fa-paper-plane"></i> Kirim
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>