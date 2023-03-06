
    <script>
        $day;
        switch (new Date() .getDay()) {  // these are in this pattern only
            case 0: 
            day = "Sunday";
            break;
            case 1:
            day = "Monday";
            break;
            case 2:
            day = "Tuesday";
            case 3:
            day = "Wednesday";
            break;
            case 4:
            day = "Thursday";
            break;
            case 5:
            day = "Friday";
            break ;
            case 6:
            day = "Saturday";
            break;
            default:    // this is the default in case the info enter by user from output doesn't match your consequenced 
            day = "LOOKING FORWARD TO THE WEEKEND";
        }

        echo "Today is :" . $day