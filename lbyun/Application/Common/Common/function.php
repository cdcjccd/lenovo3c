<?php 
/**
 * 发送模板短信
 * @param int $to 手机号  
 * @param int $type 验证类型【1--注册 2--找回密码】
 * @return bool
 */
function sendTemplateSMS($to, $type, $content) {
    vendor("alidayu.TopSdk"); // 这是载入阿里大鱼SDK
    $c = new \TopClient();
    $c->appkey = '23573771';  
    $c->secretKey = 'e5582f17ba7f60e0c430da54551aac01';
    $req = new \AlibabaAliqinFcSmsNumSendRequest();
    $req->setSmsType( "normal" );
    $req->setSmsFreeSignName( "联保云" );
    $req->setSmsParam( "{code:'{$content}',product:'联保云'}" );
    $req->setRecNum( $to );//手机号码
    $req->setSmsTemplateCode( "SMS_35055151" );// 联保云注册模板id
    $resp = $c->execute($req);
    if($resp->result->success) {
        $model                     = M('messagelog');
        $data['message_type']      = $type;
        switch($type) {
            case 1:
                $data['message_content']   = '注册验证码';
                break;
            case 2:
                $data['message_content']   = '找回密码验证码';
                break;
            case 3:
                $data['message_content']   = '修改密码验证码';
                break;
            default:
                break;
        }
        $data['mobile']                 = $to;
        $data['verification_code'] = $content;
        $data['createdonutc']     = date('Y-m-d H:i:s',time());
        //$data['template_id']       = $tempId;
        if($model->create($data)){
            $id    = $model->add($data);
            return true;
        }else{
            $model->error('验证码入库失败！');
            return false;
        }
    }
}


/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 * @return integer
 */
function is_login(){
    $user = session('user');
    if (empty($user)) {
        return false;
    } else {
        if(session('expiretime')){
            if(session('expiretime') < time()){
                // 过期处理
                session('[destroy]');
                return false;
            }else{
                // 未过期处理
                $expiretime = time() + 1800; // 刷新时间戳
                session('expiretime',$expiretime);
            }
        }
        return $user['id'];
    }
}


 
/**
 * 去除字符串中所有空格
 * @param char $str 要被处理的字符串
 * @return mixed
 */
function trimall($str){
    $qian=array(" ","　","\t","\n","\r");
    $hou=array("","","","","");
    return str_replace($qian,$hou,$str);
}


/**
 * 生成唯一的id
 * @return mixed
 */
function user_uniqid() {
    $str = md5(uniqid(mt_rand(), true));
    return $str;
}

 