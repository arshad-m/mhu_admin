<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MHU | Health Camp</title>
        <?php $this->load->view('common_css');?>
        <style>
            .error{
                outline: 0;
                border-width: 0 0 1px;
                border-color: red
            }
        </style>
    </head>
    <body>
       <?php $this->load->view('header');?>
        <section id="main" data-layout="layout-1">
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Health Camp - Patient Registration</h2>
                    </div>
                    <div class="card">
                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-md- col-sm-2 col-xs-12">
                                    <label>Registration Date</label>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon p-l-0 p-r-0"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="dtp-container fg-line">
                                            <input type='text' name="dor" id="dor" class="form-control date-picker" placeholder="Registration Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <label>Phase</label>
                                        <select name="phase" id="phase" class="selectpicker" title="Select Phase">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Patient Category</label>
                                    <div class="form-group">
                                        <select name='patient_category' id="patient_category" class="selectpicker"  title="Select patient category">
                                            <option value="C">Child under 19 years of age</option>
                                            <option value="LW">Lactating women</option>
                                            <option value="PW">Pregnant women</option>
                                            <option value="S">Senior citizen above 60 years of age</option>
                                            <option value="O">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>First Name</label>
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control required" placeholder="First name" id="fname" name="fname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Last Name</label>
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" name='lname' id="lname" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="clearfix"></div>
                                        <label class="radio radio-inline m-r-20 m-t-15">
                                            <input type="radio" name='gender' value="M">
                                            <i class="input-helper"></i>
                                            Male
                                        </label>
                                        <label class="radio radio-inline m-r-20 m-t-15">
                                            <input type="radio" name='gender' value="F">
                                            <i class="input-helper"></i>
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Mobile Number</label>
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" id="mobile" name='mobile' class="form-control" placeholder="Mobile No.">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="col-md-6 col-sm-6 col-xs-12 p-l-0">
                                        <label>DOB</label>
                                        <div class="input-group form-group">
                                            <span class="input-group-addon p-l-0 p-r-0"><i class="zmdi zmdi-calendar"></i></span>
                                            <div class="dtp-container fg-line">
                                                <input type='text' name='dob' id="dob" class="form-control date-picker" placeholder="DOB">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 p-r-0">
                                        <label>Age</label>
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Age">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="state" id="state" class="selectpicker" title="Select State">
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select name="district" id="district" class="selectpicker" title="Select District">
                                            <option value="Ghaziabad">Ghaziabad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        <!--<select name="city" class="selectpicker" title="Select City">
                                            <option></option>
                                        </select>-->
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <input type="text" id="city" name="city" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <!--<select name="city" class="selectpicker" title="Select Area">
                                            <option></option>
                                        </select>-->
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <input type="text" id="area" name="area" class="form-control" placeholder="Area">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <!--<select name="lcoation" class="selectpicker" title="Select Location">
                                            <option></option>
                                        </select>-->
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <input type="text" id="location" name='location' class="form-control" placeholder="Location">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Patient Problem</label>
                                        <select name="district" id="district" class="selectpicker" title="Select Problem">
                                            <option>Cough</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-right m-l-0 m-r-0">
                                <button type="button" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                </div>
                </div>
            </section>
        </section>
        <?php $this->load->view('footer');?>
        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>
                <p>Please wait...</p>
            </div>
        </div>
        
        <?php $this->load->view('common_js');?>
    </body>
  </html>

