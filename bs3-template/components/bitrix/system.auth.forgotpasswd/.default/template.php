<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>
<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">
	<p>
	<?=GetMessage("AUTH_FORGOT_PASSWORD_1")?>
	</p>
	<p><strong><?=GetMessage("AUTH_GET_CHECK_STRING")?></strong></p>
	<!-- 
	<div class="form-group">
		<label for="qwe">qwe</label>
		<input type="text" class="form-control" id="qwe" placeholder="qwe" name="qwe" maxlength="50" value="qwe">
	</div>
	 -->
	<div class="form-group">
		<label for="userLogin"><?=GetMessage("AUTH_LOGIN")?></label>
		<input type="text" class="form-control" id="userLogin" placeholder="Login" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>">
	</div>
	<?=GetMessage("AUTH_OR")?>
	<div class="form-group">
		<label for="userEmail"><?=GetMessage("AUTH_EMAIL")?></label>
		<input type="text" class="form-control" id="userEmail" placeholder="E-mail" name="USER_EMAIL" maxlength="255" value="">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-default" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
	</div>
	<p>
		<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><?=GetMessage("AUTH_AUTH")?></a>
	</p> 
</form>
<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
