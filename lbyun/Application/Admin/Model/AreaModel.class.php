<?php
/**
 * Created by PhpStorm.
 * User: cd cddong@163.com
 * Date: 2017/6/10
 * Time: 10:23
 */
namespace Admin\Model;
use Think\Model;
class AreaModel extends Model{

    /**
     * @var array|mixed 查询出来的全部数据
     */
    protected $items = array();

    /**
     * @var string  数据库表名
     */
    protected $tableName = 'sys_area';

    /**
     * 继承父类方法 , 查询出数据
     */
    public function __construct(){
        parent::__construct();
        $this->items = $this->field ('id,name,parent_id,parent_ids,remarks,code,type')->select();
    }

    /**
     * @param int $parent_id  父类id
     * @return array    分类好的数据
     */
    public function getTree($parent_id = 1){
        $tree = array();
        foreach($this->items as $c){
            if($c['parent_id'] == $parent_id){

                $tree[] = $c;
                $tree = array_merge($tree,$this->getTree($c['id']));
            }
        }
        return $tree;
    }

    /**
     * @param $id   数据id
     * @return array    带上层name的一条数据
     */
    public function getOne($id){
        $info = $this->field ('id,name,parent_id,remarks,code,type')->find($id);
        $parent_id = $info['parent_id'];
        $parent_name = $this->field ('name as parent_name')->where("id=$parent_id")->find();
        $data = array_merge($info,$parent_name);
        return $data;
    }

}