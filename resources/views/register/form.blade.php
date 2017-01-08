<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hection 2017</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset(null) }}frontend/register/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset(null) }}frontend/register/font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="{{ asset(null) }}frontend/register/css/form-elements.css">
        <link rel="stylesheet" href="{{ asset(null) }}frontend/register/css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="{{ url()->current() }}" method="post" class="f1">
                    		<h3>HECTION 2017 Registration Form</h3>
                    		<p>isi form untuk mendaftar</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-users"></i></div>
                    				<p>Peserta</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Pendamping</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Autentikasi</p>
                    			</div>
                    		</div>

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
                            <label class="sr-only" for="f1-first-name">Tanggal Lahir</label>
                            <input type="text" name="peserta_birthdate" placeholder="Tanggal Lahir" class="f1-first-name form-control" id="peserta_birthdate">
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

                          <fieldset>
                            <h4>Input data pendamping:</h4>
                            <div class="form-group">
              			          <label class="sr-only" for="f1-first-name">Nama</label>
                              <input type="text" name="pendamping_name" placeholder="Nama" class="f1-first-name form-control" id="pendamping_name">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Jenis Kelamin</label>
                              <select name="pendamping_gender" class="form-control" id="pendamping_gender">
                                <option>-- Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                            </div>

                            <div class="form-group">
              			          <label class="sr-only" for="f1-first-name">NIP</label>
                              <input type="text" name="pendamping_nip" placeholder="NIP" class="f1-first-name form-control" id="pendamping_nip">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Nomor HP</label>
                              <input type="text" name="pendamping_hp" placeholder="Nomor HP" class="f1-first-name form-control" id="pendamping_hp">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Tempat Lahir</label>
                              <input type="text" name="pendamping_birthplace" placeholder="Tempat Lahir" class="f1-first-name form-control" id="pendamping_birthplace">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Tanggal Lahir</label>
                              <input type="text" name="pendamping_birthdate" placeholder="Tanggal Lahir" class="f1-first-name form-control" id="pendamping_birthdate">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-about-yourself">Alamat Rumah</label>
                              <textarea name="pendamping_alamat_rumah" placeholder="Alamat Rumah" class="f1-about-yourself form-control" id="pendamping_alamat_rumah"></textarea>
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Jabatan</label>
                              <input type="text" name="pendamping_jabatan" placeholder="Jabatan" class="f1-first-name form-control" id="pendamping_jabatan">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-first-name">Unit Kerja</label>
                              <input type="text" name="pendamping_uk" placeholder="Unit Kerja" class="f1-first-name form-control" id="pendamping_uk">
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="f1-about-yourself">Alamat Unit Kerja</label>
                              <textarea name="pendamping_alamat_uk" placeholder="Alamat Unit Kerja" class="f1-about-yourself form-control" id="pendamping_alamat_uk"></textarea>
                            </div>

                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>
                            </div>

                          </fieldset>

                          <fieldset>
                            <h4>Autentikasi :</h4>
                            <div class="form-group">
                              {!! app('captcha')->display(); !!}
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="submit" class="btn btn-submit">Submit</button>
                            </div>
                          </fieldset>

                    	</form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Javascript -->
        <script src="{{ asset(null) }}frontend/register/js/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ asset(null) }}frontend/register/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset(null) }}frontend/register/js/jquery.backstretch.min.js"></script>
        <script src="{{ asset(null) }}frontend/register/js/retina-1.1.0.min.js"></script>
        <script src="{{ asset(null) }}frontend/register/js/scripts.js"></script>
        <script>
          var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
          };
        </script>
        <script>
          var loadFile2 = function(event) {
            var output = document.getElementById('output2');
            output.src = URL.createObjectURL(event.target.files[0]);
          };
        </script>
        <script>
        $( function() {
          $( "#peserta_birthdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
        </script>
        <script>
        $( function() {
          $( "#pendamping_birthdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
        </script>
        <!--[if lt IE 10]>
            <script src="{{ asset(null) }}frontend/register/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
