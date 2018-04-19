<meta charset="UTF-8">
<div id="tu">
<?php
             $img="";
             if(isset($_POST['sex'])){
                 
             
            
             $img = "./upload/".$_FILES['filee']['name'];
             move_uploaded_file($_FILES['filee']['tmp_name'], $img);
             echo "<div id='img'>". "<img src='$img'>"."</div>";
            if (isset($_POST['sex'])){
            if($_POST['sex']==1){
            $t="帅哥";}
            else{
           $t="美女";}
            }
 
 require_once 'PHPAge.php';
 header("Content-Type:text/html;charset=utf-8;");

 $age=new Age($img);
 $result=$age->age();
 $jsonarr=json_decode($result,true);
 if($jsonarr['errno']==0){
        echo  "<div id='zi'>"."<h1>";
        foreach($jsonarr['age'] as $k=>$v){
        echo "阿里云AI推算此"."$t"."<br/> "."年龄：".$v."岁";
	} }
             echo  "</h1>"."</div>";
             
        }
?>
    
</div>

<div id="bbb">
<div id="biao">
     <form  action="" method="post"enctype="multipart/form-data">
             性别:<input type="radio" name="sex" value="1"/>男<input type="radio" name = "sex" value="0"/>女<br/>
             照片:<input type="file"name="filee"><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="识别"/>
         </form>
</div>
<div id="byy"><h2>技术由：新力团队 LOVELYZ提供&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></div>
</div>
<div id="a">  阿里云AI 人脸识别技术应用</div>
<style> 
#byy{color:pink;float:right;position:relative;top:90px;} 
body{background:#FFFFF0;}
#tu{ border: 5px solid #FFFAFA;height:520px;}
#img{ width:400px; height:520px;float: left;padding-left: 50px;}
img{width:100%; height:100%;border: 3px hidden red;border-radius: 36px;}
#zi{ width:440px;height:520px;color:red;text-align:center;border: 4px hidden red;border-radius: 36px;background: #FFFAF0; float:right;margin-right: 50px;}
h1{margin-top: 220px;font-weight:bold;color:orange;
   text-shadow:0 0 1px currentColor,-1px -1px 1px #030,0 -1px 1px #030,1px -1px 1px #030,1px 0 1px #030,1px 1px 1px #030,0 1px 1px #030,-1px 1px 1px #030,-1px 0 1px #030}
#bbb{border: 5px solid #FFFAFA;height:140px;}
#biao{position: relative;left: 580px;width:240px; height:130px;background:#FFFAF0;display:inline-block;}
#a{height: 40px;font-size: 40px;color: red;text-align:center; line-height: 40px;
position: relative;top: -450px;}

</style> 



