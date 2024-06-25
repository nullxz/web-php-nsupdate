				<select id="formSelector">
					<option value="">--- Select ---</option>
					<option value="TXT">TXT. Plain Text</option>
					<option value="A">A. Address IPv4</option>
					<option value="AAAA">AAAA. Address IPv6</option>
					<option value="CNAME">CNAME. Canonical Name</option>
					<option value="MX">MX. Mail Exchanger</option>
					<option value="SRV">SRV. Service</option>
					<option value="SSHFP">SSHFP. Secure Shell fingerprint</option>
					<option value="CAA">CAA. Certification Authority Authorization</option>
					<option value="TLSA">TLSA. Certificate Association</option>
					<option value="NS">NS. Name Server</option>
					<option value="SOA">SOA. Start of Authority</option>
				</select><BR><BR>
			<div>
			<form method="POST" action="index.php" id="A" class="add_form">
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN A</label>
				<input name="RR_A" type="text" placeholder="0.0.0.0" required>
				<input type="hidden" name="RR_TYPE" value="A">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="AAAA" class="add_form">
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN AAAA</label>
				<input name="RR_AAAA" type="text" placeholder="::1" required>
				<input type="hidden" name="RR_TYPE" value="AAAA">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="CNAME" class="add_form">
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="www.example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN CNAME</label>
				<input name="RR_CNAME" type="text" placeholder="example.com" required>
				<input type="hidden" name="RR_TYPE" value="CNAME">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="MX" class="add_form">
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN MX</label>
				<input name="RR_PRIORITY" type="number" placeholder="10" required>
				<input name="RR_MX" type="text" placeholder="mailserver.example.com" required>
				<input type="hidden" name="RR_TYPE" value="MX">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="TXT" class="add_form">
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN TXT</label><BR><BR>
				<textarea name="RR_TXT" rows="4" cols="70" placeholder="&#xFF02;Don't forget the double quotation marks.!&#xFF02;" required></textarea>
				<input type="hidden" name="RR_TYPE" value="TXT">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="SRV" class="add_form">
				<label>Service:</label>
				<input name="RR_SERVICE" type="text" placeholder="minecraft" required>
				<label>Protocol:</label>
				<input name="RR_PROTOCOL" type="text" placeholder="tcp" required>
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN SRV</label>
				<label>Priority:</label>
				<input name="RR_PRIORITY" type="number" placeholder="10" required>
				<label>Weight:</label>
				<input name="RR_WEIGHT" type="number" placeholder="10" required>
				<label>Port:</label>
				<input name="RR_PORT" type="number" placeholder="25565" required>
				<label>Target:</label>
				<input name="RR_TARGET" type="text" placeholder="example.com" required>
				<input type="hidden" name="RR_TYPE" value="SRV">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="SSHFP" class="add_form">
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN SSHFP </label><BR>
				<label>Algorithm:</label>
				<select id="rr-select" name="RR_ALGORITHM">
					<option value="0">0. Reserved</option>
					<option value="1">1. RSA</option>
					<option value="2">2. DSA</option>
					<option value="3">3. ECDSA</option>
					<option value="4">4. Ed25519</option>
					<option value="5">5. Unassigned</option>
					<option value="6">6. Ed448</option>
				</select>
				<label>Hash:</label>
				<select id="rr-select" name="RR_HASH">
					<option value="0">0. Reserved</option>
					<option value="1">1. SHA-1</option>
					<option value="2">2. SHA-256</option>
				</select>
				<textarea name="RR_VALUE" rows="1" cols="70" required placeholder="AD7D16704F4203AD7F58589EDFADABA0EC80DCFB"></textarea>
				<input type="hidden" name="RR_TYPE" value="SSHFP">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="CAA" class="add_form">
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN CAA Flags:</label>
				<input name="RR_FLAGS" type="number" value="0" required><BR>
				<select id="rr-select" name="RR_TAG">
					<option value="issue">Allow</option>
					<option value="issuewild">Allow Wildcard</option>
					<option value="iodef">Email Report Address</option>
				</select>
				<textarea name="RR_VALUE" rows="1" cols="70" required>;</textarea>
				<input type="hidden" name="RR_TYPE" value="CAA">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			<form method="POST" action="index.php" id="TLSA" class="add_form">
				<label>Port:</label>
				<input name="RR_PORT" type="text" placeholder="443" required>
				<label>Protocol:</label>
				<input name="RR_PROTOCOL" type="text" placeholder="tcp" required>
				<label>NAME:</label>
				<input name="RR_NAME" type="text" placeholder="example.com" required>
				<label>TTL:</label>
				<input name="RR_TTL" type="number" value="300" required>
				<label>IN TLSA</label>
				<select id="rr-select" name="RR_USAGE">
					<option value="0">0. CA constraint</option>
					<option value="1">1. Service certificate constraint</option>
					<option value="2">2. Trust anchor assertion</option>
					<option value="3">3. Domain-issued certificate</option>
				</select>
				<select id="rr-select" name="RR_SELECTOR">
					<option value="0">0. Full Certificate</option>
					<option value="1">1. Subject Public Key Info</option>
				</select>
				<select id="rr-select" name="RR_MATCHING">
					<option value="0">0. Full Content</option>
					<option value="1">1. SHA-256 Hash</option>
					<option value="2">2. SHA-512 Hash</option>
				</select>
				<textarea name="RR_CERTINFO" rows="1" cols="100" placeholder="ce2ec65530fe8d248648af1c13c" required></textarea>
				<input type="hidden" name="RR_TYPE" value="TLSA">
				<BR><BR>
				<input type="hidden" name="RR_MODE" value="ADD">
				<input type="submit" value="Submit" onclick="return askDNSAdd()">
			</form>
			</div>
