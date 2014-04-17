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
        if(strpos($_SERVER["HTTP_USER_AGENT"], 'Windows Phone')){
            $this -> assign('de_css', 'common_wp.css');
        }else{
            $this -> assign('de_css', 'common.css');
        }
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

    public function test1(){
        $this -> display();
    }

    public function checktest(){
        $arr = array(
            1 => '真心话1',
            2 => '真心话2',
            3 => '真心话3',
            4 => '真心话4',
            5 => '大冒险1',
            6 => '大冒险2',
            7 => '大冒险3',
            8 => '大冒险4',
        );

        $this -> assign('re', $arr[$_GET['id']]);
        if(!empty($_SERVER['HTTP_REFERER'])){
            $this -> assign('type', 'go');
        }else{
            $this -> assign('type', 'goback');
        }
        $this -> display();
    }

}