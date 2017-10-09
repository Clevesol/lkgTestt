/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/***Button Methods***************************************************************************************************************/

/*****View button Method*****/

function btnView(){
    
    var radioValue = $("input[name='radio_tour']:checked").val();
    if(radioValue){
        //alert("Your are a - " + radioValue);
        window.location = "tour/"+radioValue;
    } else{
        alert("Please select any tour");      
    }  
     //window.location = "tour/1";
}
    
/*$(document).ready(function() {
    
    $('#btnDelete').click(function(){ 
        var radioValue = $("input[name='radio_tour']:checked").val();
        alert(radioValue);
        var token = $('input[name="_token"]').val();
        alert(token);       
        if(radioValue){
        
            $.ajax({
                url: '/tour/'+radioValue,
                type: 'DELETE',
                data: {'_method': 'DELETE','_token': token},
                success: function(data) {
                    alert(data);
                //window.location = "tour/";
                }
            }); 
        } else{
        alert("Please select any tour");      
        }
        
    });

    
});*/
    
    


