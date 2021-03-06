@extends('layouts.admin')
@section('content')
<div class="container">
<br>
<div class="row">
<div class="col-md-10">
<h4>Under Cons</h4>
</div>
<div class="col-md-2">
<a type="button" data-toggle="modal" data-target="#editcons" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success">Add New</a>
</div>
</div>
<br>
    <div class="row">
      <div class="col-md-4" >
        <div class="card">
          <img class="card-img-top" src="data:image/jpeg;base64,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" alt="">
          <div class="card-body">
             <h5 class="card-title" style="font-size: 15px;">name</h5>
             <br><br>
             <div class="row">
            <div class="col-md-3">
             <a type="button" href="" data-toggle="modal" data-target="#editcons" style="font-size: 15px;" class="btn btn-primary">Edit</a>
             </div>
             <div class="col-md-4">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-danger">Delete</a>
            </div>
            <div class="col-md-3">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-success">Manage</a>
            </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-4"  >
        <div class="card">
          <img class="card-img-top" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ8NDQ0NFREWFhURFRUYHikiGBoxGxUVJDItJS8rNjI6Fx8/RD8sNyguMTcBCgoKDg0OFQ8QFy0lGB0wMC0tLysrLS0rMCstKzUtLSstKy0tLS0rLSsrKy03KystNy0tLS03Ky0tLS0tLS0tK//AABEIAK0BIwMBIgACEQEDEQH/xAAcAAEBAQEAAwEBAAAAAAAAAAACAQAHBQYIBAP/xABBEAACAQMCAwQFCAgFBQAAAAAAAQIDBBEFIQYxQQcSE2EiMjVRdCNCU2KTobPTFBc0UnGBscIWM1WU0iVkcpG0/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAECAwT/xAAhEQEBAAICAgIDAQAAAAAAAAAAAQIRITEDEkFxEyIyQv/aAAwDAQACEQMRAD8A6MioyKioqKjIqQFRUZFSAqKkZCSAiEkZIqQVi4KkXAGwbBUi4AmC4LguADguC4LgA4JgeDYAGCYHg2ABgmB4JgANEwPAWgBgjQ2iNABoLG0RoIDQRsLALCxsLALCxsLAJimAqEiISAqKjIqAqEiISAyEiISAyEkZCQVsFSMkJATBcFSLgCYLguC4AmDYFg2CA4NgWDYKBg2BYNgAYI0PAWgBgjQ2iMANBGFgFhaGwsIDIxMjADCxsLALCxMjAODFMBUJERUBUJEQkBUJEQkBUVGRUFVCSIhICpFRkJAZIqMkJICYLguC4IJg2BYPGcQ69aaZQdxd1O5HPdpwXpVa0/3IR6v7l1wgPI4Ng9N4N7RbTU6jt6kP0O6lKXg0qk1ONeGdlGeF6eOcf44z090wWzSSy9BgzQ8BwRQwTA8EKAwtDaIwAwsbCwAwsbCwAyMTCwgsLGwsAMjEwsAmKYCoSChIBIqIhICoSIhICoSIhIKqEiISAqEiISAqKkZCRB86dqEE9e1LKT9O15r/ALSieq1Kce7L0Y8n0XuPbO0/29qX/nbf/JRPVz0TqPNl3Xe+JePLXSbWhSilcX0rai4W6eI006axOrJeqvLm/JbnE9Y1a71G4de5qTr16jUIRS2im/RpU4LksvCS5+bZNI0u61C4jb2tOdevUfee+0VnepOT9WPvb+94R2vhnhHT+HreV9fVqcriEflLqptTo528OhHnl8s+tLPTkY4x+2+c/pxXWNGu7CpCneW9S3nOCq01PHpR23TTxlZWVzXXB0LgPtQlS7lpqs5Tp7Rp3zzKdNdFWx6y+tz9+d2efs+M9G4glW028oOlCdTFo7iSj422FKMl/lVc5ws75W7y0c9444CutIk6se9cWLeI3Cj6VLL2jWS9V9MrZ+TeC73xU16849PoKnOM4xnCSlGSUoyi1KMovk01zRcHz1wRx1daTJU2ncWLlmds5YlTy95UW/VfXHJ+TeTu+iaza6hQjcWlWNWm9njadOeN4TjzjLyZzyxsdccpX7WgtDZGZaBhY2FgBhY2FlAYWNhYAYWNhYQGFjYWAWFiYWAcGKYCoSChICoSIhICoaChIKSEgoSASEgoSASEiISIKj8+pajQtKM7i5qwo0aa9Kc3heSXVtvZJbs8VxZxZaaTSU68u/Vmn4NtTa8aq/f9WPvk/vexwXirii71Wr4t1NKnBt0beDaoUI+S6yxzk935LY1jjtjLORuMdWp6hqV5eUozhSrzpuEamFPuwowp5aXLPcz/ADP2cGcGXer1Pk14VrCWK13OL7kffCC+fPyWy6tbZ9i4C7Mqt53LrUlOhavEqdvvC4uF75dacPvfls37bxnx9aaPT/QNOp0Z3VKHhxpwila2SXJTUcZl9VfzxtnpcviOcx/1k/dc3WkcKWSpwjmpUWY004yvL2ouc5vpHz2SzhLkjjHFXFF5q1bxbqeIRb8G3hlUaCfuXWWOcnu/JbHjNQvq91WncXNWdatUeZ1KjzJ+5eS9yWyP4FmOmcs98fCNZOl8C9pcqMY2OrZuLWUfDjczXi1KUWsd2qn/AJkMdd2vrLlzUxbNpLY6hxr2aRcP0/RcV7ecfFdpTkqnoNZ79u168evd/wDWdkeg6Brt3plx49pUdOa9GpTkm6dWKfqVIdVnPua3xg8vwTxxdaRNQWa9lKWatrKXq55zpP5kuvufXfddA17hfTeJLd6jpVWnSvH67x3Y1KiWfDuILeE+Xpe7HrLBneuL03qZc49vYeC+NrTV4d2OKF5GOatrOScsLnOm/nw3/iuqWx7Mz5bu7W70+68OrGra3dvJSjhuFSD3xOElzXPDWzOs8CdpsLnuWmpyjSuXiNO62hQrvop9Kc/uflsjGWHzG8c/iuksLGwMw6CwsTCygMLGwsAMLGwsAMLGwBBYWNhYBMYwFQkFCQCQkFCQCQkFCQUkJBQkAkNAQ0Akeu8fa9c6bYTubW38afeUJTk807ZS2VWUeclnC/ms7HsSJWowqQnTqRjOnUjKE4SXejOElhxa6rDYSvl+pUu9Qusyda7u7meFznVqTfRJckvcsJJdEjsHA3ZvQsEr3U3Sq3MF4kacmnbWiW/ebe05rnl7LG3LvHs/C/CFhpXiO1pvxKkpd6tVfiVVTcsqkpdIrb+OMvLOf9uOp3Cr21lGrKNrO2VepSjsqtTxZRTn1aSisLl154N+3txHP19Zutx72oyq9+00qcoU941b5ZjOp71R6xXTvc30xs3ywpjpJpyyytYxDFRTEMBTyGg65dabXVxaVXTqbKcX6VKrD9ypH5y+9dMM8eYDt9nqGk8WWyoXEFb39KDkoqS8ei+s6M2vlKecZT8spbM5Zxbwnd6TVULiKnRqNqjcwT8Gt5fVlj5r88ZSyeGoVp0pwqU5yp1KclKFSEnGcJLqmuTPo/h/Gp6PZu+jC5/SrSlK4U4RUakmt5YWyed9sY6YOd/X6dZ+/wBue9kvFd/OvDTZwnd26hKSqyl8pZ00usn60M4ST3WVjZYOus8NwxwvaaVTqU7WMvlajqVKlSXfqSWX3Id792KeF/Fvdts8yzGVlvDpjLJyDCxMLI0LCxMLALCxMLCCwsTCwCwsrIwIYxgMhIKEgEhICEgGhICGgEhIKEgpISChIBoSAhIgaOLduftG0+BX41Q7Qji3bl7RtPgV+NUN4dseT+XOTGMdnnfr0WnGd5ZQnFShO8tITjJJxlCVaCcWuqabR9I/4N0b/SdO/wBlQ/4nzhoP7dYfH2X48D6qycs3bxdV4T/Bmjf6Tp3+yof8T0vtb4d0610rxbWxs7er+k0I+JQtqVKfdfeyu9FZwdPyehdtXsZ/F2/9xnG3cbynFcFMYx3eZj6R4A9jaZ8HR/ofNx9IcAextM+Do/0Ofk6dPF28+wMTCzk7iwsTCygsLEwsAsLKwsCMLKwsIjCysjAJSGAyEgoSASEgoSASEgISAaEgISCmhICEgGhICEgGji/bl7QtPgV+PUOzo4x24+0LT4Ffj1DWHbHk/lzkxjHZ537dB/brD46y/HgfVDZ8r6D+3WHx1l+PA+pmzl5HbxdUsnofbT7Gfxdv/ce9ZPRO2h/9Hfxdv/cYx7jeX81wcxjHoeZj6Q4B9jaZ8HR/ofN59HcA+xtM+Do/0Ofk6dPF28+wsrC2c3dGFlYWBGFlYWBGFlYWERhZWFgRhYmFgQxMmAqKgoSASEgISAaEgISAaEgIqCmhICEgGhJgTKmA0zn3aRwTe6rdUK9rO2jClbeDJV6lSEu94k5bKMJbYkjoCZciXSWbmnEf1Sat9Lp/29f8o36o9W+l0/7ev+UdvyXJr3rH48XGdL7KtVpXNtWnVsO5RubetPu16zk4wqxk8J0+eEdqyDJskttaxxk6PJ6z2haDX1PT3a20qUanj0qma0pQh3Y5zvGLed/cex5NkzLpbN8OH/qj1f6XT/t6/wCUT9UerfS6f9vX/KO45Jk371j8eLh/6pNW+l0/7ev+Udb4Y0+pZ6fZ2tVwdS3t6dKbptyg5Jb4bSbX8jymQtkuVrWOMnTMjMwsjTMLK2FgRhZWFgRhZWRhEYWVhYEYWVkYEMQwGQkBCQDRUFFAaEgISASEgISAaEgIqCmhJgTKmA0y5AmVMB5LkGS5AeTZDk2QFk2Q5NkguTZDk2Si5JkmSZAzZGZsLYGZGZsLAzCythYRGRmZGBGFlYWBmFlYWBjEMBkVBRUA0VBRUA0JAKgGhICKgGmICKgGmXIChTyLIEUBZLkKMA8myEwCybITAXJshZgLkjZCAXJGyZIBiNmCwMyNmYWEZhZQgYLKwgZhZSMCGIYD/9k=" alt="">
            <div class="card-body">
             <h5 class="card-title" style="font-size: 15px;">name</h5>
             <br><br>
             <div class="row">
            <div class="col-md-3">
             <a type="button" href="" data-toggle="modal" data-target="#editcons" style="font-size: 15px;" class="btn btn-primary">Edit</a>
             </div>
             <div class="col-md-4">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-danger">Delete</a>
            </div>
            <div class="col-md-3">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-success">Manage</a>
            </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-4" >
        <div class="card">
          <img class="card-img-top" src="data:image/jpeg;base64,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" alt="">
          <div class="card-body">
             <h5 class="card-title" style="font-size: 15px;">name</h5>
             <br><br>
             <div class="row">
            <div class="col-md-3">
             <a type="button" href="" data-toggle="modal" data-target="#editcons" style="font-size: 15px;" class="btn btn-primary">Edit</a>
             </div>
             <div class="col-md-4">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-danger">Delete</a>
            </div>
            <div class="col-md-3">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-success">Manage</a>
            </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-4"  >
        <div class="card">
          <img class="card-img-top" src="data:image/jpeg;base64,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" alt="">
          <div class="card-body">
             <h5 class="card-title" style="font-size: 15px;">name</h5>
             <br><br>
             <div class="row">
            <div class="col-md-3">
             <a type="button" href="" data-toggle="modal" data-target="#editcons" style="font-size: 15px;" class="btn btn-primary">Edit</a>
             </div>
             <div class="col-md-4">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-danger">Delete</a>
            </div>
            <div class="col-md-3">
             <a type="button" href="#" style="font-size: 15px;" class="btn btn-success">Manage</a>
            </div>
            </div>
            </div>
        </div>
    </div>
  </div>
  </div>

   <!--Modal-->

   <div class="modal fade" id="editcons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" style="background-color: black;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
    <div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="inputTitle" placeholder="title">
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputArea">Area</label>
    <input type="text" class="form-control" id="inputArea" placeholder="Apun ka Area">
  </div>
  <div class="form-group col-md-4">
    <label for="inputDivision">Subdivision</label>
    <input type="text" class="form-control" id="inputDivision" placeholder="Subdivision">
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>India</option>
        <option>USA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" stye="color: white;" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  @endsection
 