<!-- Seach contact by Phone number or Contact name at once !-->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>My Phonebook</title>
		<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css"/>
		
		<!-- jquery library !-->
		<script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/util.js"></script>
		<script>
            // Testing plugin.
		   (function($){
			       $.fn.searchContact = function(option){
                    	var $this = $(this);     
                    	$.get("search_contact.php",{q:option},
                        	function(data){
                            	if(data == 'NO'){
                                	$this.html("ไม่พบชื่อหรือหมายเลขโทรศัพท์");
                            	}else{
                                	$this.html(data);
                            	}
                        
                        	}
                    	) // end of AJAX
                	} // end of 'serachContact' function.

		   })(jQuery)
          var util = {
              
              errMsg :"",
              
              search: function(){
                  util.errMsg ="ใส่หมายเลขโทรศัพท์หรือชื่อผู้ติดต่อ";
                if($("#searchtext").isEmpty(util.errMsg)){
                    
                    // if 'searchtext' is not empty, call 'serachContact'
                    var param = $("#searchtext").val();
                    $("#result").searchContact(param);
                 } // end of if statement
            }, //end of search function
            
              onReady: function(){
				$("#searchtext").focus();
                $("#search").click(util.init);            
              }, // end of onReady function
              
              init: function(){
                  $("#suggest").val("");
                  $("#result").empty();
                  util.search();
                  $("#searchtext").focus();
                  $("#searchtext").select();
              } // end of init function
          };
            
            $(document).ready(util.onReady)//function(){ 
			
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
						<li>Contacts</li>
                    </ol>
				<div class="row">
					<div class="col-xs-6">
						<div class="input-group">
							<input type="text" id="searchtext" class="form-control input-sm" placeholder="Search&hellip;">
							<span class="input-group-btn">
								<button type="button" id="search" class="btn btn-default btn-sm">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
							
						</div>
					</div>
					<br/>
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-12">
						<div id="result"></div>
					</div>
				</div>
            </div> <!-- End of container DIV !-->
	</body>
</html>