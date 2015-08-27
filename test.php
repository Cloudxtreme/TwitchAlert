<?php  
    $json  = json_decode(file_get_contents("https://api.twitch.tv/kraken/users/c1up3/follows/channels"));
    $i = 0;
    // Use http://json.parser.online.fr/ to get the string parse of the Json_Decode
        echo "<table><tr>";
        echo "<th>Username:</th>";
        echo "<th>Follow Date:</th>";
        echo "<th>Type:</th>";
        echo "<th> </th>";  
        echo "</tr>";
        foreach($json->follows as $follow) { 
        $i++;
        echo "<tr>";
        echo "<td>" . $follow->channel->display_name . "</td>";
        echo "</tr>";
    } 
        echo "</table>";
    //$follow = grabbing the json object for follows > user > name. 
?>