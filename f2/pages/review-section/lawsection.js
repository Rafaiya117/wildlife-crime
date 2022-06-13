route['review-section'] = function (){

function onSubmit() 
{ 
    var val = [];
    var val1 = [];
    var flag =0;
    var flag1 =0;
    
    var accusedHold = $('input[name=accusedHold]:checked').val();
    $('.seizedAnimal:checked').each(function(i){
       flag1 =1;
    });
    
    //for offence
    $('.accusedProduct:checked').each(function(i){
    val = $(this).val();
    //alert(val);
    if((val == 'hunting') || (val == 'trade') || (val == 'possession')) 
     {
       flag =1;  
     }
    if(val == 'abetment')
    {
      $('.accusedProduct:checked').each(function(i){
      val1 = $(this).val();
      if((val1 == 'hunting') || (val1 == 'trade') || (val1 == 'possession')) 
      {
        flag =1;  
      }
      });
    }
    });
    
    if(flag1 == 0)
    {
      alert('please select what articles have you seized.'); 
      return false;
    } else if((accusedHold != "Yes") && (accusedHold != "No"))  
    {
      alert('please select accused hold a license for the product.'); 
      return false;
    }else if(flag == 0)  
    {
      alert('please select one more offence.'); 
      return false;
    }
}

function onSubmit1() 
{ 
    var val = [];
    var val1 = [];
    var flag =0;
    var flag1 =0;
    var accusedHold = $('input[name=accusedHoldThreeFour]:checked').val();
    
    $('.seizedArticle:checked').each(function(i){
       flag1 =1;
    });
    
    //for offence
    $('.accusedProductThreeFour:checked').each(function(i){
    val = $(this).val();
    //alert(val);
    if((val == 'hunting') || (val == 'trade') || (val == 'possession')) 
     {
       flag =1;  
     }
    if(val == 'abetment')
    {
      $('.accusedProduct:checked').each(function(i){
      val1 = $(this).val();
      if((val1 == 'hunting') || (val1 == 'trade') || (val1 == 'possession')) 
      {
        flag =1;  
      }
      });
    }
    });
    
    if(flag1 == 0)
    {
      alert('please select what articles have you seized.'); 
      return false;
    } else if((accusedHold != "Yes") && (accusedHold != "No"))  
    {
      alert('please select accused hold a license for the product.'); 
      return false;
    }else if(flag == 0)  
    {
      alert('please select one more offence.'); 
      return false;
    }
}

$('#subscribeForm').submit(onSubmit);

setTimeout(function() {
    $('.lawerrmsg').fadeOut('fast');
    }, 5000);
    
$(".permissionprotectedAreaDiv");
  };