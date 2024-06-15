<table>
	<tr>
		<th>Name</th>
		<th>Type</th>
		<th>TTL</th>
		<th style="width:50%">Content</th>
		<th style="width:10%">Edit</th>
	</tr>
	<?php foreach ($dnsRecords as $record): ?>
	<tr>
		<td id="td"><?php echo htmlspecialchars($record['RR_NAME']); ?></td>
		<td id="td"><?php echo htmlspecialchars($record['RR_TYPE']); ?></td>
		<td id="td"><?php echo htmlspecialchars($record['RR_TTL']); ?></td>
		<td id="td"><?php echo htmlspecialchars($record['RR_CONTENT']); ?></td>
		<td id="td"><button type="button" class="edit_button">Edit</button></td>
	</tr>
	<tr class="form_row">
		<td id="td-no-border" colspan="5">
		<form class="EDITGUI" method="POST" action="index.php">
			<?php if ($record['RR_TYPE'] == 'TXT'): ?>
			<!-- FOR TXT RR-->
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<label for="RR_TXT">TEXT:</label>

			<textarea required id="RR_TXT" name="RR_TXT" rows="4" cols="70"><?php echo htmlspecialchars($record['RR_TXT']); ?></textarea>
			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_TXT_OLD" name="RR_TXT_OLD" value="<?php echo htmlspecialchars($record['RR_TXT']); ?>">
			<!-- END TXT RR -->
			<?php elseif ($record['RR_TYPE'] == 'A'): ?>
			<!-- FOR A RR-->
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<label for="RR_A">Address:</label>
			<input required type="text" id="RR_A" name="RR_A" value="<?php echo htmlspecialchars($record['RR_A']); ?>">

			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_A_OLD" name="RR_A_OLD" value="<?php echo htmlspecialchars($record['RR_A']); ?>">
			<!-- END A RR -->
			<?php elseif ($record['RR_TYPE'] == 'AAAA'): ?>
			<!-- FOR AAAA RR-->
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<label for="RR_AAAA">Address:</label>
			<input required type="text" id="RR_AAAA" name="RR_AAAA" value="<?php echo htmlspecialchars($record['RR_AAAA']); ?>">

			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_AAAA_OLD" name="RR_AAAA_OLD" value="<?php echo htmlspecialchars($record['RR_AAAA']); ?>">
			<!-- END AAAA RR -->
			<?php elseif ($record['RR_TYPE'] == 'CNAME'): ?>
			<!-- FOR CNAME RR-->
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<label for="RR_CNAME">Target:</label>
			<input required type="text" id="RR_CNAME" name="RR_CNAME" value="<?php echo htmlspecialchars($record['RR_CNAME']); ?>">

			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_CNAME_OLD" name="RR_CNAME_OLD" value="<?php echo htmlspecialchars($record['RR_CNAME']); ?>">
			<!-- END CNAME RR -->
			<?php elseif ($record['RR_TYPE'] == 'MX'): ?>
			<!-- FOR MX RR-->
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<label for="RR_PRIORITY">Priority:</label>
			<input required type="text" id="RR_PRIORITY" name="RR_PRIORITY" value="<?php echo htmlspecialchars($record['RR_PRIORITY']); ?>">
			<label for="RR_MX">Target:</label>
			<input required type="text" id="RR_MX" name="RR_MX" value="<?php echo htmlspecialchars($record['RR_MX']); ?>">

			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_PRIORITY_OLD" name="RR_PRIORITY_OLD" value="<?php echo htmlspecialchars($record['RR_PRIORITY']); ?>">
			<input type="hidden" id="RR_MX_OLD" name="RR_MX_OLD" value="<?php echo htmlspecialchars($record['RR_MX']); ?>">
			<!-- END MX RR -->
			<?php elseif ($record['RR_TYPE'] == 'SRV'): ?>
			<!-- FOR SRV RR-->
			<label for="RR_SERVICE">SERVICE:</label>
			<input required type="text" id="RR_SERVICE" name="RR_SERVICE" value="<?php echo htmlspecialchars($record['RR_SERVICE']); ?>">
			
			<label for="RR_PROTOCOL">PROTOCOL:</label>
			<input required type="text" id="RR_PROTOCOL" name="RR_PROTOCOL" value="<?php echo htmlspecialchars($record['RR_PROTOCOL']); ?>">
			
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			
			<label for="RR_PRIORITY">PRIORITY:</label>
			<input required type="text" id="RR_PRIORITY" name="RR_PRIORITY" value="<?php echo htmlspecialchars($record['RR_PRIORITY']); ?>">

			<label for="RR_WEIGHT">WEIGHT:</label>
			<input required type="text" id="RR_WEIGHT" name="RR_WEIGHT" value="<?php echo htmlspecialchars($record['RR_WEIGHT']); ?>">

			<label for="RR_PORT">PORT:</label>
			<input required type="text" id="RR_PORT" name="RR_PORT" value="<?php echo htmlspecialchars($record['RR_PORT']); ?>">

			<label for="RR_TARGET">Target:</label>
			<input required type="text" id="RR_TARGET" name="RR_TARGET" value="<?php echo htmlspecialchars($record['RR_TARGET']); ?>">
			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_SERVICE_OLD" name="RR_SERVICE_OLD" value="<?php echo htmlspecialchars($record['RR_SERVICE']); ?>">
			<input type="hidden" id="RR_PROTOCOL_OLD" name="RR_PROTOCOL_OLD" value="<?php echo htmlspecialchars($record['RR_PROTOCOL']); ?>">
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_PRIORITY_OLD" name="RR_PRIORITY_OLD" value="<?php echo htmlspecialchars($record['RR_PRIORITY']); ?>">
			<input type="hidden" id="RR_WEIGHT_OLD" name="RR_WEIGHT_OLD" value="<?php echo htmlspecialchars($record['RR_WEIGHT']); ?>">
			<input type="hidden" id="RR_PORT_OLD" name="RR_PORT_OLD" value="<?php echo htmlspecialchars($record['RR_PORT']); ?>">
			<input type="hidden" id="RR_TARGET_OLD" name="RR_TARGET_OLD" value="<?php echo htmlspecialchars($record['RR_TARGET']); ?>">
			<!-- END SRV RR -->
			<?php elseif ($record['RR_TYPE'] == 'SSHFP'): ?>
			<!-- FOR SSHFP RR-->
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<label for="RR_ALGORITHM">Algorithm:</label>
			<input required type="text" id="RR_ALGORITHM" name="RR_ALGORITHM" value="<?php echo htmlspecialchars($record['RR_ALGORITHM']); ?>">
			<label for="RR_HASH">HASH:</label>
			<input required type="text" id="RR_HASH" name="RR_HASH" value="<?php echo htmlspecialchars($record['RR_HASH']); ?>">
			<label for="RR_FINGERPRINT">Target:</label>
			<textarea id="RR_FINGERPRINT" name="RR_FINGERPRINT" rows="1" cols="70" required placeholder="AD7D16704F4203AD7F58589EDFADABA0EC80DCFB"><?php echo htmlspecialchars($record['RR_FINGERPRINT']); ?></textarea>

			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_ALGORITHM_OLD" name="RR_ALGORITHM_OLD" value="<?php echo htmlspecialchars($record['RR_ALGORITHM']); ?>">
			<input type="hidden" id="RR_HASH_OLD" name="RR_HASH_OLD" value="<?php echo htmlspecialchars($record['RR_HASH']); ?>">
			<input type="hidden" id="RR_FINGERPRINT_OLD" name="RR_FINGERPRINT_OLD" value="<?php echo htmlspecialchars($record['RR_FINGERPRINT']); ?>">
			<!-- END SSHFP RR -->
			<?php elseif ($record['RR_TYPE'] == 'TLSA'): ?>
			<!-- FOR TLSA RR-->
			<label for="RR_PORT">Port:</label>
			<input required type="text" id="RR_PORT" name="RR_PORT" value="<?php echo htmlspecialchars($record['RR_PORT']); ?>">
			
			<label for="RR_PROTOCOL">PROTOCOL:</label>
			<input required type="text" id="RR_PROTOCOL" name="RR_PROTOCOL" value="<?php echo htmlspecialchars($record['RR_PROTOCOL']); ?>">
			
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			
			<label for="RR_USAGE">USAGE:</label>
			<input required type="text" id="RR_USAGE" name="RR_USAGE" value="<?php echo htmlspecialchars($record['RR_USAGE']); ?>">

			<label for="RR_SELECTOR">Selector:</label>
			<input required type="text" id="RR_SELECTOR" name="RR_SELECTOR" value="<?php echo htmlspecialchars($record['RR_SELECTOR']); ?>">

			<label for="RR_MATCHING">Matching:</label>
			<input required type="text" id="RR_MATCHING" name="RR_MATCHING" value="<?php echo htmlspecialchars($record['RR_MATCHING']); ?>">

			<label for="RR_CERTINFO">CERT Hex:</label>
			<input required type="text" id="RR_CERTINFO" name="RR_CERTINFO" value="<?php echo htmlspecialchars($record['RR_CERTINFO']); ?>">
			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_PORT_OLD" name="RR_PORT_OLD" value="<?php echo htmlspecialchars($record['RR_PORT']); ?>">
			<input type="hidden" id="RR_PROTOCOL_OLD" name="RR_PROTOCOL_OLD" value="<?php echo htmlspecialchars($record['RR_PROTOCOL']); ?>">
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_USAGE_OLD" name="RR_USAGE_OLD" value="<?php echo htmlspecialchars($record['RR_USAGE']); ?>">
			<input type="hidden" id="RR_SELECTOR_OLD" name="RR_SELECTOR_OLD" value="<?php echo htmlspecialchars($record['RR_SELECTOR']); ?>">
			<input type="hidden" id="RR_MATCHING_OLD" name="RR_MATCHING_OLD" value="<?php echo htmlspecialchars($record['RR_MATCHING']); ?>">
			<input type="hidden" id="RR_CERTINFO_OLD" name="RR_CERTINFO_OLD" value="<?php echo htmlspecialchars($record['RR_CERTINFO']); ?>">
			<!-- END TLSA RR -->		
			<?php elseif ($record['RR_TYPE'] == 'CAA'): ?>
			<!-- FOR CAA RR-->
			<label for="RR_NAME">Name:</label>
			<input required type="text" id="RR_NAME" name="RR_NAME" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<label for="RR_TYPE">Type:</label>
			<input required type="text" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>" disabled>
			<input type="hidden" id="RR_TYPE" name="RR_TYPE" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<label for="RR_TTL">TTL:</label>
			<input required type="text" id="RR_TTL" name="RR_TTL" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<label for="RR_FLAGS">Flags:</label>
			<input required type="text" id="RR_FLAGS" name="RR_FLAGS" value="<?php echo htmlspecialchars($record['RR_FLAGS']); ?>">
			<label for="RR_TAG">Tag:</label>
			<input required type="text" id="RR_TAG" name="RR_TAG" value="<?php echo htmlspecialchars($record['RR_TAG']); ?>">
			<label for="RR_VALUE">Value:</label><BR>
			<textarea id="RR_VALUE" name="RR_VALUE" rows="1" cols="70" required placeholder="ca.example.com"><?php echo htmlspecialchars($record['RR_VALUE']); ?></textarea>

			<!-- สำหรับ UPDATE -->
			<input type="hidden" id="RR_NAME_OLD" name="RR_NAME_OLD" value="<?php echo htmlspecialchars($record['RR_NAME']); ?>">
			<input type="hidden" id="RR_TYPE_OLD" name="RR_TYPE_OLD" value="<?php echo htmlspecialchars($record['RR_TYPE']); ?>">
			<input type="hidden" id="RR_TTL_OLD" name="RR_TTL_OLD" value="<?php echo htmlspecialchars($record['RR_TTL']); ?>">
			<input type="hidden" id="RR_FLAGS_OLD" name="RR_FLAGS_OLD" value="<?php echo htmlspecialchars($record['RR_FLAGS']); ?>">
			<input type="hidden" id="RR_TAG_OLD" name="RR_TAG_OLD" value="<?php echo htmlspecialchars($record['RR_TAG']); ?>">
			<input type="hidden" id="RR_VALUE_OLD" name="RR_VALUE_OLD" value="<?php echo htmlspecialchars($record['RR_VALUE']); ?>">
			<!-- END CAA RR -->			
			
			<?php else: ?>
				<?php echo "Other type not support!"; ?>
			<?php endif; ?>

                    <br>
                    <input required id="RR_UPDATE" type="radio" name="RR_MODE" value="UPDATE">
                    <label for="RR_UPDATE">Update</label><br>
                    <input required id="RR_DELETE" type="radio" name="RR_MODE" value="DELETE">
                    <label for="RR_DELETE">Delete</label><br><br>
                    <input type="submit" value="Submit">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
