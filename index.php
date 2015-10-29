<?php
	get_header();?>
	<select id = "city">
        <option value="none">Select City</option>
        <option value ="Amritsar" >Amritsar</option>
        <option value ="TarnTaran">Tarn_Taran</option>
        <option value ="Ludhiana">Ludhiana</option>
</select>
<select id = "areas">
</select>
	<?php
	if(have_posts()) 
	{
		get_template_part('content', 'postlist');
	}
	else 
	{
		get_template_part('content', 'none');
	}?>


<script type="text/javascript" language="javascript">

        $("#city").change(function(){
                var value= this.value;
                $("#areas").empty();
                $("#areas").css({"display":"inline-block"});
                        $("#areas").append($('<option>Select Area</option>'));
                if(value == "Amritsar"){
                        $("#areas").append($('<option>Chheharta</option> + <option>Mall_Road</option> + <option>Ranjit_Avenue</option>'));
                        }        
                else if(value == "Ludhiana"){
                        $("#areas").append($('<option>Gill_Road</option> + <option>Dugri</option>'));
                        }       
                else if(value == "TarnTaran"){
                        $("#areas").append($('<option>Patti</option> + <option>Chabal</option>'));
                        }       
                });

        $("#areas").change(function(){
                console.log("running");
        var select= this.value;
                        $(".area").children().css({"display":"none"});
                if(select == 'Chheharta'){
                        $(".Chheharta").css({"display": "block"});
                }
                else if(select == 'Ranjit_Avenue'){
                        $(".Ranjit_Avenue").css({"display":"block"});
                }
                else if(select == 'Gill_Road'){
                        $(".Gill_Road").css({"display":"block"});
                }
                else if(select == 'Mall_Road'){
                        $(".Mall_Road").css({"display":"block"});
                }
                else if(select == 'Dugri'){
                        $(".Dugri").css({"display":"block"});
		 }
                else if(select == 'Patti'){
                        $(".Patti").css({"display":"block"});
                }
                else if(select == 'Chabal'){
                        $(".Chabal").css({"display":"block"});
                }
        });
</script>




<?php	get_footer();
?>