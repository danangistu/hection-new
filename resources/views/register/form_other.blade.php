<fieldset>
  <h4>Input data peserta:</h4>
  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Nama</label>
    <input type="text" name="peserta_name" placeholder="Nama" class="f1-first-name form-control" id="peserta_name">
    <input type="text" name="category" value="{{ $category }}" hidden />
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-email">Email</label>
    <input type="text" name="peserta_email" placeholder="Email" class="f1-email form-control" id="peserta_email">
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Nomor HP</label>
    <input type="text" name="peserta_hp" placeholder="Nomor HP" class="f1-first-name form-control" id="peserta_hp">
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Jenis Kelamin</label>
    <select name="peserta_gender" class="form-control" id="peserta_gender">
      <option>-- Jenis Kelamin --</option>
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-about-yourself">Alamat</label>
    <textarea name="peserta_address" placeholder="Alamat" class="f1-about-yourself form-control" id="peserta_address"></textarea>
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Kode Pos</label>
    <input type="text" name="peserta_postal_code" placeholder="Kode Pos" class="f1-first-name form-control" id="peserta_postal_code">
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Tempat Lahir</label>
    <input type="text" name="peserta_birthplace" placeholder="Tempat Lahir" class="f1-first-name form-control" id="peserta_birthplace">
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Tanggal Lahir (YYYY-MM-DD)</label>
    <input type="text" name="peserta_birthdate" placeholder="Tanggal Lahir (YYYY-MM-DD)" class="f1-first-name form-control" id="peserta_birthdate">
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Sekolah</label>
    <input type="text" name="peserta_school" placeholder="Sekolah" class="f1-first-name form-control" id="peserta_school">
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-first-name">Jurusan</label>
    <input type="text" name="peserta_jurusan" placeholder="Jurusan" class="f1-first-name form-control" id="peserta_jurusan">
  </div>

  <div class="form-group">
    <label class="sr-only" for="f1-about-yourself">Alamat Sekolah</label>
    <textarea name="peserta_sch_address" placeholder="Alamat Sekolah" class="f1-about-yourself form-control" id="peserta_sch_address"></textarea>
  </div>

  <div class="form-group">
    <label for="f1-first-name">Upload Photo (Max:2MB)</label><br/>
    <img id="output" height="200"/>
    <input type="file" name="photo" class="f1-first-name form-control" accept="image/*" onchange="loadFile(event)" id="peserta_photo">
  </div>

  <div class="form-group">
    <label for="f1-first-name">Upload ID/KTP/SIM/Kartu Pelajar (Max:2MB)</label><br/>
    <img id="output2" height="200"/>
    <input type="file" name="id_card" class="f1-first-name form-control" accept="image/*" onchange="loadFile2(event)" id="peserta_id_card">
  </div>

  <div class="f1-buttons">
    <button type="button" class="btn btn-next">Next</button>
  </div>
  </fieldset>
