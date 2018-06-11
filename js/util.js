	(function($){
                
                //isEmpty: errMsg is custom message to display in 'placeholder' attribute.
                // call : $(#id element of textbox).isEmpty(errMsg)
                
                $.fn.isEmpty = function(errMsg){
                    var $this = $(this);
                    var inputText = $this.val();
                    if ($.trim(inputText).length == 0){
                        $this.attr("placeholder",errMsg);
                        $this.focus();
                        return false;
                    }else{
                        return true;
                    }
                   
                } // end of 'isEmpty' function
                
                // Search contact 'option' variable is part of text to search
                
         
            })(jQuery);