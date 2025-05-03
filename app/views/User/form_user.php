

<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                  
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= $tambah ?></h1>
                            </div>
                            <form class="user" method="post" id="UserForm" action="<?= $url ?>">
                                
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName" 
                                            placeholder="Masukan Nama user">
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" name="umur" id="exampleLastName" 
                                            placeholder="Umur">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"name="email" id="exampleInputEmail" 
                                        placeholder="E-mail">
                                </div>
                              
                                <hr>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Simpan</button>
                                <a href="<?= path('user')?>" class="btn btn-secondary"> <i class="fa fa-arrow-left"></i> kembali</a>

                            </form>
                            <div id="message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
