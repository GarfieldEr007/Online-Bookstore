<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0017)http://localhost/ -->
<HTML><HEAD><TITLE>��ӣ��ǻ�ӭ����</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312"><LINK 
href="work/��¼/2002.4.23/work/��վ/style.css" rel=stylesheet>
<SCRIPT language=JavaScript>
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</SCRIPT>

<STYLE>TD {
	FONT-SIZE: 9pt; COLOR: #282828; LINE-HEIGHT: 16px; FONT-FAMILY: ����
}
</STYLE>

<SCRIPT language=javascript src="image/java_function.js"></SCRIPT>

<META content="MSHTML 6.00.2900.2873" name=GENERATOR></HEAD>
<BODY text=#000000 bgColor=#b2b2b2 leftMargin=2 topMargin=0 
onload="MM_preloadImages('image/gouwu02.gif','image/shoucang02.gif','image/kefu02.gif','image/shouyin02.gif')">
<?php 
include "user/userconfirm.php";
?>
<DIV align=center>
<CENTER>
<TABLE cellSpacing=0 cellPadding=0 width=768 border=0>
  <TBODY>
  <TR>
    <TD background=image/ditu.gif>
      <TABLE cellSpacing=0 cellPadding=0 width=744 border=0>
        <TBODY>
        <TR>
          <TD width=157 rowSpan=2><IMG height=98 src="image/logo.gif" 
            width=195></TD>
          <TD colSpan=5 height=62><IMG height=62 src="image/banner.gif" 
            width=611 border=0></TD></TR>
        <TR>
          <TD width=299><IMG height=36 src="image/label1.gif" width=299 
            useMap=#Map border=0></TD>
          <TD width=76><A  href="userindex.php"><IMG height=36 
            src="image/gouwu01.gif" width=76 border=0 
name=Image40></A></TD>
          <TD width=76><A href="user/myorder.php" ><IMG height=36 
            src="image/shoucang01.gif" width=76 border=0 
          name=Image37></A></TD>
          <TD width=76><A  href="userindex.php"><IMG height=36 
            src="image/shouyin01.gif" width=76 border=0 
          name=Image38></A></TD>
          <TD width=84><A 
            href="userindex.php"><IMG height=36 
            src="image/kefu01.gif" width=84 border=0 
        name=Image39></A></TD></TR></TBODY></TABLE></TD></TR></CENTER></TBODY></TABLE>
<CENTER>
<TABLE cellSpacing=0 cellPadding=0 width=741 border=0>
  <TBODY>
  <TR>
    <TD vAlign=top align=left width=192 height=598> 

      <TABLE cellSpacing=0 cellPadding=0 width=173 align=center bgColor=#ffffff 
      border=0>
        <TBODY>
        <TR>
          <TD vAlign=top align=middle width=174 bgColor=#dedede height=222>
          
                        <TABLE cellSpacing=0 cellPadding=0 width=172 border=0>
              <TBODY>
              <TR>
                <TD height=4></TD></TR>
              <TR>
                <TD class="box172 b" background=image/index_pcedu_14.gif 
                height=23>
                  <TABLE height=29 width="88%" border=0>
                    <TBODY>
                    <TR>
                      <TD width="17%">&nbsp;</TD>
                      <TD width="83%"><FONT 
                        color=#ffffff><STRONG>��ӣ��̬</STRONG></FONT></TD></TR></TBODY></TABLE></TD></TR>
             <TR>
                <TD height=4></TD></TR></TBODY></TABLE>
            <TABLE cellSpacing=0 cellPadding=0 width="93%" border=0>
              <TBODY>
              <TR>

                <TD bgColor=#ffffff>
                  <MARQUEE id=board scrollAmount=1 scrollDelay=30 direction=up 
                  height=147>
            <?php
			include "connect.php";
			$rs = $db->query("SELECT count(*) FROM news"); 
			$num = $rs->fetchColumn();
			//var_dump($col);
			$rd = $db->query("SELECT * FROM news"); 
			//$result_arr = $rs->fetchAll(); 
			$idd_arr = $rd->fetchAll();
			for($i=0;$i<$num;$i++)
			{
				//print_r($idd_arr['0']['0']);
 			?>
                  &nbsp; <A href="web/news.php" 
                  target=_blank><FONT color=#ff0000><?php print_r($idd_arr[$i]['1']); ?>&nbsp; <?php print_r($idd_arr[$i]['2']); ?> 
                  </FONT><br><br>
            <?php
			}
		  ?>
                  </FONT></A>
                  
                  </MARQUEE></TD>
                  
                  </TR></TBODY></TABLE>
          
            <TABLE cellSpacing=0 cellPadding=0 width=172 border=0>
              <TBODY>
              <TR>
                <TD height=4></TD></TR>
              <TR>
                <TD class="box172 b" background=image/index_pcedu_14.gif 
                height=23>
                  <TABLE height=29 width="88%" border=0>
                    <TBODY>
                    <TR>
                      <TD width="17%">&nbsp;</TD>
                      <TD width="83%"><FONT 
                        color=#ffffff><STRONG>��Ŀ����</STRONG></FONT></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD height=4></TD></TR></TBODY></TABLE>
            <TABLE cellSpacing=1 cellPadding=0 width=164 bgColor=#c6c6c6 
            border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=middle bgColor=#ffffff height=79>
                  <TABLE cellSpacing=0 cellPadding=3 width=160 align=center 
                  border=0>
                    <FORM name=Searching action=SearchResult.asp method=post>
                    <TBODY>
                    <TR align=middle>
                      <TD height=40><FONT size=2><B>���:</B></FONT> </TD>
                      <TD><SELECT size=1 name=D> <OPTION value=������� 
                          selected>--�������-</OPTION> <OPTION 
                           selected>--�������-</OPTION> <OPTION 
                          value=��ƪ����>���ﴫ��</OPTION> <OPTION 
                          value=����ѧϰ>���Լ���</OPTION> <OPTION 
                          value=����ѧϰ>Ӣ��ѧϰ</OPTION> <OPTION 
                          value=��������>��������</OPTION> </SELECT  ></TD></TR>
                    <TR align=middle>
                      <TD style="LINE-HEIGHT: 20px" height=40>
                        <DIV align=center><FONT size=2><B>�ִ�:</B></FONT></DIV></TD>
                      <TD><INPUT size=12 name=StrL> </TD></TR>
                    <TR align=middle>
                      <TD colSpan=2 height=40>
                        <DIV align=center><A style="CURSOR: hand" 
                        onclick="&#13;&#10;                    &#9;if (Searching.StrL.value == '')&#13;&#10;                    &#9;&#9;{&#13;&#10;                    &#9;&#9;&#9;alert('��������д��ѯ������!')&#13;&#10;                    &#9;&#9;}&#13;&#10;                    &#9;else&#13;&#10;                    &#9;&#9;{&#13;&#10;                    &#9;&#9;&#9;Searching.submit()&#13;&#10;                    &#9;&#9;}&#13;&#10;                    &#9;" 
                        href=""><IMG height=19 hspace=5 
                        src="image/2005_soft_14.gif" width=50 vspace=2 
                        border=0 name=image32></A> </DIV></TD></TR>
                    <TBODY></FORM></TBODY></TABLE></TD></TR></TBODY></TABLE>

			<TABLE cellSpacing=0 cellPadding=0 width=172 border=0>
              <TBODY>
              <TR>
                <TD height=4></TD></TR>
              <TR>
                <TD class="box172 b" background=image/index_pcedu_14.gif 
                height=23>
                  <TABLE height=22 width="88%" border=0>
                    <TBODY>
                    <TR>
                      <TD width="17%">&nbsp;</TD>
                      <TD width="83%"><FONT 
                        color=#ffffff><STRONG>��Ա����</STRONG>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="user/exit.php"><font color="#FF0000">ע��</font></a></strong></FONT></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD height=4></TD></TR></TBODY></TABLE>
            <TABLE cellSpacing=1 cellPadding=0 width=164 bgColor=#c6c6c6 
            border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=middle bgColor=#f0f5f9>
                <br>
                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD style="LINE-HEIGHT: 20px"><FONT 
                        color=#ff9900>��</FONT><FONT color=#0000ff size=2><a
                              href="user/my.php">�ҵ����</A></FONT>
                         </TD>
                      <TD style="LINE-HEIGHT: 20px"><FONT 
                        color=#ff9900>��</FONT><FONT color=#0000ff size=2><a
                              href="user/myorder.php">�ҵĶ���</A></FONT>
                         </TD>
                         </TR></TBODY></TABLE>
                         <br>
                  <TABLE cellSpacing=0 cellPadding=0 width="97%" border=0>
                    <TBODY></TBODY></TABLE></TD></TR></TBODY></TABLE>


                  <TABLE cellSpacing=0 cellPadding=0 width=172 border=0>
                    <TBODY>
                    <TR>
                      <TD height=4></TD></TR>
                    <TR>
                      <TD class="box172 b" 
                      background=image/index_pcedu_14.gif height=23>
                        <TABLE height=29 width="88%" border=0>
                          <TBODY>
                          <TR>
                            <TD width="17%">&nbsp;</TD>
                            <TD width="83%"><FONT 
                              color=#ffffff><STRONG>����ר��</STRONG></FONT></TD></TR></TBODY></TABLE></TD></TR>
                    <TR>
                      <TD height=4></TD></TR></TBODY></TABLE>
                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD class=time style="LINE-HEIGHT: 20px"><FONT 
                        color=#0000ff size=2>��<A 
                      href="">����ר��</A></FONT><BR></TD>
                      <TD class=time style="LINE-HEIGHT: 20px"><FONT 
                        color=#0000ff size=2>��<A 
                      href="">����ר��</A></FONT><BR></TD></TR></TBODY></TABLE>
                      <br>
                     <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD class=time style="LINE-HEIGHT: 20px"><FONT 
                        color=#0000ff size=2>��<A 
                      href="">�ļ�ר��</A></FONT><BR></TD>
                      <TD class=time style="LINE-HEIGHT: 20px"><FONT 
                        color=#0000ff size=2>��<A 
                      href="">����ר��</A></FONT><BR>
                      </TD>
                      </TR>
                      <DIV align=center><A href="http://localhost/diaocha.htm"><IMG 
                  src="image/3.gif" 
            		border=0></A></DIV><br>
                      </TBODY></TABLE>
                      <br>
                  
            <TABLE cellSpacing=0 cellPadding=0 width=172 border=0>
              <TBODY>
              <TR>
                <TD height=4></TD></TR>
              <TR>
                <TD class="box172 b" background=image/index_pcedu_14.gif 
                height=23>
                  <TABLE height=29 width="88%" border=0>
                    <TBODY>
                    <TR>
                      <TD width="17%">&nbsp;</TD>
                      <TD width="83%"><FONT 
                      color=#ffffff><STRONG>��������</STRONG></FONT></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD height=4></TD></TR></TBODY></TABLE>
            <TABLE cellSpacing=0 cellPadding=0 width="93%" border=0>
              <TBODY>
              <TR>
                <TD class=time style="LINE-HEIGHT: 20px" 
                  bgColor=#ffffff>&nbsp; �����������塷<BR>&nbsp; �����顶���ɴ���<BR>&nbsp; 
                  ����������MP3<BR>&nbsp; ���¸���Office����һ�̳�<BR>&nbsp; 
                  ���¸���Photoshop 6�̳�<BR>&nbsp; ���¸���Flash�̳�<BR>&nbsp; ���¸���Flash�̳�<BR><BR>&nbsp; <font color="#0000FF">������Ʒ�������ڴ�</font> 
                  <br>
              </TD></TR></TBODY></TABLE>
              
               <TABLE cellSpacing=0 cellPadding=0 width=172 border=0>
              <TBODY>
              <TR>
                <TD height=4></TD></TR>
              <TR>
                <TD class="box172 b" background=image/index_pcedu_14.gif 
                height=23>
                  <TABLE height=19 width="88%" border=0>
                    <TBODY>
                    <TR>
                      <TD width="17%">&nbsp;</TD>
                      <TD width="83%"><FONT 
                        color=#ffffff><STRONG>��������</STRONG></FONT></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD height=4></TD></TR></TBODY></TABLE>
            <TABLE cellSpacing=1 cellPadding=0 width=164 bgColor=#c6c6c6 
            border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=middle bgColor=#f0f5f9>
                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD style="LINE-HEIGHT: 20px"><FONT 
                        color=#ff9900>��</FONT><FONT color=#0000ff size=2><a
                              href="sysmanager/notes/addnotes.php">��������</A></FONT><br><br><br><br>
                         </TD></TR></TBODY></TABLE>
                  <TABLE cellSpacing=0 cellPadding=0 width="97%" border=0>
                    <TBODY></TBODY></TABLE></TD></TR></TBODY></TABLE>

            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY></TBODY></TABLE></TD>
          <TD width=10>&nbsp;</TD></TR></TBODY></TABLE></TD>
    <TD vAlign=top align=left width=550 height=598>
      <TABLE cellSpacing=0 cellPadding=0 width="82%" bgColor=#ffffff 
      background="" border=0 height="923">
        <TBODY>
        <TR>
          <TD vAlign=top height=13>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#ffffff 
            border=0>
              <TBODY>
              <TR>
                <TD vAlign=bottom width="39%"><IMG height=48 
                  src="image/kind06.gif" width=232></TD>
                <TD vAlign=bottom align=left width="61%"><IMG height=15 
                  src="image/kind06-1.gif" 
          width=341></TD></TR></TBODY></TABLE></TD></TR>

        <TR>
          <TD vAlign=top height=139>
          <?php
			include "connect.php";
			$rs = $db->query("SELECT count(*) FROM bookitem"); 
			$num = $rs->fetchColumn();
			//var_dump($col);
			$rd = $db->query("SELECT * FROM bookitem"); 
			//$result_arr = $rs->fetchAll(); 
			$idd_arr = $rd->fetchAll();
			for($i=0;$i<$num;$i++)
			{
				//print_r($idd_arr['0']['0']);
 		  ?>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
              
                <TD>
                  <TABLE width="55%" border=0>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="16%" rowSpan=4><A href="web/detail.php?bid1=<?php print_r($idd_arr[$i]['0']); ?>"><IMG style="CURSOR: hand" height=90 alt=��ϸ���� 
                        src="picture/<?php print_r($idd_arr[$i]['5']); ?>" width=70></A><A href="web/detail.php"></A></TD>
                      <TD width="84%"><FONT color=#990000 size=2><B><FONT 
                        color=#000066><?php print_r($idd_arr[$i]['1']); ?></FONT></B></FONT></TD></TR>
                    <TR>
                      <TD width="84%"><FONT color=#660000 
                        size=2><U>ԭʼ�۸�:</U></FONT><FONT size=2><U><FONT 
                        color=#660000><STRIKE><?php print_r($idd_arr[$i]['3']); ?></STRIKE></FONT></U></FONT><FONT 
                        color=#660000 size=2><U>Ԫ ��Ա�۸�:</U></FONT><FONT 
                        size=2><U><FONT color=#660000><?php $p=$idd_arr[$i]['3']-10;print_r($p); ?></FONT></U></FONT><FONT 
                        color=#660000 size=2><U>Ԫ</U></FONT></TD></TR>
                    <TR>
                      <TD width="84%"><BR><FONT 
                    size=2>վ�ڲ�����Ϣ��վ�ڲ�����Ϣ��</FONT></TD></TR>
                    <TR>
                      <TD width="84%">
                        <P align=center><FONT size=2><A style="CURSOR: hand" 
                        href="web/detail.php?bid1=<?php print_r($idd_arr[$i]['0']); ?>"><FONT color=#0000ff>��ϸ����</FONT></A> <FONT 
                        color=#0000ff><a href="user/userbuy.php?bid=<?php print_r($idd_arr[$i]['0']); ?>"><IMG src="image/cart.gif" 
                        border=0>����</A></FONT> <FONT color=#0000ff><A 
                        style="CURSOR: hand" 
                        href="userindex.php"><IMG src="image/favor.gif" 
                        border=0>�ղ�</A></FONT></FONT></P></TD></TR>
                    <TR>
                      <TD width="16%">
                        <CENTER></CENTER>
                    <TR>
                      <TD colSpan=2><IMG height=10 src="image/line.gif" 
                        width=280></TD></TR></TBODY></TABLE></TD>
                        
                <TD>
                  <TABLE width="55%" border=0>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="16%" rowSpan=4><A 
                        href="web/detail.php?bid1=<?php $s=$i+1;print_r($idd_arr[$s]['0']); ?>"><IMG style="CURSOR: hand" height=90 alt=��ϸ���� 
                        src="picture/<?php $s=$i+1;print_r($idd_arr[$s]['5']); ?>" width=70></A><A 
                        href="web/detail.php"></A></TD>
                      <TD width="84%"><FONT color=#660000 size=2><B><FONT 
                        color=#000066><?php $s=$i+1;print_r($idd_arr[$s]['1']); ?></FONT></B></FONT></TD></TR>
                    <TR>
                      <TD width="84%"><FONT color=#660000 
                        size=2><U>ԭʼ�۸�:</U></FONT><FONT size=2><U><FONT 
                        color=#660000><STRIKE><?php $s=$i+1;print_r($idd_arr[$s]['3']); ?></STRIKE></FONT></U></FONT><FONT 
                        color=#660000 size=2><U>Ԫ ��Ա�۸�:</U></FONT><FONT 
                        size=2><U><FONT color=#660000><?php $s=$i+1;$p=$idd_arr[$s]['3']-10;print_r($p); ?></FONT></U></FONT><FONT 
                        color=#660000 size=2><U>Ԫ</U></FONT></TD></TR>
                    <TR>
                      <TD width="84%"><BR><FONT 
                    size=2>վ�ڲ�����Ϣ��վ�ڲ�����Ϣ��</FONT></TD></TR>
                    <TR>
                      <TD width="84%">
                        <P align=center><FONT size=2><A style="CURSOR: hand" 
                        href="web/detail.php?bid1=<?php $s=$i+1;print_r($idd_arr[$s]['0']); ?>"><FONT color=#0000ff>��ϸ����</FONT></A> <FONT 
                        color=#0000ff><a href="user/userbuy.php?bid=<?php $s=$i+1;print_r($idd_arr[$s]['0']); ?>"><IMG src="image/cart.gif" 
                        border=0>����</A></FONT> <FONT color=#0000ff><A 
                        style="CURSOR: hand"  
                        href="userindex.php"><IMG src="image/favor.gif" 
                        border=0>�ղ�</A></FONT></FONT></P></TD></TR>
                    <TR>
                      <TD width="16%">
                        <CENTER></CENTER>
                    <TR>
                      <TD colSpan=2><IMG height=10 src="image/line.gif" 
                        width=280></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
                        <?php
						$i++;
			}
		  ?>

                  </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
                  <tr><td bgcolor="#FFFFFF">
                  <p align="center"><script language="javascript" src="image/copyright.js"></script>
                  </td></tr>
                  </DIV><MAP name=Map><AREA shape=RECT coords=18,1,75,26 
  href="userindex.php"><AREA shape=RECT coords=88,1,145,26 
  href="userindex.php"><AREA shape=RECT coords=225,2,278,25 
  href="company/guanyu.php"><AREA shape=RECT coords=157,2,210,25 
  href="user/my.php">
  </MAP></CENTER></BODY></HTML>
