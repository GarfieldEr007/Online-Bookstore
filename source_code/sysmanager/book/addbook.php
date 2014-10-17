
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Content-Language" content="zh-cn">
<link rel="stylesheet" href="../../image/register.css" type="text/css">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>添加书目</title>
</head>

<body topmargin="0" leftmargin="0">
<div align="center"><BR>
</div>
<form action=insert.php method=post>
<div align="center">
    <center>
      <table border="1" cellpadding="0" cellspacing="0" width="450" height="320" bordercolor="#000000" bordercolorlight="#000000" bordercolordark="#FFFFFF">
        <tr>
          <td width="446" height="17" valign="bottom" background="../images/t-bg1.gif">
            <p align="center">=== 添加书目 ===</td>                 
        </tr>
        <tr>
          
        <td valign="top" bgcolor="#fffff4" width="446"> 
          <p align="center"><br>
            书 名:<input type="text" name="title" size="37" maxLength=25> 
           <p align="center">
            作 者:<input type="text" name="author" size="37" maxLength=25>
            <p align="center">
            价 格:<input type="float" name="price" size="37" maxLength=25>
            <p align="center">
            出版社:<input type="text" name="press" size="37" maxLength=25>
            <p align="center">
            图 片:<input type="text" name="image" size="37" maxLength=25>
            <p align="center">
            销 量:<input type="int" name="count" size="37" maxLength=25>
            <p align="center">
            分 类:<input type="text" name="clacify" size="37" maxLength=25>
            
          <p align="center">简 介:<br>                
            <textarea rows="17" name="profile" cols="52" ></textarea>
             <p align="center"> 
            <input name="submit" type="submit" style="position: relative; height: 20;" value="添 加">
            <br>
            <br>
        </td>
        </tr>
      </table>
    </center>
  </div>
</body>

</html>

