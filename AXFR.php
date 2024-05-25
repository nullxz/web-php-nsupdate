<?php
// GET AXFR For GUI
exec("/usr/bin/dig -k $TSIG_PATH AXFR $ZONE @$NS +noclass +nocomments +nocmd +nostats", $cmdout, $exitcode);

if ($exitcode !== 0) {
    die("AXFR query failed with exit code $exitcode Do you forget to edit the CONFIG.php?");
}



// Function to parse the dig output into DNS records
function parseDigOutput($output) {
	$records = [];
	foreach ($output as $line) {
		// Regular expression to match a DNS record format
		$pattern = '/^(\S+)\s+(\d+)\s+(\S+)\s+(.+)$/';
	if (preg_match($pattern, $line, $matches)) {
		$name = $matches[1];
		$ttl = $matches[2];
		$type = $matches[3];
		$content = $matches[4];

		$record = [
		'RR_NAME' => $name,
		'RR_TTL' => $ttl,
		'RR_TYPE' => $type,
		'RR_A' => '',
		'RR_AAAA' => '',
		'RR_CONTENT' => $content, // Initialize RR_CONTENT
		'RR_PRIORITY' => '', // Initialize RR_PRIORITY
		'RR_WEIGHT' => '', // Initialize RR_WEIGHT
		'RR_PORT' => '', // Initialize RR_PORT
		'RR_TARGET' => '', // Initialize RR_TARGET
		'RR_FLAGS' => '', // Initialize RR_FLAGS
		'RR_TAG' => '', // Initialize RR_TAG
		'RR_VALUE' => '', // Initialize RR_VALUE
		'RR_ALGORITHM' => '', // Initialize RR_ALGORITHM
		'RR_FINGERPRINT' => '', // Initialize RR_FINGERPRINT
		'RR_NULL' => '', // Initialize RR_NULL
		];

            // Only process specific record types
            if (in_array($type, ['TXT', 'A', 'AAAA', 'CNAME', 'MX', 'SRV', 'SSHFP', 'TLSA', 'CAA'])) {
                switch ($type) {
			case 'TXT':
				// TXT
				$record['RR_TXT'] = $content;
				break;
			case 'A':
				// A
				$record['RR_A'] = $content;
				break;
			case 'AAAA':
				// AAAA
				$record['RR_AAAA'] = $content;
				break;
			case 'CNAME':
				// CNAME
				$record['RR_CNAME'] = $content;
				break;
			case 'MX':
				// MX
				if (preg_match('/^(\d+)\s+(\S+)\s*$/', $content, $mxMatches)) {
					$record['RR_PRIORITY'] = $mxMatches[1];
					$record['RR_MX'] = $mxMatches[2];
				}
				break;
			case 'SRV':
				// SRV
				if (preg_match('/^_([A-z0-9-]+)\._([A-z0-9-]+)\.(\S+)\s+(\d+)\s+SRV\s+(\d+)\s+(\d+)\s+(\d+)\s+(\S+)$/', $line, $srvMatches)) {
					$record['RR_SERVICE'] = $srvMatches[1];
					$record['RR_PROTOCOL'] = $srvMatches[2];
					$record['RR_NAME'] = $srvMatches[3];
					$record['RR_TTL'] = $srvMatches[4];
					$record['RR_PRIORITY'] = $srvMatches[5];
					$record['RR_WEIGHT'] = $srvMatches[6];
					$record['RR_PORT'] = $srvMatches[7];
					$record['RR_TARGET'] = $srvMatches[8];

				}
				break;
			case 'SSHFP':
				// SSHFP
				if (preg_match('/^(\d{1,3})\s(\d{1,3})\s(.+)$/', $content, $sshfpMatches)) {
					$record['RR_ALGORITHM'] = $sshfpMatches[1];
					$record['RR_HASH'] = $sshfpMatches[2];
					$record['RR_FINGERPRINT'] = $sshfpMatches[3];
				}
				break;
			case 'TLSA':
				// TLSA
				if (preg_match('/^_([0-9]+)\._([A-z]+)\.(\S+)\.\s+(\d+)\s+TLSA\s+(\d+)\s+(\d+)\s+(\d+)\s+(.+)/', $line, $tlsaMatches)) {
					$record['RR_PORT'] = $tlsaMatches[1];
					$record['RR_PROTOCOL'] = $tlsaMatches[2];
					$record['RR_NAME'] = $tlsaMatches[3];
					$record['RR_TTL'] = $tlsaMatches[4];
					$record['RR_USAGE'] = $tlsaMatches[5];
					$record['RR_SELECTOR'] = $tlsaMatches[6];
					$record['RR_MATCHING'] = $tlsaMatches[7];
					$record['RR_CERTINFO'] = $tlsaMatches[8];

				}
				break;
			case 'CAA':
				// CAA
				if (preg_match('/^(\d{1,3})\s(\S+)\s(.+)$/', $content, $caaMatches)) {
					$record['RR_FLAGS'] = $caaMatches[1];
					$record['RR_TAG'] = $caaMatches[2];
					$record['RR_VALUE'] = $caaMatches[3];
				}
				break;
			case 'NSEC':
			case 'RRSIG':
                        $record['RR_NULL'] = $content;
			break;
			}
		$records[] = $record;
		}
	}
}
    return $records;
}

$dnsRecords = parseDigOutput($cmdout);
?>
