<?php
session_start();
date_default_timezone_set("Asia/Taipei");

class DB{
    private $dsn="mysql:host=localhost;charset=utf8;dbname=db11";
    private $root='root';
    private $password='';
    private $table;
    private $pdo;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->root,$this->password);
    }

    public function all(...$arg){
        $sql="select * from $this->table ";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach ($arg[0] as $key => $value) {
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql=$sql." where ".implode("&&",$tmp);
            }else{
                $sql=$sql.$arg[0];
            }
            if(isset($arg[1])){
                $sql=$sql.$arg[1];
            }
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetchAll();
    }

    public function count(...$arg){
        $sql="select count(*) from $this->table ";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach ($arg[0] as $key => $value) {
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql=$sql." where ".implode("&&",$tmp);
            }else{
                $sql=$sql.$arg[0];
            }
            if(isset($arg[1])){
                $sql=$sql.$arg[1];
            }
        }
        //echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    public function find($id){
        $sql="select * from $this->table ";

            if(is_array($id)){
                foreach ($id as $key => $value) {
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql=$sql." where ".implode("&&",$tmp);
            }else{
                $sql=$sql." where `id`='$id'";
            }

        //echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function del($id){
        $sql="delete from $this->table ";

            if(is_array($id)){
                foreach ($id as $key => $value) {
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql=$sql." where ".implode("&&",$tmp);
            }else{
                $sql=$sql." where `id`='$id'";
            }

        //echo $sql;
        return $this->pdo->exec($sql);
    }

    public function save($array){

            if(isset($array['id'])){
                foreach ($array as $key => $value) {
                    if($key!='id'){
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }
                $sql="update $this->table set".implode(',',$tmp)." where `id`= '{$array['id']}'";
            }else{
                $sql="insert into $this->table 
                (`".implode("`,`",array_keys($array))."`) values
                ('".implode("','",$array)."')";
            }

        //echo $sql;
        return $this->pdo->exec($sql);
    }
}

$Title=new DB("title");
$Ad=new DB("ad");
$Mvim=new DB("mvim");
$Image=new DB("image");
$Total=new DB("total");
$Bottom=new DB("bottom");
$News=new DB("news");
$Admin=new DB("admin");
$Menu=new DB("menu");

if(!isset($_SESSION['total'])){
    $total=$Total->find(1);
    $total['total']++;
    $Total->save($total);
    $_SESSION['total']=1;
}

function to($url){
    header("location:".$url);
}

