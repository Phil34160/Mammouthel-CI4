<div class="main"><button onclick="window.location.href='http://localhost:8080/Home/index_info_note/<?=$index?>'">Return</button>&emsp;&emsp;<strong>Update record</strong><br><br><table><form method="post" action="http://localhost:8080/Home/action_update_notes/<?=$index?>">
	<tr><td><label for="id" id="placeholder">Note_id:</label></td><td>
    <input type="number" name="id" placeholder="Enter note_id to update" id="placeholder">
    </td></tr>
    <tr><td><br></td></tr>
    <tr><td><strong>Edit record :</strong></td></tr>
    <tr><td><br></td></tr>
    <tr><td>
    <label for="title">Title:</label></td><td>
    <input type="text" name="title" placeholder="Enter Title" id="title">
    </td></tr>
    <tr><td>
    <label for="content">Content:</label></td><td>
    <textarea  name="content" placeholder="Enter Content" id="content"></textarea></td></tr>
    <tr><td></td><td align="right">
    <input class="button"type="submit" value="Submit" name="submit">
    </td></tr>
</form></table>