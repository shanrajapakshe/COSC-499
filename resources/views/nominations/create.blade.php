@extends('main')
@section('title', 'Create Nomination')


@section('content')

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>

$(function(){
  $(".box").not(".FinalGrade").hide();
   $(".box").not(".PredictedGradeAndRank").hide();
});

$(document).ready(function(){
   $('input[type="radio"]').click(function(){
       if($(this).attr("value")=="FinalGrade"){
           $(".box").not(".FinalGrade").hide();
           $(".FinalGrade").show();
       }
       if($(this).attr("value")=="PredictedGradeAndRank"){
           $(".box").not(".PredictedGradeAndRank").hide();
           $(".PredictedGradeAndRank").show();
       }

   });
});
</script>

  <script>
    $(function() {
    $("[name=toggler]").click(function(){
            $('.toHide').hide();
            $("#visible"+$(this).val()).show('slow');
    });
 });
  </script>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Nomination</h1>
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
         @foreach ($errors ->all() as $error)
         <li>{{$error}}</li>
         @endforeach
       </ul>
      </div>
     @endif


      <form class="form-horizontal" action="{{url ('/nominations') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-2" for="award">Award*:</label>
          <div class="col-sm-10">
            <select class="form-control" id="award">
              @foreach ($awards as $award)
                <option>{{$award->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentNum">Student Number*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentNum" placeholder="Enter Student Number" required pattern='[0-9]{8}' name="studentNum">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="studentFirstName">First Name*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentFirstName" placeholder="Enter First Name" required name = "studentFirstName">
          </div>
        </div>



        <div class="form-group">
          <label class="control-label col-sm-2" for="studentLastName">Last Name*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="studentLastName" placeholder="Enter Last Name" required name = "studentLastName">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="checkbox">Graduating this Year?:</label>
          <div class="col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox" value="">Graduating</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="course">Course*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="course" placeholder="Enter Course" required name = "course">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="section">Section*:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="section" placeholder="Enter Section" required pattern='[0-9]{3}'name = "section">
          </div>
        </div>

        <div>
               <label><input type="radio" name="colorRadio" value="FinalGrade" > Final Grade</label><br>
               <label><input type="radio" name="colorRadio" value="PredictedGradeAndRank"> Predicted Grade And Rank</label>

           </div>


  <div class="form-group">
           <div class="FinalGrade box">
             <label class="control-label col-sm-2" for="actGrade">Grade:</label>
             <div class="col-sm-10">
               <input type="textarea" class="form-control" id="actGrade" placeholder="Enter Grade"  required pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "actGrade">
             </div>
           </div>
  </div>


<div class="form-group">
           <div class="PredictedGradeAndRank box">
             <label class="control-label col-sm-2" for="esttGrade">Estimated Grade:</label>
             <div class="col-sm-10">
               <input type="textarea" class="form-control" id="estGrade" placeholder="Enter Estimated Grade"  required pattern='[0-9]|[1-9][0-9]|[1][0-9][0-9]$' name = "estGrade">
             </div>
           </div>
</div>

<div class="form-group">
           <div class="PredictedGradeAndRank box">
             <label class="control-label col-sm-2" for="rank">Rank:</label>
             <div class="col-sm-10">
               <input type="textarea" class="form-control" id="rank" placeholder="Enter Rank" name = "Rank">
             </div>
           </div>
         </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-10">
            <textarea  rows='4' cols='80'class="form-control" id="description" placeholder="Enter Description" name = "description"></textarea>
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Nominate!</button>
          </div>
        </div>
      </form>




      {{-- <form method="post" action="preview">
       <fieldset>

         <script type="text/javascript" src="http://code.jquery.com/jquery.min.js">

          function actualOrEst() {
           if (document.getElementById('gradeCheck').checked) {
             document.getElementById('ifGrade').style.display = 'block';

           }
           else document.getElementById('ifGrade').style.display = 'none';
           if (document.getElementById('estCheck').checked) {
             document.getElementById('ifEst').style.display = 'block';

           }
           else document.getElementById('ifEst').style.display = 'none';
         }


    });
});

       </script>


       <p><strong>Grades:</strong><br/>
         <input type="radio" onclick="javascript:actualOrEst();" name="yesno" id="gradeCheck">  Grade
         <div id="ifGrade" style="display:none">
          Grade<input type='text' id='grade' name='grade' min='1' max ='100'>
        </div></p>

        <input type="radio" onclick="javascript:actualOrEst();" name="yesno" id="estCheck">  Estimated Grade</p>
        <div id="ifEst" style="display:none">
          Estimated Grade <input type='text' id='estgrade' name='estgrade' min='1' max='100'>
          Rank <input type='text' id='yes' name='yes' min='1' max='5'>

        </div>


        <p><strong>Nominations:</strong><br/>
         <input type="checkbox" name="nA" value="nA"> Nomination A</p>
         <input type="checkbox" name="nB" value="nB"> Nomination B</p>
         <input type="checkbox" name="nC" value="nC"> Nomination C</p>
         <input type="checkbox" name="nD" value="nD"> Nomination D</p>
         <input type="checkbox" name="nE" value="nE"> Nomination E</p>
         <input type="checkbox" name="nGrad" value="nGrad"> Graduate Nomination</p>

         <script type="text/javascript">

  //                function ifGraduate() {
  //                   if (document.getElementById('graduationCheck').checked) {
  //                       document.getElementById('graduate').style.display = 'block';
  //
  //                   }
  //                   else document.getElementById('graduate').style.display = 'none';
  //                }

  </script>

  <p><strong>Graduates:</strong><br/>
    <input type="checkbox"  onclick="javascript:ifGraduate();" name="gradCheck" value="gradCheck" id="graduationCheck"> Yes</p>
    <div id="graduate" style="display:none">
      <select>
        <option value="winterGrad">Winter 2016</option>
        <option value="springGrad">Spring 2017</option>
      </select>
    </div>  --}}

  </fieldset></body>
  </form>
  </div>
  </div>
@endsection
