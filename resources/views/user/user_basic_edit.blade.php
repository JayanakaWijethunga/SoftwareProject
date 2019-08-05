<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Basic Informations</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
</head>
<body class='all'>
<div class="container">
                        <div>
                        <center>
                        <div class="page-header">
                        <h1><b>Edit</b> <small><b>Basic Informations</b></small></h1>
                        </div>
                        </center>
 
                                           
<form class="well form-horizontal" action="/user-basic-update/{{$basics->id}}" method="POST">

{{csrf_field()}}

<div class='loc'>  
       <table class="table table-striped">
          <tbody>
                    <tr>
                    <td colspan="1">
                                       
                                       <!--Basic info begin-->

                        
                      <fieldset>
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="first_name" name="first_name" placeholder="First Name" class="form-control"  value='{{$basics->first_name}}' type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="last_name" name="last_name" placeholder="Last Name" class="form-control"  value="{{$basics->last_name}}" type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date Of Birth</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="dob" name="dob" placeholder="Date Of Birth" class="form-control"  value="{{$basics->dob}}" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address_line_1" name="address_line_1" placeholder="Address Line 1" class="form-control"  value="{{$basics->address_line_1}}" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address_line_2" name="address_line_2" placeholder="Address Line 2" class="form-control"  value="{{$basics->address_line_2}}" type="text"></div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control"  value="{{$basics->phoneNumber}}" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
                   
                      </div>
                        <div class="text-right text-bottom">
                        <button type="button" class="btn btn-info">Back</button>
                        <button type="submit" class="btn btn-success">Register</button>
                        </div>
                
                </tr>
                
               
                
                
          </tbody>
       </table>
       </div>
   
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
.loc{

    margin-left: 25%;
    margin-right:25%;
    width: 50%;
}
</style>
</html>
