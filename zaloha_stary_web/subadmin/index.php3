<?
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_ENV);

/* tvorba subdomen - zmente si podle potreby promenne $login a $heslo na udaje ktere chcete pouzivat pri prihlaseni */
$login="login";
$heslo="26f24af4";

if (!IsSet($PHP_AUTH_USER)):
	Header("HTTP/1.1 401 Unauthorized");
	Header("WWW-Authenticate: Basic realm=\"Modify Subdomains\"");
	echo "stranky chteji heslo";
	exit;
else:
	if($PHP_AUTH_USER!=$login):
	Header("HTTP/1.1 401 Unauthorized");
	Header("WWW-Authenticate: Basic realm=\"Modify Subdomains\"");
		exit;
	endif;
	if($PHP_AUTH_PW!=$heslo):
	Header("HTTP/1.1 401 Unauthorized");
	Header("WWW-Authenticate: Basic realm=\"Modify Subdomains\"");
		exit;
	endif;
endif;

$domena=".".$SERVER_NAME;

SRand((double)MicroTime()*1e6);
$rfilename="data/";
$radresar= Dir("data/");
$rpolozka=$radresar->Read();
$rpolozka=$radresar->Read();


function zobraz()
{
?>
<html><head><title>- ADMINISTRACE SUBDOMEN -</title></head><body><div align=center>
<h1>- ADMINISTRACE SUBDOMEN -</h1><p>
<font face="Helvetica">
<table align=center border=1>
<tr>
<td align=center bgcolor="#5500ff"><font color="#ffffff"><b>SUBDOMENA</b></font></td>
<td align=center bgcolor="#5500ff"><font color="#ffffff"><b>DOMENA</b></font></td>
<td align=center bgcolor="#5500ff"><font color="#ffffff"><b>&nbsp;&gt;&gt;&gt;&nbsp;</b></font></td>
<td align=center bgcolor="#5500ff"><font color="#ffffff"><b>PRESMEROVANI</b></td>
<td align=center bgcolor="#5500ff"><font color="#ffffff"><b>TITULEK</b></td>
<td align=center bgcolor="#5500ff"><font color="#ffffff"><b>AKCE</b></td></tr>
<?
	global $rfilename,$radresar,$domena;

	while ($rpolozka=$radresar->Read())
	{
		$fp=FOpen($rfilename.$rpolozka, "r");
		$subdomena=$rpolozka;
		$data=FGetS($fp,300);
		list($adresa,$title)=explode("|",$data);
		echo "<tr align=right><td>$subdomena</td>\n";
		echo "<td align=center>$domena</td>\n";
		echo "<td align=center>&nbsp;&gt;&gt;&gt;&nbsp;</td>\n";
		echo "<td align=left>$adresa</td>\n";
		echo "<td align=left>$title</td>\n";
		echo "<td align=center>";
?>
<table border=3><tr>
<td><a href="index.php3?akce=edit&pm=<?echo $subdomena;?>"><b>Edit</b></a></td>
<td><a href="index.php3?akce=delete&pm=<?echo $subdomena;?>"><b>Delete</b></a></td>
</tr></table>
<?
		echo "</td></tr>\n";
		FClose($fp);
	}
?>
</table>
</font></div>
</body></html>
<?
}
function vzaloz()
{
?>
<form action="index.php3" method="get">
<input type="hidden" name="akce" value="new">
<table align=center border=1>
<tr><td align=center colspan=2 bgcolor="#5500ff"><font color="#ffffff"><b>ZALOZENI NOVE SUBDOMENY</b></font></td></tr>
<tr><td bgcolor="#7777ff"><font color="#ffffff"><b>SUBDOMENA</b></font></td>
<td><input type="text" name="sub" maxlength=40></td></tr>
<tr><td bgcolor="#7777ff"><font color="#ffffff"><b>URL</b></font></td>
<td><input type="text" name="url" maxlength=290 value="http://"></td></tr>
<tr><td bgcolor="#7777ff"><font color="#ffffff"><b>TITULEK</b></font></td>
<td><input type="text" name="titulek" maxlength=290 value=""></td></tr>
<tr><td align=center colspan=2 bgcolor="#7777ff"><input type="submit" value="   Zaloz   "></td></tr>
</table>
</form>
<?
}


function editace()
{
?>
<html><head><title>- ADMINISTRACE SUBDOMEN -</title></head><body><div align=center>
<h1>- ADMINISTRACE SUBDOMEN -</h1><p>
<font face="Helvetica">
<?
	global $pm,$rfilename;
	$fp=FOpen($rfilename.$pm, "r+");
	$data=FGetS($fp,300);
	list($adresa,$title)=explode("|",$data);
	FClose($fp);
?>
<form action="index.php3" method="get">
<input type="hidden" name="akce" value="new">
<table align=center border=1>
<tr><td align=center colspan=2 bgcolor="#5500ff"><font color="#ffffff"><b>EDITACE SUBDOMENY</b></font></td></tr>
<tr><td bgcolor="#7777ff"><font color="#ffffff"><b>SUBDOMENA</b></font></td>
<td bgcolor="#dddddd"><input type="hidden" name="sub" value="<? echo $pm;?>"><b><? echo $pm;?></b></td></tr>
<tr><td bgcolor="#7777ff"><font color="#ffffff"><b>URL</b></font></td>
<td><input type="text" name="url" maxlength=290 value="<? echo $adresa; ?>"></td>
</tr>
<tr><td bgcolor="#7777ff"><font color="#ffffff"><b>TITULEK</b></font></td>
<td><input type="text" name="titulek" maxlength=290 value="<? echo $title; ?>"></td>
</tr>
<tr><td align=center colspan=2 bgcolor="#7777ff"><input type="submit" value="   Uprav   "></td></tr>
</table>
</form>
</font></div>
</body></html>
<?
}


function mazani()
{	
	global $pm,$rfilename;
	Unlink($rfilename.$pm);
}

function novy()
{	
	global $sub,$rfilename,$url,$titulek;
	$sub=EReg_Replace("[ ,/*]","",$sub);
	$sub=StrToLower($sub);
	$fs=FOpen($rfilename.$sub,"w");
	FPutS($fs, $url."|".$titulek);
	fclose($fs);
}


function ok()
{
Header("Location: index.php3");
}

switch($akce)
{
	case "edit"	:	editace();break;
	case "delete"	:	mazani();ok();break;
	case "new"	:	novy();ok();break;
	default		:	zobraz();vzaloz();
}

?>