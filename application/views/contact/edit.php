<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('contact/edit/'.$contact_item['id']); ?>
    <table>
        <tr>
            <td><label for="firstname">Firstname</label></td>
            <td><input type="input" name="firstname" size="50" value="<?php echo $contact_item['firstname'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="lastname">Lastname</label></td>
            <td><input type="input" name="lastname" size="50" value="<?php echo $contact_item['lastname'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="phone">phone</label></td>
            <td><input type="input" name="phone" size="50" value="<?php echo $contact_item['phone'] ?>" /></td>
        </tr>
	    <tr>
            <td><label for="mobile">mobile</label></td>
            <td><input type="input" name="mobile" size="50" value="<?php echo $contact_item['mobile'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit contact" /></td>
        </tr>
    </table>
</form>
