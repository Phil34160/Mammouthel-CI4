<div class="main"><button onclick="window.location.href='http://localhost:8080/Home/index_info_note/<?=$index?>'">Return</button>&emsp;&emsp;<strong>Delete record</strong><br><br><table><form method="post" action="http://localhost:8080/Home/action_delete_notes/<?=$index?>" onsubmit="return confirm('you will delete this recording. Click OK to confirm or you can ignore by clicking Cancel.');">
	
    <tr><td>
    <label for="id" id="placeholder">Note_id:</label></td><td>
    <input type="number" name="id" placeholder="Enter note_id to delete" id="placeholder">
    </td></tr>
    <tr><td></td><td align="right">
    <input class="button"type="submit" value="Submit" name="submit">
    </td></tr>
</form></table>