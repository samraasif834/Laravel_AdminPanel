<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }

        .h2_font{
           font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color{
           color:black;
        }


    </style>
    <!-- Required meta tags -->
    @include('admin.css')
     </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">

          @if(Session()->has('message'))
            <div class="alert alert-success">
                {{ Session()->get('message') }}
             </div>
            @endif

<div class="div_center">
    <h2 class="h2_font">Add Category<h2>

<form action="{{ url('add_category') }}" method="POST">

    @csrf

    <input class="input_color" type="text" name="category" placeholder="Write Category Name">
    <input type="submit" name="submit" class="btn btn-primary" value="Add Category">

</form>



</div>
        </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
