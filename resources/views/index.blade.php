<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('assets/frontend/img/favicon.ico')}}">

	<title>Booking Hospital</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="{{URL::asset('assets/frontend/img/favicon.png')}}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{URL::asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
	<!-- <link href="{{URL::asset('assets/frontend/css/material-kit.css')}}" rel="stylesheet" /> -->
	<link href="{{URL::asset('assets/frontend/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{URL::asset('assets/frontend/css/demo.css')}}" rel="stylesheet" />
</head>

<body  class="profile-page">
	<!-- <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll"> -->
			<!-- Brand and toggle get grouped for better mobile display -->
        	<!-- <div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="http://www.creative-tim.com">Creative Tim</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					<li>
    					<a href="../components-documentation.html" target="_blank">
    						Components
    					</a>
    				</li>
    				
		           
        		</ul>
        	</div>
    	</div> -->
	<!-- </nav> -->
	<div class="image-container set-full-height" style="background-image: url('assets/frontend/img/wizard-profile.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="/">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="{{URL::asset('assets/frontend/img/new_logo.png')}}">
	            </div>
	            <div class="brand">
	                Pendaftaran Antrian
	            </div>
	        </div>
	    </a>
	    


	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   PEMBERITAHUAN
		                        	</h3>
									<h5>Harap melengkapi persyaratan sebelum booking antrian.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">Pengumuman</a></li>
			                            <li><a href="#booking" data-toggle="tab">Booking</a></li>
			                            <li><a href="#resume" data-toggle="tab" disabled>Resume Booking</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <h4 class="info-text"> Persyaratan </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-12">
		                                            <!-- <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                    <i class="fa fa-pencil"></i>
		                                                </div>
		                                                <h6>Design</h6>
		                                            </div> -->
													<ol>
							                            <li><strong><h6>Pendaftaran Online sementara ini hanya berlaku bagi Pasien yang telah memiliki No RM RSUP Dr. Sardijito yang akan berobat Rawat Jalan</h6></strong></li>
							                            <li><h6>Bagi pasien baru yang belum pernah mendaftar di RSUP Dr. Sardjito harap datang langsung ke Gedung Rawat Jalan LT 2 dan khusus Pasien Tulip di ICC Lt. 2 (Pendaftaran Pasien Hemato Onkologi Pasien Dewasa) atau Lt. 7 (Pendaftaran pasien Hemato Onkologi Anak) RSUP Dr. Sardjito / menghubungi No (0274) 587333 EXT 749 atau 082243589777</h6></li>
							                            <li><h6>Pendaftaran Online dapat dilakukan untuk kontrol Poli dengan Jadwal H+1 s.d H+14 dari hari mendaftar dengan memasukkan : No RM , Tanggal Lahir, Pilihan hari kontrol dan dokter untuk poli reguler. Dokter yang ditunjuk adalah dokter DPJP (Dokter Penanggung Jawab Pelayanan)</h6></li>
							                            <li><h6>Pendaftaran untuk H-1 Maksimal dapat dilakukan sebelum jam 14.00, setelah jam tersebut pasien mendaftar di hari berikutnya. Untuk pendaftaran pemeriksaan hari senin minimal dilakukan pada hari jumat sebelum jam 14:00 WIB.</h6></li>
							                            <li><h6>Pasien di hari yang sama hanya dapat mendaftar 1 kali dengan 1 dokter.</h6></li>
							                            <li><h6>Pasien yang telah mendaftar online akan mendapatkan SMS Pemberitahuan pengingat jadwal.</h6></li>
							                            
							                        </ol>

		                                        </div>
		                                        
		                                    </div>
		                                </div>
                                        
		                            </div>
		                            <div class="tab-pane" id="booking">
                                        <div class="row">
		                                	<h4 class="info-text"> Form Booking (harus di isi semua)</h4>
		                                	<!-- <div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture">
		                                        	</div>
		                                        	<h6>Choose Picture</h6>
		                                    	</div>
		                                	</div> -->
		                                	<div class="col-sm-7 col-sm-offset-3">
												<div class="input-group">
													<!-- <span class="input-group-addon">
														<i class="material-icons">face</i>
													</span> -->
													<div class="form-group label-floating">
			                                          <label class="control-label">No Peserta <small>(required)</small></label>
			                                          <input name="firstname" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													
													<div class="form-group label-static">
														<label class="control-label" >Tanggal Booking <small>(required)</small></label>
														<input type="date" class="datepicker form-control" required>
														<span class="material-input"></span>
													</div>

		                    
													<!-- div class="form-group label-floating">
													  <label class="control-label">Tgl Booking <small>(required)</small></label>
													  <input name="lastname" type="date" class="form-control">
													</div> -->
												</div>
		                                	</div>
		                                	<div class="col-sm-7 col-sm-offset-3">
												<div class="input-group">
													<!-- <span class="input-group-addon">
														<i class="material-icons">email</i>
													</span> -->
													<div class="form-group label-floating">
			                                            <label class="control-label">Poly <small>(required)</small></label>
			                                            
		                                            	<select name="poly" class="form-control" required>
															<option disabled="" selected=""></option>
		                                                	<option value="gigi"> Poly Gigi </option>
		                                                	<option value="umum"> Poly Umum </option>
		                                                	
		                                            	</select>
			                                        </div>
												</div>
		                                	</div>
		                            	</div>
                                        
		                                
		                            </div>
		                            <div class="tab-pane" id="resume">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> Resume Booking </h4>
		                                    </div>
		                                     <div class="col-sm-12">
			                                    <table class="table">
													<thead>
													    <tr>
													        <th class="text-center">#</th>
													        <th>Name</th>
													        <th>No Peserta</th>
													        <th>Poly</th>
													        <th class="text-right">Time Booking</th>
													        <th class="text-right">Actions</th>
													    </tr>
													</thead>
													<tbody>
													    <tr>
													        <td class="text-center">1</td>
													        <td>Andrew Mike</td>
													        <td>076633</td>
													        <td>Poly Umum</td>
													        <td class="text-right">12/05/2017 07:33</td>
													        <td class="td-actions text-right">
													            
													            <button type="button" rel="tooltip" title="Print Resume" class="btn btn-success btn-simple btn-xs">
													                <i class="fa fa-print"></i>
													            </button>
													            <button type="button" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs">
													                <i class="fa fa-times"></i>
													            </button>
													        </td>
													    </tr>
													    
													</tbody>
												</table>
								            </div>
		                                </div>
		                            </div>
		                        </div>
                                
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-success btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="#">Hospital</a>.
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
    <script src="{{URL::asset('assets/frontend/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/frontend/js/material.min.js')}}"></script>
	<script src="{{URL::asset('assets/frontend/js/jquery.bootstrap.js')}}" type="text/javascript"></script>
	<!-- <script src="{{URL::asset('assets/frontend/js/material-kit.js')}}" type="text/javascript"></script> -->
	<!--  Plugin for the Wizard -->
	<script src="{{URL::asset('assets/frontend/js/material-bootstrap-wizard.js')}}"></script>
	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{URL::asset('assets/frontend/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{URL::asset('assets/frontend/js/jquery.validate.min.js')}}"></script>

</html>
