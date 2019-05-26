<!doctype html>
<html lang="cn">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"  >
  <script src="/bootstrap/jquery.min.js" ></script>

     <script src="/bootstrap/js/bootstrap.min.js"  ></script>


    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--   <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 -->
    <!-- <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->




    <title>51dr.top!</title>
  </head>

  <body> 



<div class="jumbotron">
  <h1 class="display-4">网站信息</h1>
  <p class="lead">

 <?php
//遍历目录下面的所有文件和目录，2019年2月15日
$str = opendir('./');//指定获取此目录下的文件及文件夹列表
while( ($filename = readdir($str)) !== false ) 
{
	if($filename != "." && $filename != "..")
	{
		//判断是否是文件，文件放在文件列表数组中，子文件夹放在子文件夹列表数组中
		if (is_file($filename)){
			$file_array[]=$filename;
		}else{
			$dir_array[]=$filename;
		}
	}
}
closedir($str);
//以数组形式打印文件夹目录下面的所有文件列表
@print_r($file_array);

//以数组形式打印文件夹目录下面的所有子文件夹列表
@print_r($dir_array);

echo "<hr>";
echo date("Y-m-j H:i:s",time());
echo "<hr>";
  
  foreach($file_array as $a){
  
     echo $a."<br>";
  }


  ?>

  </p>
  <hr class="my-4">
  <p> </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
 