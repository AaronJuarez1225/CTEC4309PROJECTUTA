<?php


if (array_key_exists("Submitthis", $_POST)) {
    
    
    
    
    
    $required = array('FirstName1', 'LastName1', 'BillAddrss', 'City1', 'State1', 'Zip1', 'CardType', 'CardNum', 'ExpDate', 'FirstName2', 'LastName2', 'ShipAddrss', 'City2', 'State2', 'Zip2');   
    $expected = array('FirstName1', 'LastName1', 'BillAddrss', 'City1', 'State1', 'Zip1', 'CardType', 'CardNum', 'ExpDate', 'FirstName2', 'LastName2', 'ShipAddrss', 'City2', 'State2', 'Zip2', 'comment');
    $missing = array();
    


foreach($expected as $thisField) {
    
    
    
    thisUserInput = $_POST[$thisField];
    
    if(in_array($thisField, $required)) {
        
        
        
        if(empty($thisUserInput)) {
            
        array_push($missing, $thisField);
            
        }
        else {${$thisField} = $thisUserInput;
    }
}
    else {${$thisField} = $thisUserInput;
}

}
    
    if(empty($missing)) {
        
        
        $tagStr = implode (",", $tag);
        
        if(!empty($email)) {
            $FirstName1 = "<a href='mailto:$email'>$FirstName</a>";
        }
        
        
        $output = "<b>First Name</b>: $FirstName1<br/>
                   <b>First Name</b>: $LastName1<br/>
                   <b>First Name</b>: $BillAddrss<br/>
                   <b>First Name</b>: $City1<br/>
                   <b>First Name</b>: $State1<br/>
                   <b>First Name</b>: $Zip1<br/>
                   <b>First Name</b>: $CardType<br/>
                   <b>First Name</b>: $CardNum<br/>
                   <b>First Name</b>: $ExpDate<br/>
                   <b>First Name</b>: $FirstName2<br/>
                   <b>First Name</b>: $LastName2<br/>
                   <b>First Name</b>: $ShipAddrss<br/>
                   <b>First Name</b>: $City2<br/>
                   <b>First Name</b>: $State2<br/>
                   <b>First Name</b>: $Zip2<br/>;"
                   
                   }
    else {
        $missingFielsList = implode(",",$missing);
        $output = "The following information is missing, it is required to complete your transaction<br>
                   <b>Missing Fields: $missingFieldList <br>"
;    }
}
    else {$output = "Please use the transaction form <a href='projecthtml.php> here</a>.";}

?>
        
        
        
        
        
