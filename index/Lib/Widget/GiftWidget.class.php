<?php
class GiftWidget extends Action {

    private  $gifts = array(

        1 => array(
            'title' => 'Camera 360',
            'content' => '简单智能的拍摄体验，祝你',
            'label' => '笑口常开',
            'icon'  => '1.png',
        ),

        2 => array(
            'title' => '1520 6英寸大屏',
            'content' => '更大的屏幕尺寸，更广阔的视野，祝你',
            'label' => '一览众山',
            'icon' => '2.png',
        ),

        3 => array(
            'title' => 'Office中心',
            'content' => '移动办公，强大高效，出色体验，',
            'label' => '大展宏图',
            'icon' => '3.png',
        ),

        4 => array(
            'title' => '房间',
            'content' => '更智能的组群分类和动态分享，祝你和朋友家人',
            'label' => '欢聚一堂',
            'icon' => '4.png',
        ),

        5 => array(
            'title' => '微信',
            'content' => '天马行空的朋友圈，祝你',
            'label' => '广结益友',
            'icon' => '5.png',
        ),

        6 => array(
            'title' => 'SkyDrive',
            'content' => '照片、视频、办公软件随身携带不离手，祝你',
            'label' => '乐享生活',
            'icon' => '6.png',
        ),

        7 => array(
            'title' => '必应资讯',
            'content' => '想看新闻，有求必应，足不出户，',
            'label' => '纵横四海',
            'icon' => '7.png',
        ),

        8 => array(
            'title' => '人脉中心',
            'content' => '智能通讯录，好友动态实时更新，让你轻轻松松',
            'label' => '结缘四海',
            'icon' => '8.png',
        ),

        9 => array(
            'title' => '动态应用',
            'content' => '应用活灵活现，界面一目了然，祝你',
            'label' => '得如所愿',
            'icon' => '9.png',
        ),

        10 => array(
            'title' => '必应健康',
            'content' => '每时每刻的养生资讯，祝你',
            'label' => '身体健康',
            'icon' => '10.png',
        ),

        11 => array(
            'title' => '美图秀秀',
            'content' => '全方位的图片美化，随心所欲的个性拼图，祝你',
            'label' => '青春永驻',
            'icon' => '11.png',
        ),

        12 => array(
            'title' => '爱奇艺视频',
            'content' => '你随身的电视遥控器，实现手机与电视内容的同步，祝你',
            'label' => '大开眼界',
            'icon' => '12.png',
        ),

        13 => array(
            'title' => '动态磁贴',
            'content' => '编辑专属你的个性界面，随心所欲，',
            'label' => '游刃有余',
            'icon' => '13.png',
        ),

        14 => array(
            'title' => '贴纸天气',
            'content' => '最有爱的天气加上最有爱的你，贴心伴你',
            'label' => '日行千里',
            'icon' => '14.png',
        ),

        15 => array(
            'title' => 'Here地图',
            'content' => '覆盖95个国家和地区的离线地图，祝你',
            'label' => '四通八达',
            'icon' => '15.png',
        ),

        16 => array(
            'title' => '必应财经',
            'content' => '宅在家里也能当商界精英，祝你',
            'label' => '财源广进',
            'icon' => '16.png',
        ),


    );

    public function allGift(){
        return $this -> gifts;
    }

    public function getGift($arr){
        $reutn_arr = array();
        foreach($arr as $value){
            $reutn_arr[] = $this -> gifts[$value];
        }
        return $reutn_arr;
    }
}