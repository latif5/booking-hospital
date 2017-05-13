
@extends('layouts.head_scheadule')

@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Doctor Schedule</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a >Hospital</a></li>
                            <li class="active">Doctor Schedule</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
      <div class="row">
          <div class="col-md-3">
              <div class="white-box">
                  <h3 class="box-title">Drag and drop your Appontment to calender</h3>
                  <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          
                          <a href="#" data-toggle="modal" data-target="#add-new-event" class="btn btn-lg m-t-40 btn-danger btn-block waves-effect waves-light">
                              <i class="ti-plus"></i> Fix Appointment
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-9">
              <div class="white-box">
                  <div id="calendar"></div>
              </div>
          </div>
      </div>
      <!-- /.row -->
                
    
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Table</h3>
                            <p class="text-muted m-b-30">Data table example</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Day</th>
                                            <th>Open</th>
                                            <th>Clouse</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Monday</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Thuesday</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Wenesday</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                
      <!-- BEGIN MODAL -->
      <div class="modal fade none-border" id="my-event">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><strong>Fix Appointment</strong></h4>
                  </div>
                  <div class="modal-body"></div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                      <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                  </div>
              </div>
          </div>
      </div>

      <!-- Modal Add Category -->
      <div class="modal fade none-border" id="add-new-event">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><strong>Fix</strong> Date</h4>
                  </div>
                  <div class="modal-body">
                      <form role="form">
                          <div class="row">
                              <div class="col-md-6">
                                  <label class="control-label">Patient Name</label>
                                  <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                              </div>
                              <div class="col-md-6">
                                  <label class="control-label">Choose Category Color</label>
                                  <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                      <option value="success">Success</option>
                                      <option value="danger">Danger</option>
                                      <option value="info">Info</option>
                                      <option value="primary">Primary</option>
                                      <option value="warning">Warning</option>
                                      <option value="inverse">Inverse</option>
                                  </select>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                      <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- END MODAL -->
                
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->

@stop