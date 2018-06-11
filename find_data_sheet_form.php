<?php
	// MySQL connect parameter
	$host = "localhost";
	$user = "root";
	$password = "1234";
	$db = "mycompany"; // mycompany database

	$conn = new mysqli($host, $user, $password, $db);
	$conn->query("SET NAMES UTF8");

	$sql = "SELECT customer_id, customer_name FROM customers ORDER BY customer_name";

	$result = $conn->query($sql);
	
	$conn->close();

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8" />
		<title>Search Datasheets</title>
		<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css"/>
		<style type="text/css">
			body {
				background: #F9F9F9 url(../img/white_texture.jpg) repeat top left;
			}
		</style>
		<script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/util.js"></script>
        
        
		<script>
            (function($){
				// selectBox plugin - show select tag in list box style and use text box to search option value
				// use: $("#select_tag_id").selectBox($("#text_box_id");
				// set up to use:
				//<input type="text" id="text_box_id"/>
				// 	<select id="select_tag_id">
				// 		<option value="1">option_text_1</option>
				//		<option value="n">option_text_n</option>
				//	</select>
				//
				$.fn.selectBox = function(textbox){
					var $this = $(this)
					var options = [];
					
					// push all option list into options array.
					$this.find('option').each(function(){
						options.push({value: $(this).val(), text: $(this).text()});
					});
					
					// store data into select element	
					$this.data('options', options);

					$(textbox).bind("change keyup", function(){
						
						// optionList : store match option and append to list after done.
						var optionList = [];
						
						// optionsItem : empty select tag and get all options data into optionList array.
				 		var optionsItem = $this.empty().scrollTop(0).data('options');
						var search = $.trim($(this).val());
						var regex = new RegExp(search,"gi");
					
						$.each(options, function(i){
							var option = optionsItem[i];
							if (option.text.match(regex) !== null) {
								//code
								// old code.
								//$this.append($('<option>').text(option.text).val(option.value));
								// try new code. 
								optionList.push($('<option>').text(option.text).val(option.value));
							}
						
						}); // end of $.each(options, function(i))
					
						$this.append(optionList);
					}); // end of bind
	
				} // end of function
				
			})(jQuery);
         
		 // create an object 
		 var funcObj = {
		
			onReady : function(){
				$("#customerList").selectBox($("#filter"));
				$("#pushCustomer").click(funcObj.pushCustomer);                
			},
         
             pushCustomer: function (){
                        
						//$("#result").html ($("#customerList").val());
                        
                        $.post("search_data_sheet.php",{
							id: $("#customerList").val()},
							function(result){
								$("#result").html(result);
							}
					  );
             },
         }
             
				// when document ready call onReady function.
				$(document).ready(funcObj.onReady);
		</script>
        
	</head>

	<body>
        <div class="container">
            <div class="page-header">
						<div class="row">
							<div class="col-lg-4">
								<address>
									<strong>Elmec Marketing Co,.Ltd.</strong><br>
									257/3-4 Pattanakarn rd., Suanluang, Suanluang<br>
									Bangkok, Thailand 10250<br>
									<abbr title="Phone">P:</abbr>(+662)3192679
								</address>
							</div>
						</div>
                    </div>
					<ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
						<li>Datasheets</li>
                    </ol>
                <div class="row">
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
                                Search Datasheet
                            </div>
							<div class="panel-body">
						<div class="form-group">
                            <input type='text' class="form-control" id='filter' />
						</div>
						<div class="form-group">
                        <select class="form-control" id='customerList'  size="10" >
							<?php
								//echo "<select class='textbox' id='customerid' name='customerid'>";
								//echo "<option value=0>>>> --- กรุณาเลือกชื่อลูกค้า --- <<<</option>";
								while ($row = $result->fetch_assoc()){
									echo "<option value=" . $row['customer_id'] .">" . $row['customer_name']. "</option>";
								}
								echo "</select>";
							?>
                             
						</div>
						<div class="form-group">
							<button class="btn btn-default"id="pushCustomer">ค้นหา</button>
						</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Result
                            </div>
                            <div class="panel-body">
                                <div id="result"></div>                          
                            </div>
                            </div>                        
                    </div>
                </div> <!-- end of row !-->
            </div> <!-- end of container !-->
	</body>
</html>