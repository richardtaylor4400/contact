<h2><?php echo $title; ?></h2>

		<!-- Normal content: Stuff that's not going to be put in the left or right column. -->
		<div id="normalcontent">
			
			<div class="contentarea">
				<table border='1' cellpadding='4' width='100%'>
    <tr>
        <td><strong>Firstname</strong></td>
        <td><strong>Lastname</strong></td>
        <td><strong>Phone</strong></td>
		<td><strong>Mobile</strong></td>
    </tr>
<?php foreach ($contact as $contact_item): ?>
        <tr>
            <td><?php echo $contact_item['firstname']; ?></td>
            <td><?php echo $contact_item['lastname']; ?></td>
			<td><?php echo $contact_item['phone']; ?></td>
			<td><?php echo $contact_item['mobile']; ?></td>
            <td>
                <a href="<?php echo site_url('contact/view/'.$contact_item['id']); ?>">View</a> | 
                <a href="<?php echo site_url('contact/edit/'.$contact_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('contact/delete/'.$contact_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>

			</div>
 

