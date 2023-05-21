     <?php 

     $app_id = "anID";

     $canvas_page = "http://apps.facebook.com/bombertest_tz";

     $auth_url = "https://www.facebook.com/dialog/oauth?client_id=" 
            . $app_id . "&redirect_uri=" . urlencode($canvas_page)."&scope=email";

     $signed_request = $_REQUEST["signed_request"];

     list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

     $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

     if (empty($data["user_id"])) {
            echo("<script> top.location.href='" . $auth_url . "'</script>");
     } else {
  $data=Yii::app()->facebook->api("/me");
$user=  User::model()->findByAttributes(array('fb_id'=>$data['id']));
if(!$user){
    $user=new User();
    $user->username=$data['name'];
    $user->email=$data['email'];
    $user->fb_id=$data['id'];
   if( $user->save())echo "saved";
      $id=new UserIdentity($user['email'],"",$user['id']); 
        $id->authenticate();
        if($id->errorCode===UserIdentity::ERROR_NONE)
		{
			Yii::app()->user->login($id,0);
			$this->renderPartial('index');
		}
        
    }
    else{
        $id=new UserIdentity($data['email'],"",$data['id']); 
        $id->authenticate();
        if($id->errorCode===UserIdentity::ERROR_NONE)
		{
			Yii::app()->user->login($id,0);
			$this->renderPartial('index');
		}
    }
    echo '<pre>';var_dump($data['locale']);
   } 
 ?>
