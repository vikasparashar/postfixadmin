<?php
$info=array();
	$info["objectclass"][0] = "top";
        #$info["objectclass"][1] = "person";
        #$info["objectclass"][2] = "organizationalPerson";
        $info["objectclass"][1] = "inetOrgPerson";
        $info["objectclass"][2] = "VirtualAdmin";
        $info["cn"] = "";
        $info["sn"] = "";
        $info["userPassword"] = "";
        $info["maxDomain"] = 10;
        #$info["creationDate"] = time();
        $info["lastChange"] = time();
        $info["accountActive"] = "TRUE";




?>
