<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('contact/create'); ?>    
    <table>
        <tr>
            <td><label for="firstname">Firstname</label></td>
            <td><input type="input" name="firstname" size="50" /></td>
        </tr>
        <tr>
            <td><label for="lastname">Lastname</label></td>
            <td><input type="input" name="lastname" size="50" /></td>
        </tr>
		<tr>
            <td><label for="phone">phone</label></td>
            <td><input type="input" name="phone" size="50" /></td>
        </tr>
	    <tr>
            <td><label for="mobile">mobile</label></td>
            <td><input type="input" name="mobile" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add contact" /></td>
        </tr>
    </table>
</form>