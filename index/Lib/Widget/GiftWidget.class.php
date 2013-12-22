<?php
class GiftWidget extends Action {

    private  $gifts = array(

        1 => array(
            'title' => 'Camera 360',
            'content' => 'Camera 360，简单智能的拍摄体验，祝你',
            'label' => '笑口常开',
            'icon'  => '1.png',
        ),

        2 => array(
            'title' => '1520 6英寸大屏',
            'content' => '更大的屏幕尺寸，更炫的视觉享受，祝你',
            'label' => '大有作为',
            'icon' => '2.png',
        ),

        3 => array(
            'title' => 'Office中心',
            'content' => '内置Office, 轻松实现移动办公，让你',
            'label' => '大展宏图',
            'icon' => '3.png',
        ),

        4 => array(
            'title' => '房间',
            'content' => '在”房间”跟不同人群分享照片、日程，祝你和亲朋',
            'label' => '欢聚一堂',
            'icon' => '4.png',
        ),

        5 => array(
            'title' => '微信',
            'content' => '微信天马行空的朋友圈，祝你',
            'label' => '广结益友',
            'icon' => '5.png',
        ),

        6 => array(
            'title' => 'SkyDrive',
            'content' => 'SkyDrive，让照片、办公软件随你一起走，祝你',
            'label' => '乐享生活',
            'icon' => '6.png',
        ),

        7 => array(
            'title' => '必应资讯',
            'content' => '想看新闻，有求必应，必应咨询让你足不出户，也能',
            'label' => '纵横四海',
            'icon' => '7.png',
        ),

        8 => array(
            'title' => '人脉中心',
            'content' => '人脉，实时更新好友动态，让你轻轻松松',
            'label' => '结缘四海',
            'icon' => '8.png',
        ),

        9 => array(
            'title' => '动态应用',
            'content' => '动态应用，让你关注的信息在界面上一目了然，祝你',
            'label' => '运筹帷幄',
            'icon' => '9.png',
        ),

        10 => array(
            'title' => '必应健康',
            'content' => '必应健康，每时每刻的养生资讯，祝你',
            'label' => '身体健康',
            'icon' => '10.png',
        ),

        11 => array(
            'title' => '美图秀秀',
            'content' => '美图秀秀，全方位图片美化，随心所欲个性拼图祝你',
            'label' => '青春永驻',
            'icon' => '11.png',
        ),

        12 => array(
            'title' => '爱奇艺视频',
            'content' => '爱奇艺视频，持续快速更新热门电影电视剧，让你',
            'label' => '大开眼界',
            'icon' => '12.png',
        ),

        13 => array(
            'title' => '动态磁贴',
            'content' => '唯一拥有动态磁贴的手机，个性定制界面，让你',
            'label' => '与众不同',
            'icon' => '13.png',
        ),

        14 => array(
            'title' => '贴纸天气',
            'content' => '贴纸天气，随时随地贴心提示雨雪阴晴，祝你',
            'label' => '美丽动人',
            'icon' => '14.png',
        ),

        15 => array(
            'title' => 'Here地图',
            'content' => 'Here地图，拥有覆盖95个国家和地区的离线地图，祝你',
            'label' => '四通八达',
            'icon' => '15.png',
        ),

        16 => array(
            'title' => '必应财经',
            'content' => '必应财经，让你宅在家里也能当商界精英，祝你',
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