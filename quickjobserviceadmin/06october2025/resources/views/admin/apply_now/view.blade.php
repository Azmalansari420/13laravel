<!DOCTYPE html>
<html lang="en">
   <title>View <?=$page_title ?></title>
   @include('admin.include.allcss')
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         @include('admin.include.session-toster') 
         @include('admin.include.topbar')  
         @include('admin.include.sidebar')

         <div id="content" class="app-content">
            <h1 class="page-header add-header">View <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="">
               @csrf
               <div class="col-lg-12">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-6 form-group">
                           <label>Enquiry Date </label>
                           <input type="text" class="form-control" name="title" value="{!! dateTimeformet($EDITDATA->addeddate) !!}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Apply For </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->applyfor}}">
                        </div>
                        <div class="col-6 form-group">
                           <label>Full Name * </label>
                           <input type="text" class="form-control" name="title" value="{{$EDITDATA->name}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Gender </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->gender}}">
                        </div>
                        <div class="col-6 form-group">
                           <label>DOB </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->dob}}">
                        </div>
                        <div class="col-6 form-group">
                           <label>Father name  </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->father_name}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Mother name </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->mother_name}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Experience </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->experience}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Education </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->education}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>DOB </label>
                           <input type="text" class="form-control" name="sub_title" value="{{$EDITDATA->dob}}">
                        </div>

                        <div class="col-6 form-group">
                           <label>Email Address </label>
                           <input type="text" class="form-control" name="title" value="{{$EDITDATA->email}}">
                        </div>

                        <div class="col-12 form-group">
                           <label>Mobile </label>
                           <input type="text" class="form-control" name="title" value="{{$EDITDATA->mobile}}">
                        </div>



                        <div class="col-4 form-group">
                           <label>Passport Size Photo * </label>
                           <br>
                           <a href="{{url('public/'.$upload_path)}}/{{ $EDITDATA->passportimage }}" target="_blank">
                              <img src="{{url('public/'.$upload_path)}}/{{ $EDITDATA->passportimage }}" width="75px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                          </a>
                        </div>

                        <div class="col-4 form-group">
                           <label>Upload 10th Marksheet * </label>
                           <br>
                           <a href="{{url('public/'.$upload_path)}}/{{ $EDITDATA->tenmarksheet }}" target="_blank">
                              <img src="{{url('public/'.$upload_path)}}/{{ $EDITDATA->tenmarksheet }}" width="75px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                          </a>
                        </div>

                        <div class="col-4 form-group">
                           <label>Upload 12th Marksheet * </label>
                           <input type="text" class="form-control" name="title" value="{{$EDITDATA->twelemarksheetSelect}}">
                           <br>
                           <a href="{{url('public/'.$upload_path)}}/{{ $EDITDATA->twelemarksheet }}" target="_blank">
                              <img src="{{url('public/'.$upload_path)}}/{{ $EDITDATA->twelemarksheet }}" width="75px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                          </a>
                        </div>


                        <div class="col-4 form-group">
                           <label>Upload Graduation Marksheet * </label>
                           <input type="text" class="form-control" name="title" value="{{$EDITDATA->graduationSelect}}">
                           <br>
                           <a href="{{url('public/'.$upload_path)}}/{{ $EDITDATA->graduationmarksheet }}" target="_blank">
                              <img src="{{url('public/'.$upload_path)}}/{{ $EDITDATA->graduationmarksheet }}" width="75px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                          </a>
                        </div>

                        <div class="col-4 form-group">
                           <label>Upload Other qualifications/Diploma * </label>
                           <input type="text" class="form-control" name="title" value="{{$EDITDATA->otherqualificationsSelect}}">
                           <br>
                           <a href="{{url('public/'.$upload_path)}}/{{ $EDITDATA->otherqualifications }}" target="_blank">
                              <img src="{{url('public/'.$upload_path)}}/{{ $EDITDATA->otherqualifications }}" width="75px" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
                          </a>
                        </div>

                        

                        

                        
                     </div>
                  </div>
               </div>
              
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      @include('admin.include.theams') 
      @include('admin.include.allscript')
   </body>
</html>

