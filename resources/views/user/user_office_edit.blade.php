<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Official Informations</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
</head>
<body class='all'>
<div class="container">
                        <div>
                        <center>
                        <div class="page-header">
                        <h1><b>Edit</b> <small><b>Official Informations</b></small></h1>
                        </div>
                        </center>
 
                                           
<form class="well form-horizontal" action="/user-office-update/{{$office->id}}" method="POST">

{{csrf_field()}}

<div class='loc'>  
       <table class="table table-striped">
          <tbody>
                    <tr>
                    <td colspan="1">
                                       
                    <div class="form-group">
                            <label class="col-md-4 control-label">Company Branch</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-home"></i></span>
                                  <select class="selectpicker form-control" value='{{$office->obranch}}' name="obranch">
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
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-home"></i></span>
                                  <select class="selectpicker form-control" name="dept" value='{{$office->dept}}'>
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
                                  <select class="selectpicker form-control" name="des" value="{{$office->des}}">
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
