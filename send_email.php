<?php

	$action=$_GET['action'];
	switch ($action) {
	 case 'petgolu_forget_password':
       
       
                        $sender_email=$_POST['sender_email'];
                        $receiver_email=$_POST['receiver_email']; 
                        $value=$_POST['value'];
                        $subject=$_POST['subject'];
                    
 $message = '<html><head><title>Forget Password</title>';
           
      
            $message.='</head><body class = "container" style="padding: 0px;">';

            $message.='<div   style="align-self: center;border:1px solid #f2f2f2;padding-top: 20px;background-color: #f2f2f2">';
      $message.='<div style="width: 70%;margin: auto;background-color: white;border:0.5px solid gray;padding-bottom: 50px;margin-top: 50px">';
        $message.='<div style="background-color: #fbad02;padding-top: 30px;padding-bottom: 30px">';
          $message.='<h3 style="margin-left: 20px">Forget Password</h3></div>';
        $message.='<p style="margin-top: 50px;font-size: 15px;margin-left: 20px;">Hi, '.$value.',</p>';
        $message.="<p style='margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px'>Someone has requested a new password for the following account on petgolu is Pakistan's premier pet market place where you can buy, sell or adopt all variety of pets.:</p>";
      $message.='<p style="margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px">Username: '.$value.'</p>';
      $message.="<p style='margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px'>if you didn't make this request,just ignore this email. if you'd like to proceed:</p>";

      $message.='<a href="https://adanmart.com.pk/petgolu/index.php/admin/reset_password/'.$value.'" style="margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px;color: black;text-decoration-line: underline;">Click here to reset your password</a></div>';
      $message.='<div style="width: 70%;margin: auto;margin-top: 20px;margin-bottom: 100px">';
        $message.="<p style='margin-top: 10px;font-size: 15px;color: #6c7071'>petgolu is Pakistan's premier pet market place where you can buy, sell or adopt all variety of pets.--Developed by Technology Architects</p></div></div></body></html>";


  


                       
              
                $to = $receiver_email;
                $subject=$subject;
                $message =  $message;
                 $header = "From:".$sender_email." \r\n";
                // $header .= "Cc:ameergg96@gmail.com,\r\n";
                 $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                 $retval = mail ($to,$subject,$message,$header);
   
                        
                        
        if( $retval == true ) {
                    echo json_encode(array ("response" => $message));
                 }else {
                    echo json_encode(array ("response" => "fail1"));
        
                 }
                       





                      
                              
                            break;
                            case 'send_email':
       
       
                        $name=$_POST['name'];
                        $email=$_POST['email']; 
                        $message=$_POST['message']; 
                    



                       
              
                $to = "hraza6677@gmail.com";
                $subject="Contact us";
                $message =  $message;
                 $header = "From:".$email." \r\n";
                // $header .= "Cc:ameergg96@gmail.com,\r\n";
                 $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                 $retval = mail ($to,$subject,$message,$header);
   
                        
                        
        if( $retval == true ) {
                    echo json_encode(array ("response" => "success"));
                 }else {
                    echo json_encode(array ("response" => "fail"));
        
                 }
                       





                      
                              
                            break;
                            case 'send_contact_email':
       
       
                        $name=$_POST['name'];
                        $email=$_POST['email']; 
                        $message=$_POST['message']; 
                    



                       
              
                $to = "hraza6677@gmail.com";
                $subject="Contact us";
                $message =  $message;
                 $header = "From:".$email." \r\n";
                // $header .= "Cc:ameergg96@gmail.com,\r\n";
                 $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                 $retval = mail ($to,$subject,$message,$header);
   
                        
                        
        if( $retval == true ) {
                    echo json_encode(array ("response" => "success"));
                 }else {
                    echo json_encode(array ("response" => "fail"));
        
                 }
                       





                      
                              
                            break;
                            case 'send_any_email':
       
       
                        $sender_email=$_POST['sender_email'];
                        $receiver_email=$_POST['receiver_email']; 
                        $message=$_POST['message']; 
                    $subject=$_POST['subject'];



                       
              
                $to = $receiver_email;
                $subject=$subject;
                $message =  $message;
                 $header = "From:".$sender_email." \r\n";
                // $header .= "Cc:ameergg96@gmail.com,\r\n";
                 $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                 $retval = mail ($to,$subject,$message,$header);
   
                        
                        
        if( $retval == true ) {
                    echo json_encode(array ("response" => "success"));
                 }else {
                    echo json_encode(array ("response" => "fail"));
        
                 }
                       





                      
                              
                            break;
                            case 'londonsloop_forget_password':
       
       
                        $sender_email=$_POST['sender_email'];
                        $receiver_email=$_POST['receiver_email']; 
                        $value=$_POST['value'];
                        $subject=$_POST['subject'];
                    
 $message = '<html><head><title>Forget Password</title>';
           
      
            $message.='</head><body class = "container" style="padding: 0px;">';

            $message.='<div   style="align-self: center;border:1px solid #f2f2f2;padding-top: 20px;background-color: #f2f2f2">';
      $message.='<div style="width: 70%;margin: auto;background-color: white;border:0.5px solid gray;padding-bottom: 50px;margin-top: 50px">';
        $message.='<div style="background-color: #fbad02;padding-top: 30px;padding-bottom: 30px">';
          $message.='<h3 style="margin-left: 20px">Forget Password</h3></div>';
        $message.='<p style="margin-top: 50px;font-size: 15px;margin-left: 20px;">Hi, '.$value.',</p>';
        $message.="<p style='margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px'>Someone has requested a new password for the following account on Londonsloop .:</p>";
      $message.='<p style="margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px">Username: '.$value.'</p>';
      $message.="<p style='margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px'>if you didn't make this request,just ignore this email. if you'd like to proceed:</p>";

      $message.='<a href="https://wertoapp.com/Londonsloop/reset_password?id='.$value.'" style="margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px;color: black;text-decoration-line: underline;">Click here to reset your password</a></div>';
      $message.='<div style="width: 70%;margin: auto;margin-top: 20px;margin-bottom: 100px">';
        $message.="</div></div></body></html>";


  


                       
              
                $to = $receiver_email;
                $subject=$subject;
                $message =  $message;
                 $header = "From:".$sender_email." \r\n";
                // $header .= "Cc:ameergg96@gmail.com,\r\n";
                 $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                 $retval = mail ($to,$subject,$message,$header);
   
                        
                        
        if( $retval == true ) {
                    echo json_encode(array ("response" => $message));
                 }else {
                    echo json_encode(array ("response" => "fail1"));
        
                 }
                       





                      
                              
                            break;
                            case 'auction_techs_forget_password':
       
       
                        $sender_email=$_POST['sender_email'];
                        $receiver_email=$_POST['receiver_email']; 
                        $value=$_POST['value'];
                        $subject=$_POST['subject'];
                    
 $message = '<html><head><title>Forget Password</title>';
           
      
            $message.='</head><body class = "container" style="padding: 0px;">';

            $message.='<div   style="align-self: center;border:1px solid #f2f2f2;padding-top: 20px;background-color: #f2f2f2">';
      $message.='<div style="width: 70%;margin: auto;background-color: white;border:0.5px solid gray;padding-bottom: 50px;margin-top: 50px">';
        $message.='<div style="background-color: #fbad02;padding-top: 30px;padding-bottom: 30px">';
          $message.='<h3 style="margin-left: 20px">Forget Password</h3></div>';
        $message.='<p style="margin-top: 50px;font-size: 15px;margin-left: 20px;">Hi, '.$value.',</p>';
        $message.="<p style='margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px'>Someone has requested a new password for the following account on Auction Techs .:</p>";
      $message.='<p style="margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px">Username: '.$value.'</p>';
      $message.="<p style='margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px'>if you didn't make this request,just ignore this email. if you'd like to proceed:</p>";

      $message.='<a href="https://support.auctiontechs.com/reset_password.php?id='.$value.'" style="margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px;color: black;text-decoration-line: underline;">Click here to reset your password</a></div>';
      $message.='<div style="width: 70%;margin: auto;margin-top: 20px;margin-bottom: 100px">';
        $message.="</div></div></body></html>";


  


                       
              
                $to = $receiver_email;
                $subject=$subject;
                $message =  $message;
                 $header = "From:".$sender_email." \r\n";
                // $header .= "Cc:ameergg96@gmail.com,\r\n";
                 $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                 $retval = mail ($to,$subject,$message,$header);
   
                        
                        
        if( $retval == true ) {
                    echo json_encode(array ("response" => $message));
                 }else {
                    echo json_encode(array ("response" => "fail1"));
        
                 }
                       





                      
                              
                            break;
                             case 'refer_email_for_earthlink':
       
       
                        $sender_email=$_POST['sender_email'];
                        $receiver_email=$_POST['receiver_email']; 
                        
                        $subject=$_POST['subject'];
                    $value=$_POST['message'];
 $message = '<html><head><title>EarthLink</title>';
           
      
            $message.='</head><body class = "container" style="padding: 0px;">';

            $message.='<div   style="align-self: center;border:1px solid #f2f2f2;padding-top: 20px;background-color: #f2f2f2;width: 100%;height: 100%">';
      $message.='<div style="width: 70%;margin: auto;background-color: white;border:0.5px solid gray;padding-bottom: 50px;margin-top: 50px">';
        $message.='<div style="background-color: #00345b;padding-top: 30px;padding-bottom: 30px">';
          $message.='<h3 style="margin-left: 20px;color:white">Wellcome to EarthLink App</h3></div>';
        $message.='<p style="margin-top: 50px;font-size: 15px;margin-left: 20px;">Hi,</p>';
        $message.="<p style='margin-top: 10px;font-size: 15px;margin-left: 20px;margin-right: 20px'>Some one refer you for using Earthlink App, Please Click the below button for proceeding next:</p>";
      $message.="<a style='background-color: #00345b;align-self: center;width: 100px;height: 30px;color: white;border-radius: 10px;margin:auto;margin-left: 40%;padding:10px' href='https://adanmart.com.pk/deeplink.php?referby=". $value."'>Click here</a>
      </div>
    </div>
    </body>
    </html>";
      


  


                       
              
                $to = $receiver_email;
                $subject=$subject;
                $message =  $message;
                 $header = "From:".$sender_email." \r\n";
                // $header .= "Cc:ameergg96@gmail.com,\r\n";
                 $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                 $retval = mail ($to,$subject,$message,$header);
   
                        
                        
        if( $retval == true ) {
                    echo json_encode(array ("response" => "$message"));
                 }else {
                    echo json_encode(array ("response" => "fail1"));
        
                 }
                       





                      
                              
                            break;
	
		
		default:
			# code...
			break;
	}
?>