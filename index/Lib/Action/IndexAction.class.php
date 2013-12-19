<?php
class IndexAction extends Action {
    public function index(){
        if(strpos($_SERVER["HTTP_USER_AGENT"], 'Windows Phone')){
            $this -> assign('de_css', 'common_wp.css');
        }else{
            $this -> assign('de_css', 'common.css');
        }
        $gift = R('Gift/allGift', '', 'Widget');
        $this -> assign('gift', $gift);
        $this -> display();
    }

    public function check(){
        $gift = M('Gifts');
        $id = $gift -> add(array('gifts' => json_encode($_POST['checkgift'])));
        redirect(__ROOT__ . '/index/result/id/' . $id);
    }

    public function result(){
        $gift = M('Gifts');
        $arr = json_decode($gift -> where(array('id' => $this -> _get('id', 'intval'))) -> getField('gifts'));
        $result = R('Gift/getGift', array($arr), 'Widget');
        $this -> assign('result', $result);
        if(!empty($_SERVER['HTTP_REFERER'])){
            $this -> display('result');
        }else{
            $this -> display('result2');
        }

    }

}