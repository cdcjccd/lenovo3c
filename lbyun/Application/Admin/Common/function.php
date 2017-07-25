<?php
/*
@递归
@便于分类品牌而用

*/
function catgory($data,$uid){
	foreach ($data as $key => $val) {
	     if($val['parent_id']==$uid){
	       $val['child']=catgory($data,$val['brand_id']);
           $list[]=$val;
	     }
	}
	      return $list;
}


function shops($king,$sid){
    foreach ($king as $key => $smp) {
        if($smp['parentid']==$sid){
            $smp['child'] = shops($king,$smp['id']);
            $ping[]=$smp;
        }
    }
    return $ping;
}

