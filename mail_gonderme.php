<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
<style>
    .InputAlani{
        width:  %100;
        height: 15px;
        margin: 0;
        padding: 5px 10px 5px 10px;
    }
    .TextareaAlani{
        width:  %100;
        height: 100px;
        margin: 0;
        padding: 5px 10px 5px 10px;
    }
    .GonderButonu{
        height: 25px;
        margin: 0;
        padding: 5px 30px 5px 30px;
        border: solid 1px #00FF00;
        background: #009900;
        color: #FFFFFF;
    }
    .GonderButonu:hover{
        border: solid 1px #000000;
        background: #00FF00;
        color: #000000;
        cursor: pointer;
    }

</style>
</head>
<body>
    <form action="local_sonuc.php" method="post">
        <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="120" height="30">Adınız Soyadınız </td>
                <td width="10" height="30">:</td>
                <td width="330" height="30"><input class="InputAlani" type="text" name="adisoyadi"></td>
            </tr>
            <tr>
                <td width="120" height="30">Telefon Numaranız </td>
                <td width="10" height="30">:</td>
                <td width="330" height="30"><input class="InputAlani" type="text" name="telefon"></td>
            </tr>
            <tr>
                <td width="120" height="30">E-Mail Adresiniz</td>
                <td width="10" height="30">:</td>
                <td width="330" height="30"><input class="InputAlani" type="email" name="email"></td>
            </tr>

            <tr>
                <td width="120" height="30">Konu </td>
                <td width="10" height="30">:</td>
                <td width="330" height="30"><input class="InputAlani" type="text" name="konu"></td>
            </tr>
            <tr>
                <td width="120" height="30" valign="top">Mesajınız </td>
                <td width="10" height="30" valign="top">:</td>
                <td width="330" height="30"><textarea class="TextareaAlani" name="mesaj"></textarea></td>
            </tr>
            <tr>
                <td width="120" height="30">&nbsp</td>
                <td width="10" height="30">&nbsp</td>
                <td width="330" height="30"><input class="GonderButonu" type="submit" value="Gönder"></td>
            </tr>
        </table>
    </form>
</body>
</html>