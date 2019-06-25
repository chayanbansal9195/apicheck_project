<br/>

<!--<link href="bootstrap/custom.css" rel="stylesheet">

-->	

	<input type="hidden" name="sess" id="sess" value="<?php echo $sess ?>" />

          <table align="center" width="88%" id="myTable1" cellpadding="5" cellspacing="2"><tr>

            <td align="right" width="6%" style=" font-size:13px;"><label for="cls">Class:</label>



           <td align="center" width="12%"> <select name="cls" id="cls" onchange="myFunction(this)" class="form-control input-sm" >

              <option value="">--Select--</option>

              <?php 

              $query="SELECT * FROM `p_class` WHERE class_name='X'" ;

              $result=mysql_query($query);

              while ($row=mysql_fetch_array($result)) {

                ?>

                <option value="<?php echo $row['class_name'] ?>"><?php echo $row['class_name'] ?></option>

                <?php

              }

              ?>

            </select>

    <td align="right" width="9%" style=" font-size:13px;">

    <label for="sec">Section:</label>

    <td align="left" width="10%"><select name="sec" id="sec" style="text-transform: capitalize;" class="form-control input-sm">

    <option value="">--Select--</option>



    </select>

   <td align="right" width="8%" style=" font-size:13px;">

   

              <label for="exam">Exam Type:</label>

              <td align="left" width="11%"><select name="exam" id="exam" class="form-control input-sm">

              	<option value="">--Select--</option>

                <option value="pt">Pre-Test</option>

                <option value="ts">Test</option>

                <option value="hs">HSLC</option>

              </select>

<td align="right" width="4%" style=" font-size:13px;">

            <label for="sess">Year:</label>

            <td width="12%"><select  name="sess1" id="sess1" class="form-control input-sm"  >
<?php 

	$q="SELECT * FROM school_session order by session desc ";

$r=mysql_query($q);

while ($row=mysql_fetch_array($r)) {



  $sess=$row['session'];
  
?>
<option value="<?php echo $sess;?>"><?php echo $sess; ?></option>
<?php

}



 ?>

              



            </select></td></tr>

            <tr><td align="center" colspan="10"><input class="btn btn-info input-sm" style="margin-top: 8px;" type="button" onclick="viewStudents()" name="" value="View" /></td></tr>

            </table>

    

      

   

    <?php if (isset($_SESSION['imsg'])) {

  	?>

  <div class="alert alert-success alert-dismissable">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Success!</strong> Data Succesfully Saved.

</div>

<?php } 

unset($_SESSION['imsg']);

?>

<?php if (isset($_SESSION['imsgdt'])) {

  	?>

  <div class="alert alert-success alert-dismissable">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Error!</strong> Date Not Entered...

</div>

<?php } 

unset($_SESSION['imsgdt']);

?>     

<form name="f1" method="post" action="Joydeep_exam/test_board_marks_entry_action.php">

 <div align="center" id="stdShow"></div>

</form>

<script type="text/javascript">

function myFunction(obj)

  {

    $('#sec').html('')

    var dropDown = obj;

    var cls = dropDown.options[dropDown.selectedIndex].value;

    $.ajax({

            type: "POST",

            url: "Joydeep_exam/sectionajax.php",

            data: { 'cls': cls  },

            dataType: 'json',

            success: function(data){

                // Parse the returned json data

                $("#sec").append("<option value=''>"+"--Select--"+"</option>");

                //console.log(data);

                var len = data.length;

               /// console.log(data[0]);

                //var opts = $.parseJSON(data);

                // Use jQuery's each to iterate over the opts value

                for( var i = 0; i<len; i++){

                    // var id = data[i]['id'];

                    // var name = data[i]['name'];

                    

                    $("#sec").append("<option value='"+data[i]+"'>"+data[i]+"</option>");

          



                }

            }

        });

  }



   $("#cls").change(function() {

   	/* Act on the event */

   	var cid=$(this).val();

        //console.log(cid);

        $.ajax({

          url: 'Joydeep_exam/getsubjs.php',

          type: 'GET',

          data: {cls:cid},

          dataType: 'json',

          success:function(data){

        //alert(data);

        //console.log(data);

        //var len = data.length;



         $("#sess").html('');

        // var exam=$('#exam').val()

        // if(exam==''){

         

        // }

        

       

        $('#sess').append('<option value="">Select</option>');

        $.each(data, function(i, d) {

                    // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data

                    $('#sess').append('<option value="' + i + '">' + d + '</option>');

                  });        







      



     }

   });

        



});

$("#exam").change(function() {



	//var sub=$("#sess").val();

	var cid=$("#cls").val();

	var exam=$(this).val();

	$("#ctest").html('');

	/* Act on the event */

	var dataString='&cls='+cid+'&exam='+exam;

	$.ajax({

          url: 'Joydeep_exam/getclstestformarksview.php',

          type: 'GET',

          data: dataString,

          dataType: 'json',

          success:function(data){

 		

          	//console.log(data);

    $('#ctest').append('<option value="">Select</option>');

 	$.each(data, function(i, d) {

 			 $('#ctest').append('<option value="' + d.ctest+ '">' + d.ctest + '</option>');



          }); 

		}



	});	



});



function viewStudents(){

  var className=document.getElementById('cls').value;

  var section=document.getElementById('sec').value;

  var sess=document.getElementById('sess1').value;

  var exam=document.getElementById('exam').value;

  if(sess=='')

  {

	  alert('Select Session First');

	  document.getElementById('sess1').focus();

		return false;

  }

   if(className && sess ){



    var dataString=className+'^'+section+'^'+sess+'^'+exam;

    //console.log(a);

    var httpx;





    if(window.XMLHttpRequest){

      httpx=new XMLHttpRequest();



    }

    else{

      httpx=new ActiveXObject("Microsoft.XMLHTTP");



    }

	if(className=='X')

	{

		if(exam=='pt' || exam=='ts')

		{

			//$(".se-pre-con").fadeIn(500);

       httpx.open("GET","Joydeep_exam/test_view_markslistpretest.php?statid="+dataString,true);

	  // $(".se-pre-con").fadeOut(25000);

		}

		else if(exam=='hs')

		{

			alert('Page Not Found');

		}

	}

	   httpx.onreadystatechange=function(){

        if(httpx.readyState==4 && httpx.status==200){



        document.getElementById("stdShow").innerHTML=httpx.responseText;//place the data in the specified position i.e., in table data dist 

		 

        datatable()



      }



    } 

    httpx.send(null);

    



  }

  else

  alert('Please fill the above fields');

}



function rankStudents(){

  var className=document.getElementById('cls').value;

  var sess=document.getElementById('sess1').value;

  var exam=document.getElementById('exam').value;



  if(className && sess ){



    var dataString=className+'^'+sess+'^'+exam;

    //console.log(a);

    var httpx;





    if(window.XMLHttpRequest){

      httpx=new XMLHttpRequest();



    }

    else{

      httpx=new ActiveXObject("Microsoft.XMLHTTP");



    }

		//$(".se-pre-con").fadeIn(500);

       httpx.open("GET","Joydeep_exam/test_view_markslistpretest_rank.php?rnkid="+dataString,true);

		//$(".se-pre-con").fadeOut(25000);

	//ajax engine send an asynchronous call to the server via dis_ajax.php with state_id

       httpx.onreadystatechange=function(){

        if(httpx.readyState==4 && httpx.status==200){



        document.getElementById("stdShow").innerHTML=httpx.responseText;

		//place the data in the specified position i.e., in table data dist 

        datatable()



      }



    } 

    httpx.send(null);

    



  }

  else

  alert('Please fill the above fields');

}
////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////



$(document).on('click','.edt', function() { 

$(this).parent().find('input[type="text"]').prop('readonly', false).focus(); 

});

/////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.sve', function() { 

var mrk=$(this).parent().find('input[type="text"]').val();

var id=$(this).attr('id');

var dataString='id='+id+'&mrk='+mrk;

$.ajax({

      type: "POST",

      url: "Joydeep_exam/test_board_marks_edit_ajax.php",

      data: dataString,

      cache: false,

      success: function(html){

      	alert('Data Saved');

      	$(this).parent().find('input[type="text"]').prop('readonly', true)

      }



	});

});

/////////////////////////////////////////////////////////////////////////////////////////

 $(function () {



        $('form').on('submit', function (e) {



          

          //var j=parseInt($("#subno").val());

          e.preventDefault();



          $.ajax({

            type: $("form").attr('method'),

            url: $("form").attr('action'),

            data: $('form').serialize(),

            success: function (data) {

             // alert('Data Saved');

              viewStudents();

              

              //$("#subno").val(j+1);

            }

          });



        });



      });

	  function checkValid(that){

		var lnth=$('.checkstd:checked:not(:disabled)');

		console.log(lnth.length);

		if(lnth.length>25){

			alert('You have exceed the maximum limit of 25 entry. Please Submit the Checked Data ')

			$(that).prop('checked',false);

			return false;

		}

		if($(that).is(":checked")){

			//console.log('checked');

			$(that).parents('tr').find('input').not(that).prop('disabled',false);

		}else{

			$(that).parents('tr').find('input').not(that).prop('disabled',true);

		}

	}

	function cal(that){

		var x=$(that).parents('tr').find('input[type="text"]');

			//console.log(x);

		var sum=0;

		var l=x.length

		$.each(x,function(index,val){

			//console.log(val.id);

			if(val.id!='total' && val.id!='engo'){

				if($.isNumeric(val.value))

				sum-=-val.value;

			}

			//console.log(sum);

			//$(that).parents('tr').find('#total').val(sum);

		})

		//console.log(l);

		//alert(l);

	}

		

	///////////////////////////////////////////////////////////////////////////////////////

	$('input[type=radio]').change(function()

{

    if (this.previous) {

        this.checked = false;

    }

    this.previous = this.checked;

});

  </script>
  <script type="text/javascript">
function hiLiteRowsClick(){
 var table = document.getElementById('myTable3');
 for (var i=0;i < table.rows.length;i++){
  table.rows[i].onclick= function () {
   if(!this.hilite){
    this.origColor=this.style.backgroundColor;
    this.style.backgroundColor='#C0DDDF';
    this.hilite = true;
   }
   else{
    this.style.backgroundColor=this.origColor;
    this.hilite = false;
   }
    }
 }
}
</script>



