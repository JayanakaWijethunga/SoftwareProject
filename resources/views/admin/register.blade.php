<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Registration</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
</head>
<body class='all'>
<div class="container">
                        <div>
                        <center>
                        <div class="page-header">
                        <h1><b>Admin</b> <small><b>Register here</b></small></h1>
                        </div>
                        </center>
                        </div>
<form class="well form-horizontal" action="/admin-register" method="POST">
{{csrf_field()}}
       <table class="table table-striped">
          <tbody>
             <tr>
                <!--Official Information begin-->
             <td colspan="1">
                
                   
                      <fieldset>
                        
                        <center>
                        <div class="page-header">
                        <h4><b>Official Informations</b><small>(Mandatory)</small></h4>
                        </div>
                        </center>

                        <div class="form-group">
                            <label class="col-md-4 control-label">SSN</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span><input id="ssn" name="ssn" placeholder="Social Security Number" class="form-control"  value="" type="text"></div>
                               @if ($errors->first('ssn'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('ssn') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">E-mail</label>
                            <div class="col-md-8 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="E-mail" class="form-control"  value="" type="text"></div>
                              @if ($errors->first('email'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="username" name="username" placeholder="Username" class="form-control"  value="" type="text"></div>
                               @if ($errors->first('username'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Company Branch</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="obranch">
                                    <option disabled="disabled" selected="selected">Select Company Branch</option>
                                    <option >Matara</option>
                                    <option>Colombo</option>
                                    <option>Galle</option>
                                  </select>
                               </div>
                               @if ($errors->first('obranch'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('obranch') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="dept">
                                    <option disabled="disabled" selected="selected">Select the Department</option>
                                    <option>Design</option>
                                    <option>Develop</option>
                                    <option>Testing</option>
                                  </select>
                               </div>
                               @if ($errors->first('dept'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('dept') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Designation</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-briefcase"></i></span>
                                  <select class="selectpicker form-control" name="des">
                                    <option disabled="disabled" selected="selected">Select the Designation</option>
                                    @foreach($data as $desig)
                                    <option>{{$desig->designation}}</option>
                                    @endforeach
                                  </select>
                               </div>
                               @if ($errors->first('des'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('des') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                    </fieldset>
                   
                    </td>
                     <!--Official Information end-->
                     <td colspan="1">
                    <!--Financial Information begin -->
                    
                      <fieldset>
                        <center>
                        <div class="page-header">
                        <h4><b>Financial Informations</b><small>(Mandatory)</small></h4>
                        </div>
                        </center>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Fixed Allowances</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="fixed_allowances" name="fixed_allowances" placeholder="Fixed Allowances" class="form-control"  value="" type="text"></div>
                               @if ($errors->first('fixed_allowances'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('fixed_allowances') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Fixed Deductions</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="fixed_deductions" name="fixed_deductions" placeholder="Fixed Deductions" class="form-control"  value="" type="text"></div>
                               @if ($errors->first('fixed_deductions'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('fixed_deductions') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Is OT Pay Allowed</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-usd"></i></span>
                                  <select class="selectpicker form-control" name="ot">
                                    <option disabled="disabled" selected="selected">Is OT Pay Allowed</option>
                                    <option >Yes</option>
                                    <option>No</option>
                                  </select>
                               </div>
                               @if ($errors->first('ot'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('ot') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Bank</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-home"></i></span>
                                  <select class="selectpicker form-control" name="bank">
                                    <option disabled="disabled" selected="selected">Select the Bank</option>
                                    <option>BOC</option>
                                    <option>NSB</option>
                                    <option>HND</option>
                                  </select>
                               </div>
                               @if ($errors->first('bank'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('bank') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Bank Branch</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-home"></i></span>
                                  <select class="selectpicker form-control" name="bbranch">
                                    <option disabled="disabled" selected="selected">Select the Branch</option>
                                    <option>Matara</option>
                                    <option>Colombo</option>
                                    <option>Galle</option>
                                  </select>
                               </div>
                               @if ($errors->first('bbranch'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('bbranch') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Account Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="acc" name="acc" placeholder="Account Number" class="form-control"  value="" type="text"></div>
                               @if ($errors->first('acc'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('acc') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>
                        
                         </fieldset>
                        
                        </td>

                    
                    </tr>
                   <!--fina ennd-->
                    



                    <tr>
                    <td colspan="1">
                                       
                                       <!--Basic info begin-->

                        
                      <fieldset>
                        <center>
                        <div class="page-header">
                        <h4><b>Basic Informations</b><small>(optional)</small></h4>
                        </div>
                        </center>
                         <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="first_name" name="first_name" placeholder="First Name" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="last_name" name="last_name" placeholder="Last Name" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date Of Birth</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="dob" name="dob" placeholder="Date Of Birth" class="form-control"  value="" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address_line_1" name="address_line_1" placeholder="Address Line 1" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address_line_2" name="address_line_2" placeholder="Address Line 2" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="gender">
                                     <option disabled="disabled" selected="selected">Select Gender</option>
                                     <option>Male</option>
                                     <option>Female</option>
                                     <option>Other</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
                   
                    <!--Basic info end-->

                </td>


                

                   <!--financial info end-->
                   <td colspan="1">
                    <!--Security Information begin-->
                   
                      <fieldset>
                        <center>
                        <div class="page-header">
                        <h4><b>Security Informations</b><small>(Mandatory)</small></h4>
                        </div>
                        </center>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="password" name="password" placeholder="Password" class="form-control"  value="" type="password"></div>
                               @if ($errors->first('password'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Confirm-Password</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="password_confirmation" name="password_confirmation" placeholder="Confirm-Password" class="form-control"  value="" type="password"></div>
                               @if ($errors->first('password_confirmation'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>

                         </div>
                        <div class="text-right text-bottom">
                        <button type="button" class="btn btn-info">Back</button>
                        <button type="submit" class="btn btn-success">Register</button>
                        </div>

                         </fieldset>
                         
                      <!--Security Information end-->
                      </td>
                
                </tr>
                
               
                
                
          </tbody>
       </table>
       
   
    </form>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

  <style>

.all{
    background: #ADA996;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
</html>
