<div class="main">
  <div class="main-inner">
    <div class="container">
      
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header">
              <i class="icon-user"></i><h3> Form Tambah Pegawai</h3>
            </div>

            <div class="widget-content">
              <form id="edit-profile" class="form-horizontal" method="POST" action="<?=base_url('user/update') ?>">
                  <fieldset>
                    <input type="hidden" name="id_pegawai" value="<?= $user->id_pegawai ?>">
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Nama Lengkap</label>
                      <div class="controls">
                        <input type="text" class="span6" name="nama" value="<?=$user->nama_lengkap?>" placeholder="Masukan Nama Lengkap">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="firstname">NIP</label>
                      <div class="controls">
                        <input type="text" class="span6" name="nip" value="<?=$user->nip?>" placeholder="Masukan NIP">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                                       
                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Tempat Lahir</label>
                      <div class="controls">
                        <input type="text" class="span6" name="tempat_lahir" value="<?=$user->tempat_lahir?>" placeholder="Masukan Tempat Lahir">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->  

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Tanggal Lahir</label>
                      <div class="controls">
                        <input type="date" class="span6" name="tanggal_lahir" value="<?=$user->tgl_lahir?>" placeholder="Masukan Tanggal Lahir">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->    

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Jenis Kelamin</label>
                      <div class="controls">
                        <select name="jenis_kelamin" class="span6">
                          <option value="laki-laki"<?=$user->jenis_kelamin=='laki-laki'?' selected':''?>>Laki-laki</option>
                          <option value="perempuan"<?=$user->jenis_kelamin=='perempuan'?' selected':''?>>Perempuan</option>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Agama</label>
                      <div class="controls">
                        <select name="agama" class="span6">
                          <option value="islam"<?=$user->agama=='islam'?' selected':''?>>Islam</option>
                          <option value="kristen"<?=$user->agama=='kristen'?' selected':''?>>Kristen</option>
                          <option value="protestan"<?=$user->agama=='protestan'?' selected':''?>>Protestan</option>
                          <option value="hindu"<?=$user->agama=='hindu'?' selected':''?>>Hindu</option>
                          <option value="budha"<?=$user->agama=='budha'?' selected':''?>>Budha</option>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="jabatan">Jabatan</label>
                      <div class="controls">
                        <select name="jabatan" required class="span6">
                          <option>Pilih Salah Satu</option>
                          <?php
                          foreach ($jabatan as $j) {
                             echo "<option value='{$j->id_jabatan}'".($j->id_jabatan==$user->id_jabatan?' selected':'').">{$j->nama_jabatan}</option>";
                           } 

                           ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Email</label>
                      <div class="controls">
                        <input type="text" class="span6" name="email" value="<?=$user->email?>" placeholder="Masukan Email">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Alamat Rumah</label>
                      <div class="controls">
                        <textarea rows="5" name="alamat" class="span6"><?=$user->alamat_rumah?></textarea>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Telepon</label>
                      <div class="controls">
                        <input type="text" class="span6" name="telepon" value="<?=$user->telepon?>" placeholder="Masukan Nomer Telepon">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                     <div class="control-group">                     
                      <label class="control-label" for="lastname">Status User</label>
                      <div class="controls">
                        <select name="status" class="span6">
                          <option value="Aktif"<?=$user->status=='Aktif'?' selected':''?>>Aktif</option>
                          <option value="Tidak Aktif"<?=$user->status=='Tidak Aktif'?' selected':''?>>Tidak Aktif</option>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->   

                      
                     <br />
                  
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save</button> 
                      <button  type="reset" class="btn btn-primary" onclick="batal();">Cancel</button>
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                <script>
                function batal(){
                  location.href="<?=base_url('user');?>";
                }
                </script>
            </div>
            <!-- /widget-content --> 

          </div> 
        </div>
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
