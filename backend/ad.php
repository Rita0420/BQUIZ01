<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="./api/edit_ad.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">動態文字廣告</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
								$rows=$Ad->all('ad');
								foreach($rows as $row):
								?>

                <tr>
                    <td width="68%">
						<input type="text" name="text[]" value="<?=$row['text'];?>" style="width:90%">
					</td>
                    <td width="7%">
                        <input type="checkbox" name="sh[]" id="" value="<?=$row['id'];?>" <?=($row['sh'])==1?"checked":" ";?>>
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="del[]" id="" value="<?=$row['id'];?>">
                    </td>
                </tr>
				<input type="hidden" name="id[]" value="<?=$row['id'];?>">

                <?php
								endforeach;
								?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/ad.php&#39;)" value="新增動態文字廣告">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>