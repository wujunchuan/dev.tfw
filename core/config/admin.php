<?php
return array(
  'WEBSITE_NAME'    =>    '特房网后台管理系统',
  'PAGES'   =>    '25',
  'LIMIT'   =>    '10',
  // 户型
  'HTYPE'   =>  array(
      '0'   =>  '一室',
      '1'   =>  '二室',
      '2'   =>  '三室',
      '3'   =>  '四室',
      '4'   =>  '五室及以上'
  ),
  // 产权类型
  'PRTYPE'  =>  array(
      '0'   =>  '回迁房',
      '1'   =>  '军产房',
      '2'   =>  '法拍房',
      '3'   =>  '福利房',
      '4'   =>  '小产权房',
      '5'   =>  '其他'
  ),
  // 房屋类型
  'HOUSE_TYPE'  =>  array(
      '0'   =>  '期房',
      '1'   =>  '代售',
      '2'   =>  '现房',
      '3'   =>  '尾盘',
      '4'   =>  '其他'
  ),
  // 物业类型
  'PTYPE'   =>  array(
      '0'   =>  '普通住宅',
      '1'   =>  '公寓',
      '2'   =>  '花园式洋房',
      '3'   =>  '酒店式公寓',
      '4'   =>  '商住两用',
      '5'   =>  '别野',
      '6'   =>  '写字楼',
      '7'   =>  '商铺',
      '8'   =>  '其他'
  ),
  // 房屋朝向
  'ORIENTATION'   =>   array(
      '0'   =>  '东',
      '1'   =>  '南',
      '2'   =>  '西',
      '3'   =>  '北',
      '4'   =>  '南北',
      '5'   =>  '东西',
      '6'   =>  '东南',
      '7'   =>  '东北',
      '8'   =>  '西南',
      '9'   =>  '西北'
  ),
  // 价格
  'PRICE'   =>  array(
      '0'   =>  array(
          'show'  =>  '不限',
      ),
      '1'   =>  array(
         'show' =>  '6千以下',
         'start'  =>  '0',
         'end'  =>  '6000',
      ),
      '2'   =>  array(
         'show' =>  '6千-1万',
         'start'  =>  '6000',
         'end'  =>  '10000',
      ),
      '3'   =>  array(
         'show' =>  '1万-1.5万',
         'start'  =>  '10000',
         'end'  =>  '15000',
      ),
      '4'   =>  array(
         'show' =>  '1.5万-2万',
         'start'  =>  '15000',
         'end'  =>  '20000',
      ),
      '5'   =>  array(
         'show' =>  '2万-3万',
         'start'  =>  '20000',
         'end'  =>  '30000',
      ),
      '6'   =>  array(
         'show' =>  '3万-4万',
         'start'  =>  '30000',
         'end'  =>  '40000',
      ),
      '7'   =>  array(
         'show' =>  '4万-6万',
         'start'  =>  '40000',
         'end'  =>  '60000',
      ),
      '8'   =>  array(
         'show' =>  '6万以上',
         'start'  =>  '60000',
         'end'  =>  '100000000',
      )
  ),
  // 售价
  'SELLINGPRICE'   =>  array(
      '0'   =>  array(
          'show'  =>  '不限',
      ),
      '1'   =>  array(
         'show' =>  '50万以下',
         'start'  =>  '0',
         'end'  =>  '500000',
      ),
      '2'   =>  array(
         'show' =>  '50-100万',
         'start'  =>  '500000',
         'end'  =>  '1000000',
      ),
      '3'   =>  array(
         'show' =>  '100-150万',
         'start'  =>  '1000000',
         'end'  =>  '1500000',
      ),
      '4'   =>  array(
         'show' =>  '150-200万',
         'start'  =>  '1500000',
         'end'  =>  '2000000',
      ),
      '5'   =>  array(
         'show' =>  '200-250万',
         'start'  =>  '2000000',
         'end'  =>  '2500000',
      ),
      '6'   =>  array(
         'show' =>  '250万-300万',
         'start'  =>  '2500000',
         'end'  =>  '3000000',
      ),
      '7'   =>  array(
         'show' =>  '300-400万',
         'start'  =>  '3000000',
         'end'  =>  '4000000',
      ),
      '8'   =>  array(
         'show' =>  '400-500万',
         'start'  =>  '4000000',
         'end'  =>  '5000000',
      ),
      '9'   =>  array(
         'show' =>  '500-700万',
         'start'  =>  '5000000',
         'end'  =>  '7000000',
      ),
      '10'   =>  array(
         'show' =>  '700-1000万',
         'start'  =>  '7000000',
         'end'  =>  '10000000',
      ),
      '11'   =>  array(
         'show' =>  '1000-1500万',
         'start'  =>  '10000000',
         'end'  =>  '15000000',
      ),
      '12'   =>  array(
         'show' =>  '1500-2000万',
         'start'  =>  '15000000',
         'end'  =>  '20000000',
      ),
      '13'   =>  array(
         'show' =>  '2000万以上',
         'start'  =>  '20000000',
         'end'  =>  '100000000',
      )
  ),
  // 面积
  'AREA'   =>  array(
      '0'   =>  array(
          'show'  =>  '不限'
      ),
      '1'   =>  array(
         'show' =>  '60㎡以下',
         'start'  =>  '0',
         'end'  =>  '60',
      ),
      '2'   =>  array(
         'show' =>  '60㎡-80㎡',
         'start'  =>  '60',
         'end'  =>  '80',
      ),
      '3'   =>  array(
         'show' =>  '80㎡-100㎡',
         'start'  =>  '80',
         'end'  =>  '100',
      ),
      '4'   =>  array(
         'show' =>  '100㎡-120㎡',
         'start'  =>  '100',
         'end'  =>  '120',
      ),
      '5'   =>  array(
         'show' =>  '120㎡-150㎡',
         'start'  =>  '120',
         'end'  =>  '150',
      ),
      '6'   =>  array(
         'show' =>  '150㎡-200㎡',
         'start'  =>  '150',
         'end'  =>  '200',
      ),
      '7'   =>  array(
         'show' =>  '200㎡以上',
         'start'  =>  '200',
         'end'  =>  '100000000',
      )
  ),
  // 新房筛选条目
  'NHFILTRATE' => array(
      '0' =>  '区域',
      '1' =>  '价格',
      '2' =>  '户型',
      '3' =>  '产权类型',
      '4' =>  '面积',
  ),
  // 新房筛选条目active
  'NHFILTRATEACTIVE' => array(
      '0' =>  true,
      '1' =>  true,
      '2' =>  true,
      '3' =>  true,
      '4' =>  true,
  ),
  // 二手房筛选条目
  'UHFILTRATE' => array(
      '0' =>  '区域',
      '1' =>  '售价',
      '2' =>  '户型',
      '3' =>  '产权类型',
      '4' =>  '面积',
  ),
  // 二手房筛选条目active
  'UHFILTRATEACTIVE' => array(
      '0' =>  true,
      '1' =>  true,
      '2' =>  true,
      '3' =>  true,
      '4' =>  true,
  ),
  // 租房筛选条目
  'RHFILTRATE' => array(
      '0' =>  '区域',
      '1' =>  '价格',
      '2' =>  '户型',
      '3' =>  '类型',
      '4' =>  '装修',
  ),
  // 租房筛选条目active
  'RHFILTRATEACTIVE' => array(
      '0' =>  true,
      '1' =>  true,
      '2' =>  true,
      '3' =>  true,
      '4' =>  true,
  ),
  // 租房价格
  'RHPRICE'  =>  array(
    '0'   =>  array(
        'show'  =>  '不限',
    ),
    '1'   =>  array(
       'show' =>  '500元以下',
       'start'  =>  '0',
       'end'  =>  '500',
    ),
    '2'   =>  array(
       'show' =>  '500-1000元',
       'start'  =>  '500',
       'end'  =>  '1000',
    ),
    '3'   =>  array(
       'show' =>  '1000-1500元',
       'start'  =>  '1000',
       'end'  =>  '1500',
    ),
    '4'   =>  array(
       'show' =>  '1500-2000元',
       'start'  =>  '1500',
       'end'  =>  '2000',
    ),
    '5'   =>  array(
       'show' =>  '2000-2500元',
       'start'  =>  '2000',
       'end'  =>  '2500',
    ),
    '6'   =>  array(
       'show' =>  '2500-3000元',
       'start'  =>  '2500',
       'end'  =>  '3000',
    ),
    '7'   =>  array(
       'show' =>  '3000-4000元',
       'start'  =>  '3000',
       'end'  =>  '4000',
    ),
    '8'   =>  array(
       'show' =>  '4000-8000元',
       'start'  =>  '4000',
       'end'  =>  '8000',
    ),
    '9'   =>  array(
       'show' =>  '8000元以上',
       'start'  =>  '8000',
       'end'  =>  '100000000',
    )
  ),
  // 租房类型
  'RHTYPE' => array(
      '0' =>  '整租',
      '1' =>  '合租'
  ),
  // 租房装修类型
  'RHFINISHINGTYPE' => array(
      '0' =>  '毛坯',
      '1' =>  '简单装修',
      '2' =>  '中等装修',
      '3' =>  '精装修',
      '4' =>  '豪华装修',
      '5' =>  '其他'
  ),


);