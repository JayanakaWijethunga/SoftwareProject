<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Finance Informations</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
</head>
<body class='all'>
<div class="container">
                        <div>
                        <center>
                        <div class="page-header">
                        <h1><b>Edit</b> <small><b>Finance Informations</b></small></h1>
                        </div>
                        </center>
 
                                           
<form class="well form-horizontal" action="/admin-finance-update/{{$finance->id}}" method="POST">

{{csrf_field()}}

<div class='loc'>  
       <table class="table table-striped">
          <tbody>
                    <tr>
                    <td colspan="1">
                                       
                                       <!--Basic info begin-->

                        
                                       <fieldset>
                        <center>
                        <div class="page-header">
                        <h4><b>Financial Informations</b><small>(Mandatory)</small></h4>
                        </div>
                        </center>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Fixed Allowances</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="fixed_allowances" name="fixed_allowances" placeholder="Fixed Allowances" class="form-control"  value="{{$finance->fixed_allowances}}" type="text"></div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="fixed_deductions" name="fixed_deductions" placeholder="Fixed Deductions" class="form-control"  value="{{$finance->fixed_deductions}}" type="text"></div>
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
                                  <select class="selectpicker form-control" name="ot" value="{{$finance->ot}}">
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
                                  <select class="selectpicker form-control" name="bank" value="{{$finance->bank}}">
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
                                  <select class="selectpicker form-control" name="bbranch" value="{{$finance->bbranch}}">
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="acc" name="acc" placeholder="Account Number" class="form-control"  value="{{$finance->acc}}" type="text"></div>
                               @if ($errors->first('acc'))
                                <span class="invalid-feedback glyphicon glyphicon-warning-sign" role="alert">
                                <strong>{{ $errors->first('acc') }}</strong>
                                </span>
                                @endif
                            </div>
                         </div>
                        
                         </fieldset>
                         </div>
                        <div class="text-right text-bottom">
                        <button type="button" class="btn btn-info">Back</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                        </td>

                    
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
