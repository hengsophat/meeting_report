<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report Meeting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  
<div class="container-fluid margin-left margin-right">
  <div class="row">
    <div class="sidebar margin-top">
      <a class="active" href="#home">Home</a>
      <a href="#news">Create Meeting</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>

    <div class="content">
      <div class="panel panel-default col-sm-8 margin-top">
        <div class="panel-heading"><h4>Create Record</h4></div>
        <div class="panel-body">
          <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Date of the Meeting:</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="email" placeholder="Date of the Meeting" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Company:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="pwd" placeholder="Company Name" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Project:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Project Name" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Topic of Presentation:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Topic of Presentation" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Agenda:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Agenda" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Recorder:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Recorder Name" name="#">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-2">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="submit" class="btn btn-info">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="panel panel-default col-sm-8">
        <div class="panel-heading" ><h4>Create Mission</h4></div>
        <div class="panel-body">
          <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Mission:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Mission" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Description:</label>
              <div class="col-sm-10">          
                <textarea class="form-control" id="exampleFormControlTextarea1" rows=5></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Suggestion:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Suggestion" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Comment:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Comment" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Problem:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Problem" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Solution:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Solution" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">FAQ:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="FAQ" name="#">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Attachment:</label>
              <div class="col-sm-3">
                <input type="file" class="form-control" id="email" placeholder="Attachment" name="#">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-2">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="submit" class="btn btn-info">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>    
  </div>           
</div>
</body>
</html>